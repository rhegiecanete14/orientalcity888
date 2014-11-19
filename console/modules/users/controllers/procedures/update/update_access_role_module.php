<?php

	$this->load->model('update/update_access_role_module');
	
	$ID = $this->uri->segment(3);
	$POST = $this->input->post();
	
	$data = array(
		'user_access_role_access' => array(
			'user_module_ids' => $POST['user_module_ids']
		)
	);
	
	$where = array(
		'user_access_role_id' => "".$ID.""
	);
	
	$this->update_access_role_module->execute($data, $where);
	
	redirect('users/lists_access_role');