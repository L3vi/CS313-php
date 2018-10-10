<!DOCTYPE html>
<html>
<head>
	<title>Browse</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="styling.css" type="text/css">
</head>
<?php
	require("header.php");
?>
<body>
	<div class="container">
	  <div class="row">
	    <div class="col-lg">
	    	<img src="images/burgerKing.jpg"><br/>
	      Chicken Nugget #1
	    </div>
	    <div class="col-lg">
	    	<img src="images/chickFilA.jpg"><br/>
	      Chicken Nugget #2
	    </div>
	  </div>
	  <div class="row">
	    <div class="col-lg">
	    	<img src="images/mcDonalds.jpg"><br/>
	    	Chicken Nugget #3
	    </div>
	    <div class="col-lg">
	    	<img src="images/wendys.jpg"><br/>
	      Chicken Nugget #4
	    </div>
	  </div>

	</div>
	<?php 
	echo "You will browse here.";

	?>

</body>
</html>