<?php

	$data = array(
		'first_name' => array(
			'name' => 'first_name',
			'id' => 'first_name',
			'class' => 'data-field'
		),
		'last_name' => array(
			'name' => 'last_name',
			'id' => 'last_name',
			'class' => 'data-field'
		),
		'email' => array(
			'name' => 'email',
			'id' => 'email',
			'class' => 'data-field'
		),
		'username' => array(
			'name' => 'username',
			'id' => 'username',
			'class' => 'data-field'
		),
		'password' => array(
			'name' => 'password',
			'id' => 'password',
			'class' => 'data-field'
		),
		'password_confirm' => array(
			'name' => 'password_confirm',
			'id' => 'password_confirm'
		),
		'user_access_role_id' => 5
	);
	
	$this->load->view('modals/add/add_member', $data);