<?php

	$this->load->model('show/show_module');
	
	$ID = $this->uri->segment(3);
	$row = $this->show_module->execute($ID);
	$row = $row[0];

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
		'url_segment' => array(
			'name' => 'url_segment',
			'id' => 'url_segment',
			'class' => 'data-field',
			'value' => $row->url_segment
		),
		'parent_module_ids' => $modules,
		'parent_module_id' => $row->parent_module_id
	);
	
	$this->load->view('modals/edit/edit_module', $data);