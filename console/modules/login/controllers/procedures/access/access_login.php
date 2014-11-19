<?php

	$this->load->model('access/access_login');
	
	$POST = $this->input->post();
	
	$this->access_login->execute($POST);