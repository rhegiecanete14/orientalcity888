<?php

	$this->load->model('show/show_member');
	
	$HASH = $this->uri->segment(3);
	$row = $this->show_member->execute($HASH);
	$row = $row[0];

	$data = array(
		'HASH' => $HASH,
		'first_name' => array(
			'name' => 'first_name',
			'id' => 'first_name',
			'class' => 'data-field',
			'value' => $row->first_name
		),
		'last_name' => array(
			'name' => 'last_name',
			'id' => 'last_name',
			'class' => 'data-field',
			'value' => $row->last_name
		),
		'email' => array(
			'name' => 'email',
			'id' => 'email',
			'class' => 'data-field',
			'value' => $row->email
		),
		'username' => array(
			'name' => 'username',
			'id' => 'username',
			'class' => 'data-field',
			'value' => $row->username
		),
		'password' => array(
			'name' => 'password',
			'id' => 'password',
			'class' => 'data-field'
		),
		'password_confirm' => array(
			'name' => 'password_confirm',
			'id' => 'password_confirm'
		)
	);
	
	$this->load->view('modals/edit/edit_member', $data);