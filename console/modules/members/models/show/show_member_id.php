<?php

	class Show_member_id extends CORE_Model {
		
		function __construct() {
		
			parent::__construct();
		}
		
		public function execute($HASH = '') {
		
			$DB = $this->db;
			
			$query =  $DB
							->select('id')
							->from('users_')
							->where('hash', $HASH)
							->get();
							
			if(0 < $query->num_rows()) :
							
				$result = $query->result_array();
				
				return $result[0]['id'];
			endif;
			
			return 0;
		}
	}