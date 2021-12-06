<?php

require_once("../ldf_data/config.php");

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Time to meet Lloyd Folks!</title>
		<meta charset="utf-8"/>
		<link href="bin/assets/css/landing.css" rel="stylesheet" type="text/css">
	</head>
	<body>

		<header>
			<!--
			TODO: Get a picture that will be good for the page! :)
			<img class="landingLogo" src="bin/assets/img/profilephoto.png" alt="LloydFolks.com" title="LloydFolks.com">
			-->
			<h1>Welcome to LloydFolks.com</h1>
		</header>
		<nav>
			<a href="<?php echo $wwwroot; ?>">Home</a>
			<a href="<?php echo $wwwroot . "/resume"; ?>">Resume</a>
			<a href="<?php echo $wwwroot . "/portfolio"; ?>">Portfolio</a>
			<a href="<?php echo $wwwroot . "/about"; ?>">About Me</a>
			<a href="<?php echo $wwwroot . "/contact"; ?>">Contact Me</a>
		</nav>
		<main>
			<h1>Hello and welcome to my portfolio!</h1>
			<hr>
			<h2>Why so...<i>basic</i>?</h2>
			<p>I am still in the process of designing and coding the site as time permits between my current job and my pursuit in finding a new job. While this process is slower than I would prefer, it does award me the opportunity to take time to truly think about the design and how I want to structure my code.</p>
			<p>Please feel free to check back anytime and see what changes!</p>
			<h2>Current Plans</h2>
			<ol>
				<li>Get the landing page coded and uploaded to the web server!</li>
				<ul>
					<li>IN PROGRESS</li>
				</ul>
				<li>Create the contact page so that people can reach out to me easily!</li>
				<li>Create the resume page so that my skills and experience can be shared with the world!</li>
				<li>Create the about me page so that I can share more details about...well...me!</li>
				<li>Create the portfolio page so that I link my various projects to be reviewed by anyone interested!</li>
				<li>Outline plans for recreating this site using various frameworks and technology such as AngularJS, Vue.js, Laravel, and others!</li>
			</ol>
		</main>
		<footer>
			<p>&copy; 2021 Lloyd Folks.</p>
			<small>Coded simply using <strong><i>HTML/CSS and PHP</i></strong>.</small>
		</footer>
	</body>
</html>
