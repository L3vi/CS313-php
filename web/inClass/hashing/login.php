<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<form action="authenticate.php" method="POST">
		Username: <br/><input type="text" name="username"><br/>
		Password: <br/><input type="password" name="password"><br/>
		<input type="submit" value="Log in">
	</form>
</body>
</html>