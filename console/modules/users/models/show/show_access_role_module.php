<?php

	class Show_access_role_module extends CORE_Model {
	
		function __construct() {
		
			parent::__construct();
		}
		
		public function execute($ID = '') {
		
			$DB = $this->db;
			
			return $DB
							->select('user_module_ids')
							->from('user_access_role_access')
							->where('user_access_role_id', $ID)
							->get()
							->result();
		}
	}