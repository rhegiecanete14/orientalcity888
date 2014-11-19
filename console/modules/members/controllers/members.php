<?php

	class Members extends CORE_Controller {
	
		function __construct() {
		
			parent::__construct();
		}
		
		public function index() {
			
			$this->lists_member();
		}
		
		// [+] Elements
		
		public function lists_member() {
		
			require_once 'elements/lists/lists_member.php';
		}
		
		public function add_member() {
		
			require_once 'elements/add/add_member.php';
		}
		
		public function edit_member() {
		
			require_once 'elements/edit/edit_member.php';
		}
		
		// [-]
		
		//  [+] Procedures
		
		public function insert_member() {
		
			require_once 'procedures/insert/insert_member.php';
		}
		
		public function update_member() {
		
			require_once 'procedures/update/update_member.php';
		}
		
		public function delete_member() {

			require_once 'procedures/delete/delete_member.php';
		}
		
		public function update_member_status() {
		
			require_once 'procedures/update/update_member_status.php';
		}
		
		public function update_member_locked_status() {
		
			require_once 'procedures/update/update_member_locked_status.php';
		}
		
		public function update_member_verified_status() {
		
			require_once 'procedures/update/update_member_verified_status.php';
		}
		
		public function update_member_disabled_status() {
		
			require_once 'procedures/update/update_member_disabled_status.php';
		}
		
		// [-]
	}