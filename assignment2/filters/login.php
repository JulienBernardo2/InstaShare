<?php
namespace assignment2\filters;

#[\Attribute]
class Login extends \assignment2\core\AccessFilter{

	public function execute(){
		if(!isset($_SESSION['user_id'])){
			header('location:/Instashare/index?error=You must log in to use these features!');
			return true;
		}
		 return false;
	}
}

?>