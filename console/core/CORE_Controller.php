<?php

	class CORE_Controller extends CI_Controller {
		
		function __construct() {
			
			parent::__construct();
			
			$hash_token = $this->session->userdata('hash_token');

			define('USER_HASH', $hash_token['hash']);
			
			$this->set_template('casino');
		}
		
		public function set_template($template = 'default') {
		
			define('TEMPLATE', $template);
		}
	}