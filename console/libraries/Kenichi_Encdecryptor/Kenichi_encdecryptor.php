<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

	class Kenichi_encdecryptor {
	
		function __construct() { }

		public function encrypt_hush($data = '') {

			$length = strlen(trim($data));
			
			$passcode = substr(md5(time()), 0, 14);
			
			$literal = (array) $this->literal();

			$corrupt  = array_reverse($literal);
			
			if(18 < $length) :
			
				$data = substr($data, 0, 18);
			endif;
			
			for($i = 0; $i < ((18 < $length) ? 18 : $length); $i++) :
				
				$passcode .= $corrupt[array_search($data[$i], $literal)];
			endfor;
			
			if(18 > $length) :
				
				$passcode .= '.'.substr(md5(mt_rand(14, 99)), 0, (31 - ($length + 14)));
			endif;
			
			return $passcode;
		}
		
		public function decrypt_hush($data = '') {
		
			$slice = explode('.', $data);
			
			$data = $slice[0];
			
			$literal = $this->literal();
			
			$filtered_data = substr($data, 14, strlen($data) - 1);
			
			$passcode = '';
			
			for($i = 0; $i < strlen($filtered_data); $i++) :
				
				$passcode .= $literal[array_search($filtered_data[$i], array_reverse($literal))];
			endfor;
			
			return $passcode;
		}
		
		private function literal() {
			
			return array(
				'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
				'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
				'1', '2', '3', '4', '5', '6', '7', '8', '9', '0'
			); 
		}
	}