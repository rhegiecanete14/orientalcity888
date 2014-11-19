<?php

	$this->load->model('lists/lists_access_role');
	
	$data = array(
		'lists_access_role' => $this->lists_access_role->execute()
	);
	
	$this->load->view('sections/lists/lists_access_role', $data);