<?php
	include('config/db_connect.php');
	$email = $title = $ingredients = '';
	$error = array('email' => '', 'title' => '', 'ingredients' => '');
	if(isset($_POST['submit'])){
		// echo htmlspecialchars($_GET["email"]);
		// echo htmlspecialchars($_GET["title"]);
		// echo htmlspecialchars($_GET["ingredients"]);

		if(!empty($_POST['email'])){
			$email = htmlspecialchars($_POST["email"]);
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$error['email'] = "<h6 style='color: red;'>email must be a valid email address</h6>";
			}
		}
		else{
			$error['email'] = "<h6 style='color: red;'>email is required</h6>";
		}
		if(!empty($_POST['title'])){
			$title = htmlspecialchars($_POST["title"]);
			if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
				$error['title'] =  "<h6 style='color: red;'>Title must be letters and space only</h6>";
			}
		}
		else{
			$error['title'] = "<h6 style='color: red;'>title is required</h6>";
		}
		if(!empty($_POST['ingredients'])){	 
			$ingredients = htmlspecialchars($_POST["ingredients"]);
			if(!preg_match('/^([a-zA-z\s]+)(, \s*[a-zA-Z\s]*)*$/', $ingredients)){
				$error['ingredients'] = "<h6 style='color: red;'>Ingredients must be a comma separate</h6>";
			}
		}
		else{
			$error['ingredients'] = "<h6 style='color: red;'>ingredients is required</h6>";
		}
		// if exsist return 1
		if(array_filter($error)){
			echo 'error in the form';
		}	
		else{
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$title = mysqli_real_escape_string($conn, $_POST['title']);
			$ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

			$sql = "INSERT INTO pizzas(title, email, ingredients) values('$title', '$email', '$ingredients')";
			if(mysqli_query($conn, $sql)){
				header('Location: index.php');
			}
			else{
				echo "Query error: ".mysqli_error($conn);
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

	<?php include('/templates/header.php'); ?>	
	<section class="container grey-text">
		<h4 class="center">Add a pizza</h4>
		<form action="add.php" method="POST" class="white" accept-charset="utf-8">
			<label>Your Email:</label>
			<input type="text" name="email" value="<?php echo $email ?>">
			<div class="red-text"><?php echo $error['email'] ?></div>
			<label>Pizz Title:</label>
			<input type="text" name="title" value="<?php echo $title ?>" >
			<div class="red-text"><?php echo $error['title'] ?></div>
			<label>Ingredients:</label>
			<input type="text" name="ingredients" value="<?php echo $ingredients ?>">
			<div class="red-text"><?php echo $error['ingredients'] ?></div>
			<div class="center">
				<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
			</div>

		</form>
	</section>
	<?php include('/templates/footer.php'); ?>	
</html>