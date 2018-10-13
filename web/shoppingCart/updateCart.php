<?php
session_start();

$_SESSION['product'] = "Test2";


$item = $_POST['id'];
$willIncrement = $_POST['willIncrement'];

switch ($item) {
	case 'bk':
	$willIncrement ? $burgerKingQuantity++ : $burgerKingQuantity--;
	break;

	case 'cf':
	$willIncrement ? $chickFilAQuantity++ : $chickFilAQuantity--;
	break;

	case 'md':
	$willIncrement ? $mcDonaldsQuantity++ : $mcDonaldsQuantity--;
	break;

	case 'w':
	$willIncrement ? $wendysQuantity++ : $wendysQuantity--;
	break;

	default:
	break;
};

?>