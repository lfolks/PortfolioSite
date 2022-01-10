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
			<p>I am still in the process of designing and coding the site as time permits between my current job and my pursuit in finding a new job. While this process is slower than I would prefer, it does award me the opportunity to take time to truly think about the design and how I want to structure my code.</p>
			<p>Here is what I am thinking about in a nutshell.</p>
			<ul>
				<li>
					Do I create a relational database to store page details such as content, graphics, and other page details that could be pulled and populated into the page?
					<ul>
						<li>
							<i>Short answer, <strong>yes!</strong> This is not the hardest thing to do, but it does take some planning. Plus, I want to think ahead instead of adding features as I go.</i>
						</li>
					</ul>	
				</li>
				<li>
					What classes/functions do I need?
					<ul>
						<li>
							<i>This is what I'm working on presently. I'm working on my HTML class, which contains my</i> <strong><code>HEADER</code></strong> <i>and</i> <strong><code>FOOTER</code></strong> <i>code. This will also contain my </i><strong><code>BODY</code></strong> <i>code. I'm still thinking about this and how best to approach this functionality. Just how many variables do I need to include in my constructor function...for that matter is this the best approach? Really I'm trying to create my own Model, View, and Controller without using an existing framework.</i>
						</li>
					</ul>
				</li>
			
			</ul>
			<p>Please feel free to check back anytime and see what changes!</p>
			<h2>Current Plans</h2>
			<ol>
				<li>
					Get the landing page coded and uploaded to the web server!
					<ol>
						<li>IN PROGRESS</li>
					</ol>
				</li>
				<li>
					Create the contact page so that people can reach out to me easily!
				</li>
				<li>
					Create the resume page so that my skills and experience can be shared with the world!
				</li>
				<li>
					Create the about me page so that I can share more details about...well...me!
				</li>
				<li>
					Create the portfolio page so that I link my various projects to be reviewed by anyone interested!
				</li>
				<li>
					Outline plans for recreating this site using various frameworks and technology such as AngularJS, Vue.js, Laravel, and others!
				</li>
			</ol>
		</main>
<!-- End Main -->
<?php

$HTML->Footer();

?>