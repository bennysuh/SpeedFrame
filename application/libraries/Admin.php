<?php
class Admin{
	static function is(){
		return isset($_SESSION['admin_user']);
	}
}