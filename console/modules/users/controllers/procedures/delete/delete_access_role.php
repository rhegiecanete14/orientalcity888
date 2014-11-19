<?php

	$this->load->model('delete/delete_access_role');
	
	$ID = $this->uri->segment(3);
	
	$data = array(
		'user_access_role' => array(
			'is_deleted' => '1'
		)
	);
	
	$where = array(
		'id' => $ID
	);
	
	$this->delete_access_role->execute($data, $where);
	
	redirect('users/lists_access_role');