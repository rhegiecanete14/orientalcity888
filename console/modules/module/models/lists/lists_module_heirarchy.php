<?php

	class Lists_module_heirarchy extends CORE_Model {

		function __construct() {
		
			parent::__construct();
		}
		
		public function execute() {
			
			$DB = $this->db;
			
			return $DB
						->query("SELECT DISTINCT parent_module_id, GROUP_CONCAT(DISTINCT id, '-', name ORDER BY id SEPARATOR ', ') AS child_id FROM user_module GROUP BY parent_module_id ORDER BY ID");
		}
	}