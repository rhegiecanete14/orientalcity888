<?php

	class Delete_user extends CORE_Model {
		
		function __construct() {
		
			parent::__construct();
		}
		
		public function execute($data = array(), $where = array()) {
		
			$DB = $this->db;

			$DB->trans_begin();

			foreach($data AS $key => $value) :

				$DB->where($where);
				$DB->update($key, $value);
			endforeach;
			
			if(FALSE === $DB->trans_status()) :
			
				$DB->trans_rollback();
			else :
			
				$DB->trans_commit();
			endif;
		}
	}