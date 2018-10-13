<?php
session_start();
$products = $_SESSION['products'];


foreach ($products as $product) {
	switch ($product->name) {
		case 'burgerKingNug':
		$willIncrement ? $burgerKingNug->quantity++ : $burgerKingNug->quantity--;
		break;

		case 'chickFilANug':
		$willIncrement ? $chickFilANug->quantity++ : $chickFilANug->quantity--;
		break;

		case 'mcDonaldsNug':
		$willIncrement ? $mcDonaldsNug->quantity++ : $mcDonaldsNug->quantity--;
		break;

		case 'wendysNug':
		$willIncrement ? $wendysNug->quantity++ : $wendysNug->quantity--;
		break;

		default:
		break;
	};	
};
var_dump($_SESSION);

?>