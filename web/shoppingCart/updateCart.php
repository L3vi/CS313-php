<?php
session_start();
$products = $_SESSION['products'];


foreach ($products as $product) {
	switch ($product->name) {
		case 'burgerKingNug':
		var_dump($_SESSION);
		break;

		case 'chickFilANug':
		$willIncrement ? $chickFilANug->quantity++ : $chickFilANug->quantity--;
		var_dump($chickFilANug);
		break;

		case 'mcDonaldsNug':
		$willIncrement ? $mcDonaldsNug->quantity++ : $mcDonaldsNug->quantity--;
		echo $mcDonaldsNug;
		break;

		case 'wendysNug':
		$willIncrement ? $wendysNug->quantity++ : $wendysNug->quantity--;
		echo $wendysNug;
		break;

		default:
		break;
	};	
};
// var_dump($_SESSION);

?>