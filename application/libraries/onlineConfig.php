<?php
class onlineConfig{
	static public function get_config(){
		$CI = & get_instance();
		return $CI->config->item('onlineConfig'); 
	}	
}