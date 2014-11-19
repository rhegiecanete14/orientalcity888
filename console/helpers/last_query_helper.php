<?php

	function last_query($DB = '', $exit = FALSE) {
		// if('' != $DB) :

			echo $DB->last_query();
		// endif;
		
		if($exit) : exit; endif;
		
		return;
	}