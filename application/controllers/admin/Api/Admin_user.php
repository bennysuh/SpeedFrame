<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_user extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function login(){
		if(!Admin::is()) SpeedFrame::end(false , 'notLogin');
		
	}
}
