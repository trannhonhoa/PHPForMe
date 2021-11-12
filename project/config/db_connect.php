<?php
	$conn = mysqli_connect('localhost', 'nhonhoa', 'trannhonhoa', 'ninja_project');
	// check db
	if(!$conn){
		echo 'Connection error: '.mysqli_connect_error();
	} 
?>