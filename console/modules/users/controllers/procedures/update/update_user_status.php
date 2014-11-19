<?php

	$this->load->library('Kenichi_encdecryptor');
	
	$this->load->model('update/update_user');
	$this->load->model('show/show_user_id');

	$POST = $this->input->post();
	$HASH = $this->uri->segment(3);
	$STATUS = $this->uri->segment(4);
	
	$status = (0 != $STATUS) ? 0 : 1;
	
	// [+] CORE update
	
	$data = array(
		'users_' => array(
			'status' => "".$status.""
		)
	);
	
	$where = array(
		'hash' => $HASH
	);

	$this->update_user->execute($data, $where);
	
	redirect('users/lists_user');