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
	<?php 
	echo "<ul class=\"list-group\">";
	foreach ($shoppingList as $item) {
		switch($item) {
			case "burgerKing":
				echo "<li class=\"list-group-item\">Burger King</li>";
				break;
			case "chickFilA":
				echo "<li class=\"list-group-item\">Chick-Fil-A</li>";
				break;
			case "mcDonalds":
				echo "<li class=\"list-group-item\">McDonalds</li>";
				break;
			case "wendys":
				echo "<li class=\"list-group-item\">Wendy's</li>";
				break;
			default:
				echo "Your cart is empty.";
				break;
		};
	};
	echo "</ul";
	?>

</body>
</html>