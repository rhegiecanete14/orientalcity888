<?php

	$this->load->model('show/show_user');
	
	$HASH = $this->uri->segment(3);
	$row = $this->show_user->execute($HASH);
	$row = $row[0];

	$access_roles_query = system_reference(
								array(
									'column' => 'id, name', 
									'table' => 'user_access_role',
									'where' => "status = '1' AND is_deleted = '0'"
								)
							);
		
	$access_roles = array();
	
	foreach($access_roles_query->result() as $row_) :
	
		$access_roles[$row_->id] = $row_->name;
	endforeach;
	

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
		),
		'access_roles' => $access_roles,
		'user_access_role_id' => $row->user_access_role_id
	);
	
	$this->load->view('modals/edit/edit_user', $data);