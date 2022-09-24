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

?>

<main class="flex-shrink-0">
	<div class="container">
		<div class="row">
			<h1 class="mt-5">Contact</h1>
			<p class="lead">Reach out to me with your questions or comments!</p>
		</div>
		<hr>
		<div class="row">
			<h4>Well, it is still a work in progress...</h4>
			<p>In the meantime, please feel free to email me at <a href="mailto:lloydfolks@lloydfolks.com">lloydfolks@lloydfolks.com</a>.</p>
		</div>
	</div>
</main>

<?php

$HTML->Footer();
// End time and calculate page load time
echo "<center>This page was generated in " . (number_format(microtime(true) - $stime, 5)) . " seconds.</center><br>";
?>
