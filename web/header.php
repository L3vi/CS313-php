<?php
	$fileName = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>

<ul class="nav nav-tabs">
	<li class="nav-item">
		<a class="nav-link <?php if ($fileName === 'home') echo 'active' ?>" href="home.php">Home</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?php if ($fileName === 'assignments') echo 'active' ?>" href="assignments.php">Assignments</a>
	</li>
	<li class="nav-item">
		<a class="nav-link href="https://l3vi.github.io/index.html">Other Projects</a>
	</li>
</ul>