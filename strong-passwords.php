<?php

// Generates a strong password of 8 characters containing at least one lower case letter, 
// one uppercase letter, one digit, and one special character. 

function generatePassword() {
    $chars = [["!@#$%&"],["0123456789"],["abcdefghijklmnopqrstuwxyz"],["ABCDEFGHIJKLMNOPQRSTUWXYZ"]];
   
    $password = "";
    foreach($chars as $char) {
	    $charRange = substr(str_shuffle($char[0]), 0, 1);
	    // check if the array contains only uppercase or lowercase letters
	    if ((ctype_upper($char[0])) || (ctype_lower($char[0]))) {
		    $charRange = substr(str_shuffle($char[0]), 0, 3);
	    }
	    
	    // check if characters are already exist in string
	    if (strpos($password, $charRange) === false) { 
		    $password.= $charRange;
	    }
    }
  	return $password;
}

echo generatePassword();

?>
