<?php

	class Show_module_id extends CORE_Model {
		
		function __construct() {
		
			parent::__construct();
		}
		
		public function execute($ID = '0') {
		
			$DB = $this->db;
			
			$query =  $DB
							->select('id')
							->from('user_module')
							->where('id', $ID)
							->get();
							
			if(0 < $query->num_rows()) :
							
				$result = $query->result_array();
				
				return $result[0]['id'];
			endif;
			
			return 0;
		}
	}