<?php
	
	$this->load->model('update/update_access_role');

	$POST = $this->input->post();
	$ID = $this->uri->segment(3);

	$data = array(
		'user_access_role' => array(
			'name ' => $POST['name'],
			'description' => $POST['description'],
			'front_end_access' => (!isset($POST['front_end_access']) ? '0' : '1'),
			'back_end_access' => (!isset($POST['back_end_access']) ? '0' : '1'),
			'status' => $POST['status']
		)
	);
	
	$where = array(
		'id' => $ID
	);
	
	$this->update_access_role->execute($data, $where);
	
	redirect('users/lists_access_role');