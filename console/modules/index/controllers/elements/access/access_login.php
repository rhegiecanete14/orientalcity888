THIS WILL BE THE FRONT END
<?php
/**
	$data = array(
		'username' => array(
			'name' => 'username',
			'id' => 'username',
			'class' => 'data-field _field-w-large',
			'placeholder' => 'username or email address'
		),
		'password' => array(
			'name' => 'password',
			'id' => 'password',
			'class' => 'data-field _field-w-medium'
		)
	);	

$data['stylesheets']  = <<<STYLESHEET

		<link rel="stylesheet" type="text/css" href="/assets/scripts/css/login.css" />
		<link rel="stylesheet" type="text/css" href="/assets/scripts/css/standard.css" />
STYLESHEET;

$data['footer_scripts'] = <<<JAVASCRIPT
	<script src="/assets/scripts/js/login.js"></script>
JAVASCRIPT;
	
	$this->team_play_it->execute('index/sections/access/access_login', $data);
	*/
	?>