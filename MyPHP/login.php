<?php
function Login(){
	if(!empty($_POST)){
		$email = $_POST['email'];
		$password = $_POST['password'];
		if($email == "trannhonhoa2001@gmail.com" && $password=="123"){
			header("Location: welcome.php");
		}	
	}
}
?>