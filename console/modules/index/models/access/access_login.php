<?php

	class Access_login extends CORE_Model {
	
		private $access_authenticator;
		
		function __construct() {
		
			parent::__construct();
			
			$this->load->library('access_authenticator');
			
			$this->access_authenticator = new Access_authenticator();
		}
		
		public function execute($data = array()) {
		
			// echo $this->access_authenticator->verify($data); exit;
			if(0 !== (int) $this->access_authenticator->verify($data)) :
			
				echo 'success here';
				redirect('dashboard');
			else :
			
				redirect('index');
			endif;
		}
	}