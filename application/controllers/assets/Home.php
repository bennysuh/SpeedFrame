<?php
defined('BASEPATH') OR exit('No direct script assets allowed');
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		extract(SpeedFrame::params(array('href') , 'GET'));
		$allow_file_type = array('css' , 'js' , 'txt' , 'xml');
		foreach (explode('?', $href) as $key => $value){


			$assets_file_address = '/template/' . $value;
			$file_type = explode("." , $assets_file_address);
			$error_assets = array('error_assets' => $assets_file_address);

			ob_start();
			if(in_array(end($file_type), $allow_file_type)){
				$filename = dirname(APPPATH) . $assets_file_address;
				if( ! is_file($filename)) SpeedFrame::end(false , '0000005' , $error_assets);
				echo file_get_contents($filename);
			}else{
				SpeedFrame::end(false , '0000004' , $error_assets);
			}


			$assets_list[] = $assets_file_address;
		}
		header("Content-type: text/" . end($file_type));
		ob_end_flush();
	}
}
