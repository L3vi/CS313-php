<?php

$item = $_POST['id'];
$willIncrement = $_POST['willIncrement'];
echo $item;
echo $willIncrement;
exit;

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