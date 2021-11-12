<?php
	class User{
		public $email;
		public $name;
		public function __construct(){
			$this->email = 'tranhoa';
			$this->name = 'Hoa';
		}
		public function login(){
			echo 'the user logged in ';
		}
		
	}

	$userOne = new User();
	$userOne->login();
	echo $userOne->email;
?>