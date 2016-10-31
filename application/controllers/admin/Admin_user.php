<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH . 'controllers/admin/global/admin.php';
class Admin_user extends admin{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		
		Loader::view(array('pages/admin_user/home') , array() , 'admin');
	}
}
