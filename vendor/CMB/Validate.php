<?php

/**
 * Validate value of meta fields
 * Define ALL validation methods inside this class and use the names of these
 * methods in the definition of meta boxes (key 'validate_func' of each field)
 */
class CMB_Validate {
	function check_text( $text ) {
		if ($text != 'hello') {
			return false;
		}
		return true;
	}
}
