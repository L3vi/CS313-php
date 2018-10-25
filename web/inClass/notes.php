<?php
$id = filter_input(INPUT_POST, 'id');
if ($id == NULL) {
	$id = filter_input(INPUT_GET, 'id');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Note</title>
</head>
<body>
	<?php 
	echo $id;
	?>
</body>
</html>