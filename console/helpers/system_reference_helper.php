<?php

	function system_reference($data = array()) {

		$CI =& get_instance();
		
		$DB  = $CI->db;
		
		$query = $DB
					->select($data['column'])
					->from($data['table'])
					->where($data['where'])
					->get();

		return $query;
	}