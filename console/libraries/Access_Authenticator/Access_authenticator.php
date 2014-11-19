<?php

	class Access_authenticator {
	
		private $CI, $DB;
		
		function __construct() {
		
			$this->CI =& get_instance();
			
			$this->DB = $this->CI->db;
		}
	
		public function verify($data = array()) {
			
			$query = $this->DB
											->select('id')
											->from('user_account')
											->where(
												array(
													'username' => $data['username'],
													'password' => md5($data['password'])
												)
											)
											->get();
			
			if(0 < $query->num_rows()) :
			
				$result = $query->result();
				
				$this->authenticate($result[0]->id);
				
				return 1;
			else :
			
				return 0;
			endif;
		}
		
		public function authenticate($ID = 0) {
		
			$query = $this->DB
											->select('hash, username, first_name, last_name')
											->from('users_ a')
											->join('user_account b', 'a.id = b.user_id', 'LEFT')
											->join('user_profile c', 'a.id = c.user_id', 'LEFT')
											->where(
												array(
													'a.id' => "". $ID .""
												)
											)
											->limit(1)
											->order_by('a.id', 'DESC')
											->get();
			
			$this->access($query);
		}
		
		public function access($query = null) {

			$result = $query->result();
			
			$data = array(
				'hash_token' => array(
					'access_hash' => md5(time()),
					'hash' => $result[0]->hash,
					'username' => $result[0]->username,
					'first_name' => $result[0]->first_name,
					'last_name' => $result[0]->last_name
				)
			);
			
			$this->CI->session->set_userdata($data);
		}
	}