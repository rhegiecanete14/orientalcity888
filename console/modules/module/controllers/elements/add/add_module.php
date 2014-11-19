<?php

	$modules_query = system_reference(
								array(
									'column' => 'id, name', 
									'table' => 'user_module',
									'where' => "status = '1' AND is_deleted = '0'"
								)
							);
		
	$modules[0] = ' - ';
	
	foreach($modules_query->result() as $row_module) :
	
		$modules[$row_module->id] = $row_module->name;
	endforeach;
	

	$data = array(
		'name' => array(
			'name' => 'name',
			'id' => 'name',
			'class' => 'data-field'
		),
		'description' => array(
			'name' => 'description',
			'id' => 'description',
			'class' => 'data-field'
		),
		'url_segment' => array(
			'name' => 'url_segment',
			'id' => 'url_segment',
			'class' => 'data-field'
		),
		'parent_module_ids' => $modules
	);
	
	$this->load->view('modals/add/add_module', $data);