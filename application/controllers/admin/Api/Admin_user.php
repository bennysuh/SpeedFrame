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
		extract(SpeedFrame::params(array('username' , 'password')));
		$User_data = $this->Admin_user_model->get(array('username' => $username));
		if( ! isset($User_data['username'])) SpeedFrame::end(false , '0000006');

		$password = md5($password . $User_data['salt']);
		if($User_data['password'] == $password){
			$_SESSION['admin_user'] = $User_data;

			$this->Admin_user_model->edit(array('id' => $User_data['id']) , array(
				'newTime' => time() ,
				'newIp' => $_SERVER['SERVER_ADDR'] ,
				'lostTime' => $User_data['newTime'] ,
				'lostIp' => $User_data['newIp'] ,
			));
			
			SpeedFrame::end(true);
		}
	}




	public function create(){
		if( ! Admin::is()) SpeedFrame::end(false , 'notLogin');
		if( ! Rule::check(SpeedFrame::params(array('username' , 'password' , 'class' , 'state')) , array(
			array('max' => 16 , 'min' => 6 , 'name' => '用户名') ,
			array('max' => 16 , 'min' => 6 , 'name' => '密码') ,
			array('is_null' => true , 'is_number' => true , 'name' => '类型') ,
			array('is_null' => true , 'is_number' => true , 'name' => '状态')
		))){
			$reslut = Rule::reslut();
			SpeedFrame::end(false , 'custom' , array('custom' => $reslut['text']));
		}
		extract(Rule::reslut());

		if($this->Admin_user_model->is_exist(array('username' => $username))) SpeedFrame::end(false , 'user_exist');


		$salt = rand(100000 , 999999);
		$this->Admin_user_model->create(array(
			'username' => $username , 
			'password' => md5($password . $salt) , 
			'salt' => $salt ,
			'createTime' => time()
		));
		SpeedFrame::end(true);
	}
}
