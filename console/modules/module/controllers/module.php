<?php

	class Module extends CORE_Controller {
	
		function __construct() {
		
			parent::__construct();
		}
		
		public function index() {
			
			$this->lists_module();
		}
		
		// [+] Elements
		
		public function lists_module() {
		
			require_once 'elements/lists/lists_module.php';
		}
		
		public function add_module() {
		
			require_once 'elements/add/add_module.php';
		}
		
		public function edit_module() {
		
			require_once 'elements/edit/edit_module.php';
		}
		
		// [-]
		
		//  [+] Procedures
		
		public function insert_module() {
		
			require_once 'procedures/insert/insert_module.php';
		}
		
		public function update_module() {
		
			require_once 'procedures/update/update_module.php';
		}
		
		public function delete_module() {

			require_once 'procedures/delete/delete_module.php';
		}
		
		// [-]
	}