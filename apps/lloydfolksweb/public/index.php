<?php
// Import and require the config file from the data folder
require_once("../data/config.php");

$HTML->Header();

?>

<!-- Begin Main -->
		<main>
			<h1>Hello and welcome to LloydFolks.com!</h1>
			<hr>
			<h2>Why so...<i>basic</i>?</h2>
			<p>I am still in the process of designing and coding the site as time permits as I am now working as a Cloud System Engineer for the company Alvaria, Inc. While this process is slower than I would prefer (I'm not using any frameworks and I'm doing this on my own...), it does award me the opportunity to take time to truly think about the design and how I want to structure my code.</p>
			<p>Here is what I am thinking about in a nutshell.</p>
			<ul>
				<li>
					Do I create a relational database to store page details such as content, graphics, and other page details that could be pulled and populated into the page?
					<ul>
						<li>
							<i>Short answer, <strong>yes!</strong> This is not the hardest thing to do, but it does take some planning. Plus, I want to think ahead instead of adding features as I go.</i>
						</li>
						<li>
							<i><strong>Update</strong>- I have been working on the backend of the content management system (CMS). Working on a file upload system and file management system. This is an essential part of my plan as I will be reusing this with my other active projects.</i>
						</li>
					</ul>	
				</li>			
			</ul>
			<p>Please feel free to check back anytime and see what changes!</p>
		</main>
<!-- End Main -->
<?php

$HTML->Footer();

?>