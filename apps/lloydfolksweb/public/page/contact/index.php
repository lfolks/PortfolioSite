<?php
// Import and require the config file from the data folder
require_once("../../../data/config.php");

$page_id = "contact";

$contact = new CONTACT();

/*
 * Start Contact Form v3
 * Using: PHPMailer
 */
//Include PHPMailer
require_once($root . "bin/assets/php/includes/phpmailer/Exception.php");
require_once($root . "bin/assets/php/includes/phpmailer/PHPMailer.php");
require_once($root . "bin/assets/php/includes/phpmailer/SMTP.php");
	
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;

//Start form processing
if(isset($_POST["ContactForm"])){
//Start isset$_post
	//Set send to
	//$to = "support@example.com";
	//Set Form Data Array
	$formData = $_POST["ContactForm"];
	
	//Start Form Validation and Sanitization
	//Name field
	if(strlen($formData["fullname"]) > 0){
		$name = $contact->sstring($formData["fullname"]);
	}else{
		$errorMessage["name"] = "<p class='err'>Please enter your name.</p>";
	}
	
	//Email field
	if (filter_var($formData["email"], FILTER_VALIDATE_EMAIL)){
		$from = $contact->sstring($formData["email"]);
	}else{
		$errorMessage["email"] = "<p class ='err'>Please use a valid email format: name@domain.com.</p>";
	}
	
	//Message field
	if(strlen($formData["message"])>1){
		$message = $contact->sstring($formData["message"]);
	}else{
		$errorMessage["message"] = "<p class='err'>Cannot leave message box blank.</p>";
	}
	//End Form Validation and Sanitization
	
	//Check captcha response
	if(isset($_POST["g-recaptcha-response"]) && !empty($_POST["g-recaptcha-response"])){
	//Start captcha check
		$secretKey = "6LfbmG0fAAAAADZXIddMSmLnYcveIbgeOR6i5nna";
		$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$_POST['g-recaptcha-response']);
		$responseData = json_decode($response);
		//Captcha success
		if($responseData->success){
		//Start captcha success
			//Check for errors and form data
			if(empty($errorMessage)){
			//Start check for errors
				$formsuccess = "
					<div class='row'>
						<div class='col-2'>
						</div>
							<div class='col-8'>
								<p>Thank you, <strong>" . $name . "</strong>!</p><p>Your message has been sent to me!</p><p>Thank you and have a great day!</p>
							</div>
						<div class='col-2'>
					</div>
				";
				//Create a new PHPMailer instance
				$llsmail = new PHPMailer;
				$llsmail->isSMTP();
				$llsmail->SMTPDebug = 0; // 0 - off, 1 - Client messeng, 2 - Client and Server message
				$llsmail->Host = "imap.dreamhost.com";
				$llsmail->SMTPSecure = "tls";
				$llsmail->Port = 587;
				$llsmail->SMTPAuth = true;
				$llsmail->Username = "messenger@llstraining.com";
				$llsmail->Password = "jRC0Rw5!&7tudXn7";
				//Use a fixed address in your own domain as the from address **DO NOT** use the submitter's address here as it will be forgery and will cause your messages to fail SPF checks
				$llsmail->setFrom("messenger@llstraining.com", "Legacy Learning Solutions Messenger Service");
				//Send the message to yourself, or whoever should receive contact for submissions
				//$llsmail->addAddress("some@email.com", "Someone's additional email...");
				$llsmail->addAddress($to, $subject);
				//Put the submitter's address in a reply-to header. This will fail if the address provided is invalid, in which case we should ignore the whole request
				if($llsmail->addReplyTo($from, $name)){
				//Start email and header reply-to
					$llsmail->Subject = $subject;
					$llsmail->isHTML(true);

					$llsmail->Body = "\n<h3>Name: " . $name . "\n<br>\nCompany: " . $company . "\n<br>\nTitle: " . $title . "\n<br>\nFrom: " . $from . "\n<br>\nPhone: " . $phone . "\n<br>\n</h3>\n<hr>\n<h4>Subject: " . $subject . "</h4>\n<h6>Start of Message</h6>\n<p>" . $message . "</p>\n<h6>End of Message\n<br>\nLegacy Learning Solutions Messaging Service</h6>";

					$llsmail->AltBody = "<<<EOT

					Name: {$name}
					
					Company: {$company}
					
					Title: {$title}

					Email: {$from}

					Phone: {$phone}

					Subject: {$subject}

					Message: {$message}

					EOT";

					//Send email and final error check
					if(!$llsmail->send()){
					//Start send mail
					//The reason for failing to send will be in $mail->ErrorInfo but you shouldn't display errors to users - process the error, log it on your server.
					$formfail = "
						<div class='row'>
							<div class='col my-4'>
								<h2 class='ctitle llsfont'>Contact Legacy Learning Solutions</h2>
							</div>
						</div>
						<div class='row'>
							<div class='col-2'>
							</div>
							<div class='col-8'>
								<p>Thank you, <strong>" . $name . "</strong>!</p><p>Your message has been sent to our " . $subject . "!</p><p>Someone within the department you selected will contact you at <strong>" . $from . "</strong>.</p><p>Thank you and have a great day!</p>
							</div>
							<div class='col-2'>
							</div>
						</div>
					";
					//End send mail
					}else{
					//Start else statement for send mail
						$errorMessage["success"] = "<p class='pass'>Message sent! Thanks for contacting us.</p>";
					//End else statement for send mail
					}
				//End email and header reply-to
				}else{
				//Start else statement for email and header reply to
					$errorMessage["email"] = "<p class='err'>Invalid email address, please provide a valid email address.</p>";
				//End else statement for email and header reply to
				}
			//End check for errors
			}
		//End captcha success
		}
	//End captcha check
	}else{
	//Start else statement for captcha check
		$errorMessage["captcha"] = "<p class='err text-center'>Please complete the captcha.</p>";
	//End else statement for captcha check
	}
//End isset$_post	
}
//End Contact Form
$form = "
	<form id=\"ContactForm\" name=\"ContactForm\" method=\"post\">

		<div class=\"formControl\">
			<input type=\"text\" id=\"name\" name=\"ContactForm[fullname]\" required placeholder=\"Enter your name...\">
		</div>
		<div class=\"formControl\">
			<input type=\"email\" id=\"email\" name=\"ContactForm[email]\" required placeholder=\"Enter your email...\">
		</div>
		<div class=\"formControl\">
			<textarea id=\"message\" name=\"ContactForm[message]\"  rows=\"6\" required placeholder=\"Enter your message...\"></textarea>
		</div>
		<div class=\"formControl\">
			<input type=\"submit\" id=\"ContactFormSend\" name=\"ContactFormSend\" value=\"Send!\">
		</div>

	</form>
";

$HTML->Header();

?>

<div class="row">
	
	<div class="main">

			<div class="row form">
				<div class="main">
					<?php
						if(isset($formsuccess)){
							echo $formsuccess;
						}else{
							if(isset($formfail)){
								echo $formfail;
							}else{
								echo $form;
							}
						}
					?>
				</div>
			</div>
		
	</div>
	
</div>


<?php

$HTML->Footer();

?>