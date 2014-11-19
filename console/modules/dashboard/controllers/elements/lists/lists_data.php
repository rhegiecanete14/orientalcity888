<?php

	$this->load->model('members/lists/lists_member');
	$this->load->model('users/lists/lists_user');
	
	$data = array(
		'lists_member' => $this->lists_member->execute(),
		'lists_user' => $this->lists_user->execute()
	);

$data['stylesheets']  = <<<STYLESHEET

		<link rel="stylesheet" type="text/css" href="/assets/scripts/css/dashboard.css" />
		<link rel="stylesheet" type="text/css" href="/assets/scripts/css/standard.css" />
STYLESHEET;

$data['footer_scripts'] = <<<JAVASCRIPT
	<script src="/assets/scripts/js/dashboard.js"></script>
JAVASCRIPT;
	
	$this->team_play_it->execute('dashboard/pages/lists/index', $data);