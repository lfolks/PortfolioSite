<?php
/*
 * Name: Who Am I Function
 * Desc: Function to get name of current file.
 */

	// Capture PHP filename TODO: Add to Site Info Class
	function lls_WhoAmI(){
		return substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);
	}