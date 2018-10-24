<?php
require('dbConnect.php');
$db = get_db();


$statement = $db->prepare('SELECT * FROM users');
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);


$user = $_POST['user'];

$statement2 = $db->prepare('SELECT * FROM activities WHERE user_id=:user');
$statement2->bindValue(':user', $user, PDO::PARAM_INT);
$statement2->execute();
$activities = $statement2->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Clock It</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<form action="home.php" method="post">
		<select name="user">
			<?php 
			foreach ($users as $user) {
				echo "<option value=\"" . $user['id'] . "\">" . $user['name'] . "</option>";
			};
			?>
		</select>
		<br/>
		<input type="submit">
	</form>
	<p>Activites for listed user...</p>
	<ul>
		<?php 
		foreach ($activities as $activity) {
			echo "<li>" . $activity['name'] . "</li>";
		};
		?>
	</ul>
</body>
</html>