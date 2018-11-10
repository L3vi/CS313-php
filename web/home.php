<?php
session_start();
if (isset($_SESSION["timesVisited"])) {
	$_SESSION["timesVisited"]++;
} else {
	$_SESSION["timesVisited"] = 1;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="styling.css" type="text/css">
</head>
<?php
	require("header.php");
?>
<body>
	<h1>My name is Levi</h1>
	<br/>
	<p>Welcome, you probably want to head on over to the assignments page</p>
</body>
</html>