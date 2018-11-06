<?php 
// Connnect to database
require('dbConnect.php');
$db = get_db();

// Query for all movies
$statement = $db->prepare('SELECT id, title, year FROM movie');
$statement->execute();
$movies = $statement->fetchAll(PDO::FETCH_ASSOC);

// Go through each movie in query result and display it
?>
<!DOCTYPE html>
<html>
<head>
	<title>Movies</title>
</head>
<body>
	<h1>Movies</h1>
	<?php 
		foreach ($movies as $movie) {
			$title = $movie['title'];
			$year = $movie['year'];
			echo "<li><p>$title ($year)</p></li>";
		};
	?>

</body>
</html>