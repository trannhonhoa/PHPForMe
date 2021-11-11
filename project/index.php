<?php
	// connect to db
	$conn = mysqli_connect('localhost', 'nhonhoa', 'trannhonhoa', 'ninja_project');
	// check db
	if(!$conn){
		echo 'Connection error: '.mysqli_connect_error();
	}
	else{
		echo "Connection success";
	}
	// write query
	$sql = "SELECT title, ingredients, id  from pizzas";
	$result = mysqli_query($conn, $sql);

	// featch the result rows as an array
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
	mysqli_free_result($result);
	mysqli_close($conn);
	print_r($pizzas);
?>
<!DOCTYPE html>
<html lang="en">

	<?php include('header.php'); ?>	
	<?php include('footer.php'); ?>	
</html>