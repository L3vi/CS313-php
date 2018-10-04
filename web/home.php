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
	
	<br/>
	<p>This website is very undeveloped. #StemFairProblems</p>
	<p>Move along!</p>
	<form action="form.php" method="post">
		Enter Words: <input type="text" name="words">
		<br/>
		<input type="submit">
	</form>

	<form action="userInformation.php" method="post">
		Name: <input type="test" name="name">
		<br/>
		<input type="submit">
	</form>
	<?php 
	// echo "You've visited this website $_SESSION["timesVisited"]";
	echo $_SESSION["timesVisited"];
	if ($_SESSION["timesVisited"] > 30) {
		echo "You should probably go now...";
	}
	if ($_SESSION["timesVisited"] > 75) {
		echo "But like really... go away!";
	} 
	?>
</body>
</html>