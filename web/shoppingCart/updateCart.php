<?php
session_start();
$products = $_SESSION['products'];


foreach ($products as $product) {
	switch ($product->name) {
		case 'Burger King Nuggs':
		var_dump($_SESSION);
		break;

		case 'Chik-Fil-A Nuggs':
		$willIncrement ? $chickFilANug->quantity++ : $chickFilANug->quantity--;
		var_dump($chickFilANug);
		break;

		case 'McDonalds Nuggs':
		$willIncrement ? $mcDonaldsNug->quantity++ : $mcDonaldsNug->quantity--;
		echo $mcDonaldsNug;
		break;

		case 'Wendy\'s Nuggs':
		$willIncrement ? $wendysNug->quantity++ : $wendysNug->quantity--;
		echo $wendysNug;
		break;

		default:
		echo "Default";
		// var_dump($_SESSION);
		break;
	};	
};
// var_dump($_SESSION);

?>