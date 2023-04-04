<?php
/*
 * Name: HTML Sections
 * Desc: Class for HTML sections of the site.
 */
    // HTML Class - Used to populate the HTML sections of the site
    class HTML {
		
		public $wwwroot;
		
		function __construct($wwwroot){
			$this->wwwroot = $wwwroot;
		}
        
        function Header(){
			
			echo "<!-- Begin Header and Navbar -->
<!doctype html>
<html lang=\"en\">
	<head>
		<meta charset=\"utf-8\">
		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
		<meta name=\"description\" content=\"A breif introduction to who I am.\">
		<meta name=\"author\" content=\"Lloyd Folks\">
		<title>Welcome to LloydFolks.com</title>
		<link href=\"" . $this->wwwroot . "/bin/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
		<link href=\"" . $this->wwwroot . "/bin/assets/css/site.css\" rel=\"stylesheet\">
		<link href=\"" . $this->wwwroot . "/bin/assets/fnt/bsiconv191/bootstrap-icons.css\" rel=\"stylesheet\">
		<link href=\"" . $this->wwwroot . "/bin/assets/fnt/fntawe620/fontawesome.min.css\" rel=\"stylesheet\">
		<link href=\"" . $this->wwwroot . "/bin/assets/fnt/fntawe620/brands.min.css\" rel=\"stylesheet\">
		<link href=\"" . $this->wwwroot . "/bin/assets/fnt/fntawe620/regular.min.css\" rel=\"stylesheet\">
		<link href=\"" . $this->wwwroot . "/bin/assets/fnt/fntawe620/solid.min.css\" rel=\"stylesheet\">
	</head>
	<body>
	<div class=\"pagecontent\">
	<header>
		<nav class=\"navbar navbar-expand-lg navbar-dark fixed-top bg-dark\" aria-label=\"Main Navigation\">
			<div class=\"container\">
				<a class=\"navbar-brand\" href=\"" . $this->wwwroot . "\">Journey into Code</a>
				<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#mainnav\" aria-controls=\"mainnav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
					<span class=\"navbar-toggler-icon\"></span>
				</button>

				<div class=\"collapse navbar-collapse\" id=\"mainnav\">
					<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
						<li class=\"nav-item\">
							<a class=\"nav-link\" aria-current=\"page\" href=\"" . $this->wwwroot . "\">Home</a>
						</li>
						<li class=\"nav-item\">
							<a class=\"nav-link\" href=\"" . $this->wwwroot . "/page/Projects\">Projects</a>
						</li>
						<li class=\"nav-item\">
							<a class=\"nav-link\" href=\"" . $this->wwwroot . "/page/About\">About</a>
						</li>
						<li class=\"nav-item\">
							<a class=\"nav-link\" href=\"" . $this->wwwroot . "/page/Contact\">Contact</a>
						</li>
					</ul>
					<!--
					TODO: Search Feature
					<form class=\"d-flex\" role=\"search\">
						<input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
					</form>
					-->
				</div>
			</div>
		</nav>
	</header>
<!-- End Header -->";
		}
        
        function Footer(){
			
			echo "</div>
	<!-- Begin Footer -->
	<footer class=\"py-3 bg-light\">
		<div class=\"container pb-4\">
			<a href=\"https://www.linkedin.com/in/lloyd-folks\" rel=\"external nofollow\"><button type=\"button\" class=\"btn btn-primary btn-linkedin\"><i class='fa-brands fa-linkedin'></i></button></a>
			<a href=\"https://github.com/lfolks\" rel=\"external nofollow\"><button type=\"button\" class=\"btn btn-primary btn-github\"><i class='fa-brands fa-github'></i></button></a>
			<a href=\"\" rel=\"external nofollow\"><button type=\"button\" class=\"btn btn-primary btn-bitbucket\"><i class=\"fa-brands fa-bitbucket\"></i></button></a>
		</div>
		<div class=\"container\">
			<p class=\"text-muted\">&copy; " . date("Y") . " &bull; Lloyd Folks.</p>
		</div>
	</footer>

	<script src=\"" . $this->wwwroot . "/bin/assets/js/bootstrap.bundle.min.js\"></script>

	</body>
</html>
<!-- End Footer -->";
			
        }
		
		function Body(){
			
			echo "";
			
		}
        
    }
