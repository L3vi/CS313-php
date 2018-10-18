<?php
	$fileName = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>

<ul class="navbar navbar-dark bg-dark justify-content-start">
		<a class="nav-link <?php if ($fileName === 'home') echo 'active' ?>" href="home.php">Home</a>
		<a class="nav-link <?php if ($fileName === 'assignments') echo 'active' ?>" href="assignments.php">Assignments</a>
		<!-- <a class="nav-link <?php if ($fileName === 'shop') echo 'active' ?>" href="shoppingCart/browse.php">Shop</a> -->
		<a class="nav-link" target="_blank" href="https://l3vi.github.io/index.html">Other Projects (External Link)</a>
</ul>