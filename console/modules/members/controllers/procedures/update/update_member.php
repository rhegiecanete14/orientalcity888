<?php

	$this->load->library('Kenichi_encdecryptor');
	
	$this->load->model('update/update_member');
	$this->load->model('show/show_member_id');

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

	$this->update_member->execute($data, $where);
	
	unset($data);
	unset($where);
	
	// [-]

	$data = array(
		'user_account' => array(
			'email ' => $POST['email'],
			'username' => $POST['username'],
			'password' => md5($POST['password']),
			'kenichi_password' => $this->kenichi_encdecryptor->encrypt_hush($POST['password'])
		),
		'user_profile' => array(
			'first_name' => $POST['first_name'],
			'last_name' => $POST['last_name']
		)
	);
	
	$where = array(
		'user_id' => $this->show_member_id->execute($HASH)
	);
	
	$this->update_member->execute($data, $where);
	
	redirect('members/lists_member');