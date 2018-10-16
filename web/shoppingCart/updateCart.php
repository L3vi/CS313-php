<?php
session_start();
$products = $_SESSION['products'];

var_dump($products);
foreach ($products as $product) {
	var_dump($product=>name);
	echo $product=>name;
	switch ($product->name) {
		case "Burger King Nuggs":
		echo "Burger King";
		break;

		case 'Chik-Fil-A Nuggs':
		$willIncrement ? $chickFilANug->quantity++ : $chickFilANug->quantity--;
		echo "Chik-Fil-A";
		break;

		case 'McDonalds Nuggs':
		$willIncrement ? $mcDonaldsNug->quantity++ : $mcDonaldsNug->quantity--;
		echo "McDonalds";
		break;

		case 'Wendy\'s Nuggs':
		$willIncrement ? $wendysNug->quantity++ : $wendysNug->quantity--;
		echo "Wendy's";
		break;

		default:
		// var_dump($_SESSION);
		break;
	};	
};
// var_dump($_SESSION);

?>