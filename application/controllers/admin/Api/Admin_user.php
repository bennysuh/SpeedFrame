<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_user extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("Admin_user_model");
	}


	/**
	 * 用户登录通用接口
	 * @return [type] [description]
	 */
	public function login(){
		// if(!Admin::is()) SpeedFrame::end(false , 'notLogin');
		extract(SpeedFrame::params(array('username' , 'password')));
		$User_data = $this->Admin_user_model->get(array('username' => $username));
		if( ! isset($User_data['username'])) SpeedFrame::end(false , '0000006');

		$password = md5($password . $User_data['salt']);
		if($User_data['password'] == $password){
			$_SESSION['admin_user'] = $User_data;
			
			SpeedFrame::end(true);
		}


	}
}
