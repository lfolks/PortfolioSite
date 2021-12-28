<?php
/*
 * Name: Configuration File
 * Desc: This file contains the site settings.
 * Author: Lloyd Folks
 */
	/*
	 * Application Settings
	 */

		// Set variables for use across the application
		$appname = "Expandable Content Management";
		$appver  = "0.0.1";
		
		// Check for local or remote mode based on custom htdocs location
		if($_SERVER['DOCUMENT_ROOT'] == "D:/XAMPP/htdocs" || $_SERVER['DOCUMENT_ROOT'] == "D:/XAMPP/htdocs/" || $_SERVER['DOCUMENT_ROOT'] == "D:/xampp/htdocs" || $_SERVER['DOCUMENT_ROOT'] == "D:/xampp/htdocs/"){
			$localmode = 1;
		}else{
			$localmode = 0;
		}

		// Site settings based on local or remote mode
		if($localmode === 1) {
			$root            = $_SERVER['DOCUMENT_ROOT'] . "\\Enter\\Your\\Path\\To\\public\\"; // Enter the local Public directory path
			$data            = $_SERVER['DOCUMENT_ROOT'] . "\\Enter\\Your\\Path\\To\\data\\"; // Enter the local System data directory - Needs to be in the same directory of the public folder
			$wwwroot         = "http://localhost/"; // Enter the local URL path
			$dbhost          = ""; // Enter your local database server hostname here - For DB hosted on localhost, use localhost
			$dbuser          = ""; // Enter your local database username
			$dbpass          = ""; // Enter your local database user password
			$dbname          = ""; // Enter the name of the database
			$charset         = "utf8mb4"; // Enter the character set to be used - This application uses utf8mb4
			//End Local MDI
		}else{
			$root            = "/Enter/Your/Path/To/public/"; // Enter the Public directory path
			$data            = "/Enter/Your/Path/To/data/"; // Enter the local System data directory - Needs to be in the same directory of the public folder
			$wwwroot         = "https://www.example.com"; //Leave off trailing slash
			$dbhost          = "localhost";
			$dbuser          = "";
			$dbpass          = "";
			$dbname          = "";
			$charset         = "utf8mb4";
		}

		// Import PHP functions
		foreach (glob($root . "bin/assets/php/func/func.*.php") as $filename){
			include_once($filename);
		}

		// Import PHP classes
		foreach (glob($root . "bin/assets/php/class/class.*.php") as $filename){
			include_once($filename);
		}
