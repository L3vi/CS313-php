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
				echo "<li><p><a href='notes.php?id=$id'>$code - $name</a></p></li>";
			}
		?>
		<li>Test Course 1</li>
		<li>Test Course 2</li>
	</ul>
</body>
</html>