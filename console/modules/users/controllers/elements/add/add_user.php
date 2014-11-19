<?php

	$access_roles_query = system_reference(
								array(
									'column' => 'id, name', 
									'table' => 'user_access_role',
									'where' => "status = '1' AND is_deleted = '0'"
								)
							);
		
	$access_roles = array();
	
	foreach($access_roles_query->result() as $row) :
	
		$access_roles[$row->id] = $row->name;
	endforeach;
	

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
		'access_roles' => $access_roles
	);
	
	$this->load->view('modals/add/add_user', $data);