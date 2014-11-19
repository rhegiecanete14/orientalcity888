<?php

	class Users extends CORE_Controller {
	
		function __construct() {
		
			parent::__construct();
		}
		
		public function index() {
			
			$this->lists_user();
		}
		
		// [+] Elements
		
		public function lists_user() {
		
			require_once 'elements/lists/lists_user.php';
		}
		
		public function add_user() {
		
			require_once 'elements/add/add_user.php';
		}
		
		public function edit_user() {
		
			require_once 'elements/edit/edit_user.php';
		}
		
		public function lists_access_role() {
		
			require_once 'elements/lists/lists_access_role.php';
		}
		
		public function add_access_role() {
			
			require_once 'elements/add/add_access_role.php';
		}
		
		public function edit_access_role() {
		
			require_once 'elements/edit/edit_access_role.php';
		}
		
		public function edit_access_role_module() {
		
			require_once 'elements/edit/edit_access_role_module.php';
		}
		
		// [-]
		
		//  [+] Procedures
		
		public function insert_user() {
		
			require_once 'procedures/insert/insert_user.php';
		}
		
		public function update_user() {
		
			require_once 'procedures/update/update_user.php';
		}
		
		public function delete_user() {

			require_once 'procedures/delete/delete_user.php';
		}
		
		public function insert_access_role() {
		
			require_once 'procedures/insert/insert_access_role.php';
		}
		
		public function update_access_role() {
		
			require_once 'procedures/update/update_access_role.php';
		}
		
		public function delete_access_role() {
		
			require_once 'procedures/delete/delete_access_role.php';
		}
		
		public function update_user_status() {
		
			require_once 'procedures/update/update_user_status.php';
		}
		
		public function update_user_locked_status() {
		
			require_once 'procedures/update/update_user_locked_status.php';
		}
		
		public function update_user_verified_status() {
		
			require_once 'procedures/update/update_user_verified_status.php';
		}
		
		public function update_user_disabled_status() {
		
			require_once 'procedures/update/update_user_disabled_status.php';
		}
		
		public function update_access_role_module() {
		
			require_once 'procedures/update/update_access_role_module.php';
		}
		
		// [-]
	}