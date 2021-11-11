<?php
function regis(){
	if(!empty($_POST)){
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];

		setcookie("fullname", $fullname, time);
	}
	var_dump($_COOKIE);
}