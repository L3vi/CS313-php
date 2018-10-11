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
	<form action="cart.php" method="post">
		<h1 class="display-1 text-center">Nuggs before Drugs</h1>

		<div class="container text-center">
			<!-- Row 1 -->
			<div class="row">
				<div class="col-lg">
					<img src="images/burgerKing.jpg"><br/>

					<figcaption class="figure-caption">
						<button type="button" class="btn btn-increment rounded-circle">-</button>
						Burger King 
						<button type="button" class="btn btn-increment rounded-circle">+</button>
					</figcaption>
				</div>
				<div class="col-lg">
					<img src="images/chickFilA.jpg"><br/>

					<figcaption class="figure-caption">
						<button type="button" class="btn btn-increment rounded-circle">-</button>
						Chik-Fil-A 
						<button type="button" class="btn btn-increment rounded-circle">+</button>
					</figcaption>
				</div>
			</div>
			<!-- Row 2 -->
			<div class="row">
				<div class="col-lg">
					<img src="images/mcDonalds.jpg"><br/>

					<figcaption class="figure-caption">
						<button type="button" class="btn btn-increment rounded-circle">-</button>
						 McDonalds 
						<button type="button" class="btn btn-increment rounded-circle">+</button>
					</figcaption>
				</div>
				<div class="col-lg">
					<img src="images/wendys.jpg"><br/>

					<figcaption class="figure-caption">
						<button type="button" class="btn btn-increment rounded-circle">-</button>
						 Wendy's
						<button type="button" class="btn btn-increment rounded-circle">+</button>
					</figcaption>
				</div>
			</div>

		</div>
	</form>

</body>
</html>