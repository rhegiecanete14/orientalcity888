<?php

	$this->load->model('delete/delete_user');
	
	$HASH = $this->uri->segment(3);
	
	$data = array(
		'users_' => array(
			'is_deleted' => '1'
		)
	);
	
	$where = array(
		'hash' => $HASH
	);
	
	$this->delete_user->execute($data, $where);
	
	redirect('users/lists_user');