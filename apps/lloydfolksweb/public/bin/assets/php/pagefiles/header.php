<?php

	if(isset($appname)){
		echo "<!-- Begin Header -->
<!DOCTYPE html>
<html lang=\"en\">
	<head>
		<title>Time to meet Lloyd Folks!</title>
		<meta charset=\"utf-8\"/>
		<link href=\"" . $wwwroot . "/bin/assets/css/landing.css\" rel=\"stylesheet\" type=\"text/css\">
	</head>
	<body>

		<header>
			<!--
			TODO: Get a picture that will be good for the page! :)
			<img class=\"landingLogo\" src=" . $wwwroot . "\"bin/assets/img/profilephoto.png\" alt=\"LloydFolks.com\" title=\"LloydFolks.com\">
			-->
			<h1>Welcome to LloydFolks.com</h1>
		</header>
		<nav>
			<a href=\"" . $wwwroot . "\">Home</a>
			<a href=\"" . $wwwroot . "/#\">Resume</a>
			<a href=\"" . $wwwroot . "/#\">Portfolio</a>
			<a href=\"" . $wwwroot . "/#\">About Me</a>
			<a href=\"" . $wwwroot . "/#\">Contact Me</a>
		</nav>
<!-- End Header -->";
	}else{
		echo "
<h1>Welcome to my Header File!</h1>
<p>You found your way to my header file. Nothing much to see here without the rest of the site. Head on over to <a href=\"https://www.lloydfolks.com\">lloydfolks.com</a> now and view the site the right way. :)</p>
";
	}

?>