<?php

	$this->load->model('delete/delete_member');
	
	$HASH = $this->uri->segment(3);
	
	$data = array(
		'users_' => array(
			'is_deleted' => '1'
		)
	);
	
	$where = array(
		'hash' => $HASH
	);
	
	$this->delete_member->execute($data, $where);
	
	redirect('members/lists_member');