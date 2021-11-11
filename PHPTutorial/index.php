<?php
	// $radius = 25;
	// $pi = 3.14;
	// echo floor($pi);
	// echo ceil($pi);
	// echo pi();

	// $peopleOne = ['Tran', 'Nhon', 'Hoa'];
	// $peopleTwo = ['Fukada', 'Tokuda'];
	// echo $peopleOne[0];
	// echo "<br/>";
	// $peopleOne[0] = 'Messi';
	// print_r ($peopleOne);
	// $peopleOne[] = 'Ronaldo';
	// echo "<br/>";
	// print_r($peopleOne);
	// array_push($peopleOne, 'Neymar');
	// echo "<br/>";
	// print_r($peopleOne);
	// echo "<br/>";
	// echo count($peopleOne);

	// $peopleThree = array_merge($peopleOne, $peopleTwo);
	// echo "<br/>";
	// print_r($peopleThree);


	// $family = [
	// 	"Me" => "Hoa",
	// 	"sister" => "An",
	// 	"parents" => "Love"
	// ];
	// echo "<br/>";
	// print_r($family);
	// echo "<br />";
	// echo count($family);


	

	// $family = [
	// 	["fullname" =>"Tran Nhon Hoa","Age" => 20, "Job" => "SV"],
	// 	["fullname" => "Thuy An", "Age" => 16, "Job" => "HS"],
	// 	["fullname"=>"parents", "Age" => 40, "Job" => "Home"]
	// ];
	// echo count($family);
	// echo "<br />";
	// print_r($family);
	// echo "<br />";
	// array_pop($family);
	// print_r($family);



	// foreach ($family as $key => $value) {
	// 	echo $value["fullname"]."-";
	// 	echo "<br/>";
	// }

	// $i = 0;
	// while($i < count($family)){
	// 	echo $family[$i]["fullname"]."<br />";
	// 	$i++;
	// }

	// echo 5 < 10;
	// echo 10 != 10;

	
	// echo 10 == '10';

	// echo true == 1;
	// echo false == "";
	 

	// function sayHello($infor){
	// 	echo "{$infor["fullname"]}";
	// }
	// sayHello(["fullname" =>"Tran Nhon Hoa","Age" => 20, "Job" => "SV"]);

	// $name = "mario";
	// function sayHello(&$name){
	// 	$name = "Hoa";
	// 	echo "Hello $name";
	// }
	// sayHello($name);
	// echo $name;

	// include_once('familys.php');
	echo "<br />";
	// require_once('familys.php');
	echo "Dis con me php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<!-- <h1> My family </h1>
	<ul>
		<?php foreach ($family as $key => $value) {?>
			<h3><?php echo $value["fullname"]; ?></h3>
		<?php } ?>
	</ul> -->

	<?php include('content.php'); ?>
</body>
</html>