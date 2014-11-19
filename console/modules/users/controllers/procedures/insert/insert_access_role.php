<?php

	// Loaded model insert_query
	$this->load->model('insert/insert_access_role');
	
	$POST = $this->input->post();
	
	$data = array(
		'table' => 'user_access_role',
		'values' => array(
			'name ' => $POST['name'],
			'description' => $POST['description'],
			'front_end_access' => (!isset($POST['front_end_access']) ? '0' : '1'),
			'back_end_access' => (!isset($POST['back_end_access']) ? '0' : '1'),
			'status' => $POST['status']
		)
	);
	
	$ID = $this->insert_access_role->execute($data, 1);
	
	unset($data);
	
	$data = array(
		'user_access_role_access' => array(
			'user_access_role_id' => "".$ID."",
			'user_module_ids' => '1'
		)
	);
	
	$this->insert_access_role->execute($data);
	
	redirect('users/lists_access_role');