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
		
		// Server Settings
		$root            = "/path/to/public_html/";
		$data            = "/path/to/data/";
		$wwwroot         = "https://www.lloydfolks.com"; //Leave off trailing slash
		// Database Settings
		$dbhost          = "localhost";
		$dbuser          = "";
		$dbpass          = "";
		$dbname          = "";
		$charset         = "utf8mb4";
		// Google Settings
		// Captcha Secret Key
		$secretKey = "";
		
		// Import CORE PHP Functions
		foreach (glob($data . "res/core/php/func/func.*.php") as $filename){
			include_once($filename);
		}

		// Import CORE PHP Classes
		foreach (glob($data . "res/core/php/class/class.*.php") as $filename){
			include_once($filename);
		}
		
		// Initialize Classes
		$HTML = new HTML($wwwroot);