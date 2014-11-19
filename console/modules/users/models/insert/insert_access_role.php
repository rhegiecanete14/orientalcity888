<?php

	class Insert_access_role extends CORE_Model {

		function __construct() {
		
			parent::__construct();
		}
		
		public function execute($data = array(), $single = 0) {
		
			$DB = $this->db;
			
			if(0 != $single) :
		
				$DB->insert($data['table'], $data['values']);
				return $DB->insert_id();
			endif;

			$DB->trans_begin();
			
			foreach($data AS $key => $value) :
				
				$DB->insert($key, $value);
			endforeach;

			// [+] Cache
			
			// $DB->cache_delete_all();
			// $DB->cache_delete('users', 'lists_users');
			// $DB->cache_delete('users', 'sse_lists_users');
			
			// [-]
			
			if(FALSE === $DB->trans_status()) :	
			
				$DB->trans_rollback();
			else :
				
				$DB->trans_commit();
			endif;
			
			$DB->close();
		}		
	}