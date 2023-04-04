<?php
// Start time for page load test
$stime = microtime(true);
/*
 * Check if the config file is in the root data folder.
 * Current: Post error using exit to stop the program.
 * Future: Redirect to setup process.
 */
if(file_exists("../../../data/config.php")){
	require("../../../data/config.php");
}else{
	exit("Without the configuration file located in the data folder, the site will not function. This error will be replaced with a setup process at a future date.");
}

$HTML->Header();

/*
 * Contact Form using PHPMailer with Google Recaptcha
 * Includes server and client side validation.
 */

// Include PHPMailer
require_once($data . "res/core/php/mail/Exception.php");
require_once($data . "res/core/php/mail/PHPMailer.php");
require_once($data . "res/core/php/mail/SMTP.php");
	
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$formstate = "";

//Start form processing
if(isset($_POST["ContactForm"])){
	
}

$form = "
	
";

?>

<main class="flex-shrink-0">
	<div class="container">
		<h1 class="mt-5">Contact</h1>
		<p class="lead">Reach out to me with your questions or comments!</p>
		<hr>
		<?php
			
		?>				
	</div>
</main>

<?php

$HTML->Footer();
// End time and calculate page load time
echo "<center>This page was generated in " . (number_format(microtime(true) - $stime, 5)) . " seconds.</center><br>";
?>
