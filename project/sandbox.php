<?php 
	if(isset($_POST['submit'])){
		session_start();
		$_SESSION['name'] = $_POST['name'];

		echo $_SESSION['name'];

		header('Location: index.php');

		// cookie
		setcookie('gender', $_POST['gender'], time() + 86400);

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']?>"  method="POST" accept-charset="utf-8">

		<input type="text" name="name">
		<select name="gender">
			<option value="male">male</option>
			<option value="female">female</option>
		</select>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>