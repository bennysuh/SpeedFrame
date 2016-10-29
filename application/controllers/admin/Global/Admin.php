<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{
	public function __construct(){
		parent::__construct();


		// 检测用户是否登录了后台
		if( ! isset($_SESSION['admin_user'])){
			Loader::view(array('Login') , array() , 'admin');
			exit;
		}
	}

	public function index(){
		
	}
}
