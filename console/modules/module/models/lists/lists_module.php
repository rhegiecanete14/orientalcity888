<?php

	class Lists_module extends CORE_Model {
	
		function __construct() {
		
			parent::__construct();
		}
		
		public function execute() {
		
			$DB = $this->db;
			
			return $DB
						->select('id, name, url_segment, parent_module_id, status')
						->from('user_module')
						->where(
							array(
								'status' => '1',
								'is_deleted' => '0'
							)
						)
						->order_by('id', 'DESC')
						->get();
		}
	}