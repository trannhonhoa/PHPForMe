<?php


// check email has exsits
if(isset($_REQUEST['email'])){
	$email = $_REQUEST['email'];
	$password = $_REQUEST['pwd'];

	echo "email: ";
	echo $email;
	echo '<br/>'; 
	echo 'password: ';
	echo $password;
}