<?php
	$fileName = pathinfo($_SERVER['PHP_SELF'], PATHINFO_EXTENSION);
	echo $fileName;
	$file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_BASENAME - PATHINFO_EXTENSION);
	echo $file;
?>

<ul class="nav nav-tabs">
	<li class="nav-item">
		<a class="nav-link" href="home.php">Home</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="about-us.php">About Us</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="login.php">Login</a>
	</li>
</ul>