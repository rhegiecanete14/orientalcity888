<?php

	function print_r_debug($data = array(), $exit = FALSE) {

		if(is_array($data)) :
			
			echo '<pre>', print_r($data), '</pre>';
		endif;
		
		if($exit) : exit; endif;
		
		return;
	}