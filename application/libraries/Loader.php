<?php
/**
 * Loader 加载网站的视图
 * From : Tocurd
 * Create Time : 2016年10月29日 09:40:15
 * Update Time : 2016年10月29日 09:40:30
 */
class Loader{
	static public $CI;
	public function __construct(){
		self::$CI = & get_instance();
	}

	static public function view($view_path = array() , $push_data = array() , $view_type = 'home' , $print = true){
		$view = '';
		$config_list = array_merge(onlineConfig::get_Config() , $push_data);

		$view_type = $view_type == 'home' ? $config_list['home_template_name']  : $config_list['admin_template_name'];
		$view .= self::$CI->parser->parse($view_type . '/template/header' , $config_list , $print);

		foreach ($view_path as $path) {
			$view .= self::$CI->parser->parse($view_type . '/' . $path , array_merge($config_list , $push_data) , $print);
		}
		if($print) echo $view;
		return $view;
	}


	static public function access($access_list = array() , $type = 'css'){
		$access_file = implode('?', $access_list);

		return $type == 'css' ? 
		"<link rel='stylesheet' href='./assets?href={$access_file}'/>" :
		"<script type='text/javascript' src='./assets?href={$access_file}'></script>" ;
		
	}
}