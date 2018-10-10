<?php
	$fileName = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>

<ul class="navbar navbar-dark bg-dark justify-content-start">
		<a class="nav-link <?php if ($fileName === 'home') echo 'active' ?>" href="home.php">Browse</a>
		<a class="nav-link <?php if ($fileName === 'assignments') echo 'active' ?>" href="assignments.php">Cart</a>
		<a class="nav-link <?php if ($fileName === 'shop') echo 'active' ?>" href="shop.php">Shop</a>
		<a class="nav-link" target="_blank" href="https://l3vi.github.io/index.html">Other Projects</a>
</ul>