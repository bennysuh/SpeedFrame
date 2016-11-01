<?php
defined('BASEPATH') OR exit('No direct script assets allowed');
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$success = true;
		$file_content = '';
		extract(SpeedFrame::params(array('href') , 'GET'));
		$config = onlineConfig::get_config();
		$allow_file_type = array('css' , 'js' , 'txt' , 'woff' , 'woff2' , 'ttf');

		if(isset($_SESSION['access'][$href])) $href = $_SESSION['access'][$href];
		foreach (explode('?', $href) as $key => $value){
			$value = str_replace("{admin_template_name}", $config['admin_template_name'], $value);

			$assets_file_address = '/template/' . $value;
			$file_type = explode("." , $assets_file_address);
			$error_assets = array('error_assets' => $assets_file_address);

			if(in_array(end($file_type), $allow_file_type)){
				$filename = dirname(APPPATH) . $assets_file_address;
				if( ! is_file($filename)) SpeedFrame::end(false , '0000005' , $error_assets);
				$file_content .= file_get_contents($filename) . PHP_EOL;
			}else{
				$success = false;
				SpeedFrame::end(false , '0000004' , $error_assets);
			}


			$assets_list[] = $assets_file_address;
		}
		header("Content-type: text/" . end($file_type));
		echo $success ? $file_content : '';
		
	}
}
