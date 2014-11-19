<?php

	class Lists_member extends CORE_Model {
	
		function __construct() {
		
			parent::__construct();
		}
		
		public function execute() {
		
			$DB = $this->db;
			
			return $DB
						->select('hash, first_name, last_name, email, username, name AS access_role_name, a.status AS status, is_locked, is_verified, is_disabled')
						->from('users_ a')
						->join('user_account b', 'a.id = b.id', 'LEFT')
						->join('user_profile c', 'a.id = c.id', 'LEFT')
						->join('user_access_role d', 'b.user_access_role_id = d.id', 'LEFT')
						->where(
							array(
								'b.user_access_role_id' => '5',
								'a.is_deleted' => '0'
							)
						)
						->order_by('a.id', 'DESC')
						->get();
		}
	}