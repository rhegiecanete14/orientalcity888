<?php

	function prearray($data = array(), $exit = 0) {
	
		if(!is_array($data)) return false;
		else {		
		
			echo '<pre>', print_r($data), '</pre>';
			
			if(1 == (int) $exit) exit;
		}
	}