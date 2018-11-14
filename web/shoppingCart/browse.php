<?php
session_start();

if(!isset($_SESSION['products'])) {
	class Product {
		public $name;
		public $quantity;
		public $price;
	};
	$burgerKingNug = new Product();
	$burgerKingNug->name = "Burger King Nuggs";
	$burgerKingNug->quantity = 0;
	$burgerKingNug->price = 2;

	$chickFilANug = new Product();
	$chickFilANug->name = "Chik-Fil-A Nuggs";
	$chickFilANug->quantity = 0;
	$chickFilANug->price = 4;

	$mcDonaldsNug = new Product();
	$mcDonaldsNug->name = "McDonalds Nuggs";
	$mcDonaldsNug->quantity = 0;
	$mcDonaldsNug->price = 1;

	$wendysNug = new Product();
	$wendysNug->name = "Wendy's Nuggs";
	$wendysNug->quantity = 0;
	$wendysNug->price = 3;

	$_SESSION['products'] = array($burgerKingNug, $chickFilANug, $mcDonaldsNug, $wendysNug);
};
// var_dump($_SESSION);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Browse the nuggs</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="shopStyle.css" type="text/css">
</head>
<?php
require("header.php");
?>
<body>
	<h1 class="display-1 text-center">Nuggs before Drugs</h1>
	
	<form action="cart.php" method="post">
		<div class="container text-center">

			<!-- Row 1 -->
			<div class="row">
				<div class="col-lg">
					<img src="images/burgerKing.jpg"><br/>
					<input type="checkbox" class="bk"><br/>
					<label>test</label>
					
					<figcaption class="figure-caption">
						<button type="button" class="btn btn-increment rounded-circle" onclick="updateCart('burgerKing', false)">-</button>
						Burger King 
						<button type="button" class="btn btn-increment rounded-circle" onclick="updateCart('burgerKing', true)">+</button>
					</figcaption>
				</div>
				<div class="col-lg">
					<img src="images/chickFilA.jpg"><br/>

					<figcaption class="figure-caption">
						<button type="button" class="btn btn-increment rounded-circle" onclick="updateCart('chickFilA', false)">-</button>
						Chik-Fil-A 
						<button type="button" class="btn btn-increment rounded-circle" onclick="updateCart('chickFilA', true)">+</button>
					</figcaption>
				</div>
			</div>

			<!-- Row 2 -->
			<div class="row">
				<div class="col-lg">
					<img src="images/mcDonalds.jpg"><br/>

					<figcaption class="figure-caption">
						<button type="button" class="btn btn-increment rounded-circle" onclick="updateCart('mcDonalds', false)">-</button>
						McDonalds 
						<button type="button" class="btn btn-increment rounded-circle" onclick="updateCart('mcDonalds', true)">+</button>
					</figcaption>
					
				</div>
				<div class="col-lg">
					<img src="images/wendys.jpg"><br/>

					<figcaption class="figure-caption">
						<button type="button" class="btn btn-increment rounded-circle" onclick="updateCart('wendys', false)">-</button>
						Wendy's
						<button type="button" class="btn btn-increment rounded-circle" onclick="updateCart('wendys', true)">+</button>
					</figcaption>
				</div>
			</div>
			<input type="checkbox" class="bk">
			<label></label>
			<!-- <input type="submit" name="checkout"> -->
		</div>
	</form>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="ajax.js"></script>
</html>