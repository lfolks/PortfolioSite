<?php

	if(isset($appname)){
		echo "<!-- Begin Footer -->
		<footer>
			<p>&copy; " . date("Y") . " &bull; Lloyd Folks.</p>
			<small>Coded simply using <strong><i>HTML/CSS and PHP</i></strong>.</small>
		</footer>
	</body>
</html>
<!-- End Footer -->";
	}else{
		echo "
<h1>Welcome to my Footer File!</h1>
<p>You found your way to my footer file. Nothing much to see here without the rest of the site. Head on over to <a href=\"https://www.lloydfolks.com\">lloydfolks.com</a> now and view the site the right way. :)</p>
";
	}
?>