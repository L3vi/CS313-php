<?php
require('dbConnect.php');
$db = get_db();

$course_id = filter_input(INPUT_POST, 'id');
if ($id == NULL) {
	$id = filter_input(INPUT_GET, 'id');
};

$query = 'SELECT n.id AS note_id, c.code, c.name, n.content FROM note n JOIN course c ON n.course_id = c.id WHERE c.id=:course_id';
$statement = $db->prepare($query);
$statement->bindValue(':course_id', $course_id, PDO::PARAM_INT);
$statement->execute();
$notes = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Note</title>
</head>
<body>
	<?php 
	foreach ($notes as $note) {
		echo $note;
	}
	?>
</body>
</html>