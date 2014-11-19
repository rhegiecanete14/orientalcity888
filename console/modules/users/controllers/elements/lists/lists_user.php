<?php

	$this->load->model('lists/lists_user');
	
	$data = array(
		'lists_user' => $this->lists_user->execute()
	);

$data['stylesheets']  = <<<STYLESHEET

		<link rel="stylesheet" type="text/css" href="/assets/scripts/css/users.css" />
		<link rel="stylesheet" type="text/css" href="/assets/scripts/css/standard.css" />
STYLESHEET;

$data['footer_scripts'] = <<<JAVASCRIPT
	<script src="/assets/scripts/js/users.js"></script>
JAVASCRIPT;
	
	$this->team_play_it->execute('users/sections/lists/lists_user', $data);