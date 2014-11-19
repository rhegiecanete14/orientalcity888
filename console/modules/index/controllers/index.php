<?php

	class Index extends CORE_Controller {
	
		function __construct() {
		
			parent::__construct();
		}
		
		public function index() {
			
			require_once 'elements/access/access_login.php';
		}
		
		// Procedures
		
		public function access_login() {
		
			require_once 'procedures/access/access_login.php';
		}
	}