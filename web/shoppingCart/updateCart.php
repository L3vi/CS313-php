<?php
session_start();
echo $_SESSION['products'][0];
var_dump($_SESSION);

// switch ($item) {
// 	case 'bk':
// 	$willIncrement ? $burgerKingQuantity++ : $burgerKingQuantity--;
// 	break;

// 	case 'cf':
// 	$willIncrement ? $chickFilAQuantity++ : $chickFilAQuantity--;
// 	break;

// 	case 'md':
// 	$willIncrement ? $mcDonaldsQuantity++ : $mcDonaldsQuantity--;
// 	break;

// 	case 'w':
// 	$willIncrement ? $wendysQuantity++ : $wendysQuantity--;
// 	break;

// 	default:
// 	break;
// };

?>