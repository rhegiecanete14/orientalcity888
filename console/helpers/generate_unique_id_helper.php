<?php

	function generate_unique_id($table = '') {
	
		$CI =& get_instance();
		
		$DB = $CI->db;
		
		$DB->insert($table, array('hash' => md5(mt_rand(1000000000, 9999999999) . time())));
		
		$id = $DB->insert_id();
		
		$DB->close();
		
		return $id;
	}