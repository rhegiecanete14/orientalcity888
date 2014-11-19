<?php

	$this->load->model('module/lists/lists_module_heirarchy');
	$this->load->model('show/show_user_module');
	$this->load->model('show/show_user');
	$this->load->model('show/show_user_id');
	
	$HASH = $this->uri->segment(3);
	$row = $this->show_user->execute($HASH);
	
	$access_role_modules = $this->show_user_module->execute($ID);
	$access_role_modules = $access_role_modules[0];
	
	$data = array(
		'ID' => $ID,
		'lists_module_heirarchy' => $this->lists_module_heirarchy->execute(),
		'access_role_modules' => $access_role_modules->user_module_ids
	);
	
	$this->load->view('modals/edit/edit_user_module', $data);