<?php
	
	$this->load->model('update/update_module');
	$this->load->model('show/show_module_id');

	$POST = $this->input->post();
	$ID = $this->uri->segment(3);

	$data = array(
		'user_module' => array(
			'name ' => $POST['name'],
			'description' => $POST['description'],
			'url_segment' => $POST['url_segment'],
			'parent_module_id' => $POST['parent_module_id']
		)
	);
	
	$where = array(
		'id' => $ID
	);
	
	$this->update_module->execute($data, $where);
	
	redirect('module/lists_module');