<?php
/*
 * Name: Contact Form
 * Desc: Class for contact form logic.
 */
    // PAGE Class - Used to populate the details of the page
    class CONTACT {
		
		// Sainitize User Input Function
		function lls_sstring($value){
			$value = strip_tags($value);
			$value = trim($value);
			$value = ltrim($value);
			$value = htmlspecialchars($value, ENT_QUOTES);

        	return $value;
		}
        
    }


?>