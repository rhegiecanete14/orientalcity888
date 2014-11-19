<?php
	
	// Loaded library (kenichi_encdecryptor)
	// Loaded helper (generate_unique_id)
	$this->load->library('Kenichi_encdecryptor');
	$this->load->helper('generate_unique_id');

	// Loaded model insert_query
	$this->load->model('insert/insert_user');

	// Generate unique ID for mapping
	$ID = generate_unique_id('users_');
	
	$POST = $this->input->post();
	
	$data = array(
		'user_account' => array(
			'user_id' => $ID,
			'email ' => $POST['email'],
			'username' => $POST['username'],
			'password' => md5($POST['password']),
			'kenichi_password' => $this->kenichi_encdecryptor->encrypt_hush($POST['password']),
			'user_access_role_id' => $POST['user_access_role_id']
		),
		'user_profile' => array(
			'user_id' => $ID,
			'first_name' => $POST['first_name'],
			'last_name' => $POST['last_name']
		)
	);
	
	$this->insert_user->execute($data);
	
	redirect('users/lists_user');