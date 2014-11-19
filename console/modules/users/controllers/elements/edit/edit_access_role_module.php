<?php

	$this->load->model('module/lists/lists_module_heirarchy');
	// $this->load->model('show/show_access_role');
	$this->load->model('show/show_access_role_module');
	
	$ID = $this->uri->segment(3);
	$access_role_modules = $this->show_access_role_module->execute($ID);
	$access_role_modules = $access_role_modules[0];
	
	$data = array(
		'ID' => $ID,
		'lists_module_heirarchy' => $this->lists_module_heirarchy->execute(),
		'access_role_modules' => $access_role_modules->user_module_ids
	);
	
	$this->load->view('modals/edit/edit_access_role_module', $data);