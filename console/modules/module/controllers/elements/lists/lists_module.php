<?php

	$this->load->model('lists/lists_module');
	
	$data = array(
		'lists_module' => $this->lists_module->execute()
	);

$data['stylesheets']  = <<<STYLESHEET

		<link rel="stylesheet" type="text/css" href="/assets/scripts/css/modules.css" />
		<link rel="stylesheet" type="text/css" href="/assets/scripts/css/standard.css" />
STYLESHEET;

$data['footer_scripts'] = <<<JAVASCRIPT
	<script src="/assets/scripts/js/modules.js"></script>
JAVASCRIPT;
	
	$this->team_play_it->execute('module/sections/lists/lists_module', $data);