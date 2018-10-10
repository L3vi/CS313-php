<?php
	$fileName = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>

<ul class="navbar navbar-dark bg-dark justify-content-start">
		<a class="nav-link <?php if ($fileName === 'home') echo 'active' ?>" href="../home.php">Home</a>
		<a class="nav-link <?php if ($fileName === 'browse') echo 'active' ?>" href="browse.php">Browse</a>
		<a class="nav-link <?php if ($fileName === 'cart') echo 'active' ?>" href="cart.php">Cart</a>
		<a class="nav-link <?php if ($fileName === 'checkout') echo 'active' ?>" href="checkout.php">Checkout</a>
</ul>