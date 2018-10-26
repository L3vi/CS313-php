<?php
require('dbConnect.php');
$db = get_db();

$course_id = htmlspecialchars($_GET['id']);

$query = 'SELECT n.id AS note_id, c.code, c.name, n.content FROM note n JOIN course c ON n.course_id = c.id WHERE c.id=:course_id';
$statement = $db->prepare($query);
$statement->bindValue(':course_id', $course_id, PDO::PARAM_INT);
$statement->execute();
$notes = $statement->fetchAll(PDO::FETCH_ASSOC);

$course_name = $notes[0]['name'];
$course_code = $notes[0]['code'];

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo "$course_code - $course_name"; ?></title>
</head>
<body>
	<h1>Notes for <?php echo "$course_code - $course_name"; ?></h1>
	<?php
	foreach ($notes as $note) {
		$content = $note['content'];
		echo "<p>$content</p>";
	};
	?>
</body>
</html>