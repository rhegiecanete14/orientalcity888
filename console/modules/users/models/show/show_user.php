<?php

	class Show_user extends CORE_Model {
	
		function __construct() {
		
			parent::__construct();
		}
		
		public function execute($HASH = '') {
		
			$DB = $this->db;
			
			return $DB
							->select('hash, user_access_role_id, first_name, last_name, email, username')
							->from('users_ a')
							->join('user_account b', 'a.id = b.user_id', 'LEFT')
							->join('user_profile c', 'a.id = c.user_id', 'LEFT')
							->where('a.hash', $HASH)
							->get()
							->result();
		}
	}