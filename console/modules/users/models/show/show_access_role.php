<?php

	class Show_access_role extends CORE_Model {
	
		function __construct() {
		
			parent::__construct();
		}
		
		public function execute($ID = '') {
		
			$DB = $this->db;
			
			return $DB
							->select('id, name, description, front_end_access, back_end_access, status')
							->from('user_access_role')
							->where('id', $ID)
							->get()
							->result();
		}
	}