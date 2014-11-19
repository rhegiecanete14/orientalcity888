<?php

	$this->load->model('show/show_access_role');
	
	$ID = $this->uri->segment(3);
	$row = $this->show_access_role->execute($ID);
	$row = $row[0];
	
	$data = array(
		'ID' => $ID,
		'name' => array(
			'name' => 'name',
			'id' => 'name',
			'class' => 'data-field',
			'value' => $row->name
		),
		'description' => array(
			'name' => 'description',
			'id' => 'description',
			'class' => 'data-field',
			'value' => $row->description
		),
		'front_end_access' => $row->front_end_access,
		'back_end_access' => $row->back_end_access,
		'statuses' => array(
			'0' => 'Inactive',
			'1' => 'Active'
		),	
		'status' => $row->status
	);
	
	$this->load->view('modals/edit/edit_access_role', $data);