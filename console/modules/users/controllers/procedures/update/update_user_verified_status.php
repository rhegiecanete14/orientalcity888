<?php

	$this->load->library('Kenichi_encdecryptor');
	
	$this->load->model('update/update_user');
	$this->load->model('show/show_user_id');

	$POST = $this->input->post();
	$HASH = $this->uri->segment(3);
	$VERIFIED_STATUS = $this->uri->segment(4);
	
	$is_verified = (0 != $VERIFIED_STATUS) ? 0 : 1;
	
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
			'is_verified' => "".$is_verified.""
		)
	);
	
	$where = array(
		'user_id' => $this->show_user_id->execute($HASH)
	);
	
	$this->update_user->execute($data, $where);
	
	redirect('users/lists_user');