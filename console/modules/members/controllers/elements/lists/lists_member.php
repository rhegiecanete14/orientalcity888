<?php

	$this->load->model('lists/lists_member');
	
	$data = array(
		'lists_member' => $this->lists_member->execute()
	);

$data['stylesheets']  = <<<STYLESHEET

		<link rel="stylesheet" type="text/css" href="/assets/scripts/css/users.css" />
		<link rel="stylesheet" type="text/css" href="/assets/scripts/css/standard.css" />
STYLESHEET;

$data['footer_scripts'] = <<<JAVASCRIPT
	<script src="/assets/scripts/js/users.js"></script>
JAVASCRIPT;
	
	$this->team_play_it->execute('members/sections/lists/lists_member', $data);