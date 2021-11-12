<?php
	
	include('config/db_connect.php');

	$sql = "SELECT title, ingredients, id  from pizzas order by create_at";
	$result = mysqli_query($conn, $sql);

	// featch the result rows as an array
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
	mysqli_free_result($result);
	mysqli_close($conn);
	// print_r($pizzas);

	// $string = explode(',', $pizzas[0]['ingredients']);
	// print_r ($string);
?>
<!DOCTYPE html>
<html lang="en">
	
	<?php include('/templates/header.php'); ?>	
	<h4 class="center grey-text">Pizzas</h4>
	<div class="container">
		<div class="row">
			<?php foreach($pizzas as $pizza): ?>
				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="">
							<img src="images/pizza.png" class="pizza" alt="">
						</div>
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($pizza['title']) ?></h6>
							<ul>
								<?php foreach(explode(',', $pizza['ingredients']) as $ingre) : ?>
									<li>
										<?php echo htmlspecialchars($ingre) ?>
									</li>
								<?php endforeach; ?>
							</ul>	
						</div>
						<div class="card-action right-align">
							<a href="details.php?id=<?php echo $pizza['id']?>" class="brand-text">more infor</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			<?php if(count($pizzas) >=2) {?>
				<p>There are 2 or more pizzas</p>
			<?php } else { ?>
				<p>There are less than 2 pizzas</p>
			<?php }?>
		</div>
	</div>

	<?php include('/templates/footer.php'); ?>	

</html>