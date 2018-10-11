<?php

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
					
					<figcaption class="figure-caption">
						<button type="button" class="btn btn-increment rounded-circle" onclick="updateCart('burgerKing', 'decrement')">-</button>
						Burger King 
						<button type="button" class="btn btn-increment rounded-circle" onclick="updateCart('burgerKing', 'increment')">+</button>
					</figcaption>
				</div>
				<div class="col-lg">
					<img src="images/chickFilA.jpg"><br/>

					<figcaption class="figure-caption">
						<button type="button" class="btn btn-increment rounded-circle" onclick="updateCart('chickFilA', 'decrement')">-</button>
						Chik-Fil-A 
						<button type="button" class="btn btn-increment rounded-circle" onclick="updateCart('chickFilA', 'increment')">+</button>
					</figcaption>
				</div>
			</div>

			<!-- Row 2 -->
			<div class="row">
				<div class="col-lg">
					<img src="images/mcDonalds.jpg"><br/>

					<figcaption class="figure-caption">
						<button type="button" class="btn btn-increment rounded-circle" onclick="updateCart('mcDonalds', 'decrement')">-</button>
						McDonalds 
						<button type="button" class="btn btn-increment rounded-circle" onclick="updateCart('mcDonalds', 'increment')">+</button>
					</figcaption>
					
				</div>
				<div class="col-lg">
					<img src="images/wendys.jpg"><br/>

					<figcaption class="figure-caption">
						<button type="button" class="btn btn-increment rounded-circle" onclick="updateCart('wendys', 'decrement')">-</button>
						Wendy's
						<button type="button" class="btn btn-increment rounded-circle" onclick="updateCart('wendys', 'increment')">+</button>
					</figcaption>
				</div>
			</div>
			<!-- <input type="submit" name="checkout"> -->
		</div>
	</form>

</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="ajax.js"></script>
</html>