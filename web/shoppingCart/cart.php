<?php
$shoppingList = $_POST['cart'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="shopStyle.css" type="text/css">
</head>
<?php
require("header.php");
?>
<body>
	<ul class="list-group">
		<li class="list-group-item">Cras justo odio</li>
		<li class="list-group-item">Dapibus ac facilisis in</li>
		<li class="list-group-item">Morbi leo risus</li>
		<li class="list-group-item">Porta ac consectetur ac</li>
		<li class="list-group-item">Vestibulum at eros</li>
	</ul>
	<?php 
	echo "<ul class=\"list-group\">"
	foreach ($shoppingList as $item) {
		echo "<li class=\"list-group-item\">$item</li>"
		// switch($item) {
		// 	case "burgerKing":
		// 		echo "<li class=\"list-group-item\">$item</li>"
		// 		break;
		// 	case "chickFilA":
		// 		echo "<li class=\"list-group-item\">$item</li>"
		// 		break;
		// 	case "mcDonalds":
		// 		echo "<li class=\"list-group-item\">$item</li>"
		// 		break;
		// 	case "wendys":
		// 		echo "<li class=\"list-group-item\">$item</li>"
		// 		break;
		// 	default:
		// 		break;
		// }
	}
	echo "</ul";
	?>

</body>
</html>