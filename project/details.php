<?php 
	include('config/db_connect.php');
	if(isset($_POST['delete'])){
		$id_to_delete = mysqli_real_escape_string($conn,$_POST['id_to_delete']);
		$sql = "DELETE from pizzas where id = $id_to_delete";
		if(mysqli_query($conn, $sql)){
			header('Location: index.php');
		}
		else{
			echo 'Query error'.mysqli_error();
		}
	}
	if(isset($_GET['id'])){
		$id = mysqli_escape_string($conn, $_GET['id']);
		$sql = "SELECT * from pizzas where id = $id";

		$result = mysqli_query($conn, $sql);

		$pizza = mysqli_fetch_assoc($result);

		mysqli_free_result($result);
		mysqli_close($conn);

		print_r($pizza);
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
	<?php include('/templates/header.php'); ?>	
	<h2 class="center">Details</h2>
	<div class="container center">
		<?php if($pizza):?>
			<h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
			<p>Create by: <?php htmlspecialchars($pizza['email']); ?></p>
			<p><?php echo date($pizza['create_at']); ?></p>
			<p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

			<!-- Deleted -->
			<form action="" method="POST" accept-charset="utf-8">
				<input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']; ?>">
				<input type="submit" name="delete" value="delete" class="btn brand z-depth-5">
			</form>
		<?php else : ?>
			<h5>No such pizza exists!</h5>
		<?php endif; ?>
	</div>
	<?php include('/templates/footer.php'); ?>
</body>
</html>