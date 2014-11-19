<?php

	class Show_module extends CORE_Model {
	
		function __construct() {
		
			parent::__construct();
		}
		
		public function execute($ID = '') {
		
			$DB = $this->db;
			
			return $DB
							->select('id, name, description, url_segment, parent_module_id')
							->from('user_module')
							->where('id', $ID)
							->get()
							->result();
		}
	}