<?php
	$fileName = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>

<ul class="navbar navbar-dark bg-dark">
		<a class="nav-link <?php if ($fileName === 'home') echo 'active' ?>" href="home.php">Home</a>
		<a class="nav-link <?php if ($fileName === 'assignments') echo 'active' ?>" href="assignments.php">Assignments</a>
		<a class="nav-link" target="_blank" href="https://l3vi.github.io/index.html">Other Projects</a>
</ul>