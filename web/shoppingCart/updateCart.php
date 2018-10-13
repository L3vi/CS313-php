<?php
session_start();
echo $_SESSION['products'][0];

switch ($item) {
	case 'bk':
	$willIncrement ? $_SESSION['products'][0]->quantity++ : $$_SESSION['products'][0]->quantity--;
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