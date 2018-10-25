<?php
	require("dbConnect.php");
	$db = get_db();

	$query = 'SELECT id, code, name FROM course';
	$statement = $db->prepare($query);
	$statement->execute;
	$courses = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Courses</title>
</head>
<body>
	<h1>Courses</h1>

	<ul>
		<?php
			foreach ($courses as $course) {
				$id = $course['id'];
				$name = $course['name'];
				$code = $course['code'];
				echo "<li>" . $name . "</li>";
			}
		?>
	</ul>
</body>
</html>