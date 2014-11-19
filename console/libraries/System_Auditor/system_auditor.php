<?php

	class system_auditor {
	
		public function execute() {
		
			$CI =& get_instance();
			
			$DB = $CI->db;
			
			// $user_agent = $this->browser_info();
			
			// $data = array(
				// 'php_self' => $_SERVER['PHP_SELF'],	
				// 'gateway_interface' => $_SERVER['GATEWAY_INTERFACE'],
				// 'server_addr' => $_SERVER['SERVER_ADDR'],
				// 'server_name' => $_SERVER['SERVER_NAME'],
				// 'server_software' => $_SERVER['SERVER_SOFTWARE'],
				// 'server_protocol' => $_SERVER['SERVER_PROTOCOL'],
				// 'request_method' => $_SERVER['REQUEST_METHOD'],
				// 'request_time' => $_SERVER['REQUEST_TIME'],
				// 'query_string' => $_SERVER['QUERY_STRING'],
				// 'http_accept' => $_SERVER['HTTP_ACCEPT'],
				// 'http_accept_encoding' => $_SERVER['HTTP_ACCEPT_ENCODING'],
				// 'http_accept_language' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
				// 'http_connection' => $_SERVER['HTTP_CONNECTION'],
				// 'http_host' => $_SERVER['HTTP_HOST'],
				// 'http_referer' => ( isset($_SERVER['HTTP_REFERER']) ? : ''),
				// 'http_user_agent' => ($user_agent['browser'] . ' v. ' . $user_agent['version']),
				// 'remote_addr' => $_SERVER['REMOTE_ADDR'],
				// 'remote_host' => gethostbyaddr($_SERVER['REMOTE_ADDR']),
				// 'script_filename' => $_SERVER['SCRIPT_FILENAME'],
				// 'server_port' => $_SERVER['SERVER_PORT'],
				// 'script_name' => $_SERVER['SCRIPT_NAME'],
				// 'request_uri' => $_SERVER['REQUEST_URI']
			// );
			
			// $DB->insert('audit_', $data);
		}
		
		public function browser_info($agent = null) {
			
			$known = array('msie', 'firefox', 'safari', 'webkit', 'opera', 'netscape', 'konqueror', 'gecko');

			$agent = strtolower($agent ? $agent : $_SERVER['HTTP_USER_AGENT']);
			$pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9]+(?:\.[0-9]+)?)#';

			if (!preg_match_all($pattern, $agent, $matches)) 
			
				return array();

			$i = count($matches['browser']) - 1;
			
			// return array($matches['browser'][$i] => $matches['version'][$i]);
			return array('browser' => $matches['browser'][$i], 'version' => $matches['version'][$i]);
		}
	}