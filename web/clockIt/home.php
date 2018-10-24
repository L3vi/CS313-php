<?php
require('dbConnect.php');
$db = get_db();


$statement = $db->prepare('SELECT * FROM users');
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Clock It</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<?php 
		foreach ($users as $user) {
			echo "<p>" . $user['name'] . "</p>";
		};
	?>
	<form action="home.php" method="post">
		Enter Words: <input type="text" name="words">
		<br/>
		<input type="submit">
	</form>

</body>
</html>