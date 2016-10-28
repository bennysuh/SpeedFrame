<?php
class Globals{
	
	
	static public function params($params = array() , $method = 'POST'){
		$params_list = strtoupper($method) === 'POST' ? $this->input->post(NULL , TRUE) : $this->input->get(NULL , TRUE);
		
	}
}