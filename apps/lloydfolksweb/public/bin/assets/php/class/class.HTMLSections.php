<?php
/*
 * Name: HTML Sections
 * Desc: Class for HTML sections of the site.
 */
    // HTML Class - Used to populate the HTML sections of the site
    class HTML {
		
		function __construct($wwwroot){
			$this->wwwroot = $wwwroot;
		}
        
        function Header(){
			
			echo "<!-- Begin Header -->
<!DOCTYPE html>
<html lang=\"en\">
	<head>
		<title>Time to meet Lloyd Folks!</title>
		<meta charset=\"utf-8\"/>
		<link href=\"" . $this->wwwroot . "/bin/assets/css/landing.css\" rel=\"stylesheet\" type=\"text/css\">
	</head>
	<body>

		<header>
			<!--
			TODO: Get a picture that will be good for the page! :)
			<img class=\"landingLogo\" src=" . $this->wwwroot . "\"bin/assets/img/profilephoto.png\" alt=\"LloydFolks.com\" title=\"LloydFolks.com\">
			-->
			<h1>Journey into Code</h1>
		</header>
		<!-- Under Development
		<nav>
			<a href=\"" . $this->wwwroot . "\">Home</a>
			<a href=\"" . $this->wwwroot . "/#\">Resume</a>
			<a href=\"" . $this->wwwroot . "/#\">Portfolio</a>
			<a href=\"" . $this->wwwroot . "/#\">About Me</a>
			<a href=\"" . $this->wwwroot . "/#\">Contact Me</a>
		</nav>
		--!>
<!-- End Header -->";
			
        }
        
        function Footer(){
			
			echo "<!-- Begin Footer -->
		<footer>
			<p>&copy; " . date("Y") . " &bull; Lloyd Folks.</p>
			<small>Coded simply using <strong><i>HTML/CSS and PHP</i></strong>.</small>
		</footer>
	</body>
</html>
<!-- End Footer -->";
			
        }
		
		function Body(){
			
			echo "";
			
		}
        
    }


?>