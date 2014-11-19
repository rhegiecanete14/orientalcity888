<?php

	$this->load->model('delete/delete_module');
	
	$ID = $this->uri->segment(3);
	
	$data = array(
		'user_module' => array(
			'is_deleted' => '1'
		)
	);
	
	$where = array(
		'id' => $ID
	);
	
	$this->delete_module->execute($data, $where);
	
	redirect('module/lists_module');