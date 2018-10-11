<?php
	$burgerKing = $_POST['burgerKing'];
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
	echo "This is the cart.";
	foreach ($shoppingList as $item) {
		echo $item;
	}
	?>

</body>
</html>