<?php
/*
 * Name: Where Am I Function
 * Desc: Function to get directory of file.
 */

	// Capture PHP filename TODO: Add to Site Info Class
	function lls_WhereAmI(){
		return getcwd();
	}