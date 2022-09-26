<?php
// Start time for page load test
$stime = microtime(true);
/*
 * Check if the config file is in the root data folder.
 * Current: Post error using exit to stop the program.
 * Future: Redirect to setup process.
 */
if(file_exists("../data/config.php")){
	require("../data/config.php");
}else{
	exit("Without the configuration file located in the data folder, the site will not function. This error will be replaced with a setup process at a future date.");
}

$HTML->Header();

?>

<main>
	<div class="container">
		<div class="row">
			<h1 class="mt-5">Welcome to LloydFolks.com</h1>
			<p class="lead">Taking another direction and exploring options.</p>
		</div>
		<hr>
		<div class="row">
			<h4>Why the change?</h4>
			<p>The plan for this site was for it to be a standard portfolio site for my job hunt adventure. I wanted to create a space to better showcase some of the projects and introduce myself to potential employers.</p>
			<p>The <strong><i>goal</i></strong> was simple, provide a site that could serve as an extension to my GitHub and Bitbucket repositories to explain and show the how and why of the code.</p>
			<p>Now I work as a Cloud System Engineer where instead of the web application projects, I am changing direction to a more system automation skillset. Of course, I will still be working on some web application projects that I have planned out so be sure to check out the Projects page.</p>
		</div>
	</div>
</main>

<?php

$HTML->Footer();
// End time and calculate page load time
echo "<center>This page was generated in " . (number_format(microtime(true) - $stime, 5)) . " seconds.</center><br>";
?>
