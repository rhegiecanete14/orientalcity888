<?php

	$data = array(
		'name' => array(
			'name' => 'name',
			'class' => 'data-field',
			'id' => 'name',
		),
		'description' => array(
			'name' => 'description',
			'class' => 'data-field',
			'id' => 'description'
		),
		'statuses' => array(
			'0' => 'Inactive',
			'1' => 'Active'
		)
	);
	
	$this->load->view('modals/add/add_access_role', $data);