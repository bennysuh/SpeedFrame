<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH . 'controllers/admin/global/admin.php';
class Admin_user extends admin{
	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_user_model');
	}

	public function index(){
		$User_list = $this->Admin_user_model->get_list(array());
		
		Loader::view(array('pages/admin_user/home') , array(
			'User_list' => $User_list
		) , 'admin');
	}
	public function group(){
		Loader::view(array('pages/admin_user/group') , array() , 'admin');
	}
}
