<?php
	$email = $password = '';
	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}
	if(isset($_POST['pwd'])){
		$password = $_POST['pwd'];
	}

	if($email != '' && $password != ''){
		header('Location: login.php?username='.$email.'password='.$password);
		die();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container mt-3">
		<form action="" method="POST">
		<div class="form-group">
			<label for="email">Email address:</label>
			<input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" name="pwd" placeholder="Enter password" id="pwd">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
</body>
</html>