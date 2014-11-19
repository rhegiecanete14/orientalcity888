<?php

	// Loaded model insert_query
	$this->load->model('insert/insert_module');
	
	$POST = $this->input->post();
	
	$data = array(
		'user_module' => array(
			'name ' => $POST['name'],
			'description' => $POST['description'],
			'url_segment' => $POST['url_segment'],
			'parent_module_id' => $POST['parent_module_id']
		)
	);
	
	$this->insert_module->execute($data);
	
	redirect('module/lists_module');