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
			<h1>Welcome to LloydFolks.com</h1>
		</header>
		
		<nav>
			<ul>
				<li><a href=\"" . $this->wwwroot . "\">Home</a></li>
				<li><a href=\"" . $this->wwwroot . "/page/resume\">Resume</a></li>
				<li><a href=\"" . $this->wwwroot . "/page/portfolio\">Portfolio</a></li>
				<li><a href=\"" . $this->wwwroot . "/page/about\">About Me</a></li>
				<li><a href=\"" . $this->wwwroot . "/page/contact\">Contact Me</a></li>
			</ul>
		</nav>
		
<!-- End Header -->";
			
        }
		
		function Body(){
			
			echo "<!-- Begin Body -->
		<div class=\"main\">
			<div class=\"row\">
				<p>Test</p>
			</div>
		</div>
		<!-- End Body -->";
			
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
        
    }


?>