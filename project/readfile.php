<?php
	// $file = 'readme.txt';
	// if(file_exists($file)){
	// 	echo readfile($file);

	// 	copy($file, 'quotes.txt');

	// 	echo realpath($file)."<br/>";
	// 	echo filesize($file)."<br/>";
	// }
		

	$file = "quotes.txt";
	$handle = fopen($file, 'r');

	echo fread($handle, filesize($file));

	
?>