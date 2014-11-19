<?php

	class Dashboard extends CORE_Controller {
	
		function __construct() {
		
			parent::__construct();
		}
		
		public function index() {
		
			require_once 'elements/lists/lists_data.php';
		}
	}