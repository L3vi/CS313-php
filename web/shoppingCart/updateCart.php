<?php
session_start();
$products = $_SESSION['products'];


foreach ($products as $product) {
	switch ($product->name) {
		case 'burgerKingNug':
		$willIncrement ? $burgerKingNug->quantity++ : $burgerKingNug->quantity--;
		echo $burgerKingNug;
		break;

		case 'chickFilANug':
		$willIncrement ? $chickFilANug->quantity++ : $chickFilANug->quantity--;
		echo $chickFilANug;
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
var_dump($_SESSION);

?>