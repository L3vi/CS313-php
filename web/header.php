<?php
	$fileName = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>

<ul class="nav nav-tabs">
	<li class="nav-item">
		<a class="nav-link <?php if ($fileName === 'home') echo 'active' ?>" href="home.php">Home</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?php if ($fileName === 'about-us') echo 'active' ?>" href="about-us.php">About Us</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?php if ($fileName === 'login') echo 'active' ?>" href="login.php">Login</a>
	</li>
</ul>