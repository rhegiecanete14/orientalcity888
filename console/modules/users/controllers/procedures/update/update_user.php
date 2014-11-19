<?php

	$this->load->library('Kenichi_encdecryptor');
	
	$this->load->model('update/update_user');
	$this->load->model('show/show_user_id');

	$POST = $this->input->post();
	$HASH = $this->uri->segment(3);
	
	// [+] CORE update
	
	$data = array(
		'users_' => array(
			'status' => '1'
		)
	);
	
	$where = array(
		'hash' => $HASH
	);

	$this->update_user->execute($data, $where);
	
	unset($data);
	unset($where);
	
	// [-]

	$data = array(
		'user_account' => array(
			'email ' => $POST['email'],
			'username' => $POST['username'],
			'password' => md5($POST['password']),
			'kenichi_password' => $this->kenichi_encdecryptor->encrypt_hush($POST['password']),
			'user_access_role_id' => $POST['user_access_role_id']
		),
		'user_profile' => array(
			'first_name' => $POST['first_name'],
			'last_name' => $POST['last_name']
		)
	);
	
	$where = array(
		'user_id' => $this->show_user_id->execute($HASH)
	);
	
	$this->update_user->execute($data, $where);
	
	redirect('users/lists_user');