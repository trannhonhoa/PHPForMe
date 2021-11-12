<?php
	session_start();
	if($_SERVER['QUERY_STRING'] == 'Batman'){
		unset($_SESSION['name']);
	}
	$name = $_SESSION['name'] ? $_SESSION['name'] : 'Guest';

	$gender = $_COOKIE["gender"] ? $_COOKIE['gender'] : "unknow";
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style type="text/css" media="screen">
    	.brand-logo.brand-text{
    		color:  red;
    	}
    	form{
    		max-width: 460px;
    		margin: 20px auto;
    		padding: 20px;
    	}
    	.pizza{
    		max-width: 100px;
    		margin: 40px auto -30px;
    		display: block;
    		position: relative;
    		top: -30px;
    	}
    </style>
</head>
	<body class="grey lighten-4">
		<nav class="white z-depth-0">
			<div class="container">
				<a href="#" class="brand-logo brand-text center" title="fb.com">Ninja Pizza</a>
				<ul id="nav-mobile" class="right hide-on-small-and-down">
					<li class="grey-text">Hello <?php echo htmlspecialchars($name); ?></li>
					<li class="grey-text">(<?php echo htmlspecialchars($gender); ?>)</li>
					<li><a href="add.php" title="" class="btn brand z-depth-0">Add a pizza</a></li>
				</ul>
			</div>
		</nav>