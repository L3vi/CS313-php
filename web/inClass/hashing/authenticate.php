<?php

require('dbConnnect.php');
$db = get_db();

$user = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);


$statement = $db->prepare('SELECT password FROM users');
$statement->execute();
$hashedPassword = $statement->fetch(PDO::FETCH_ASSOC);


if (password_verify($password, $hashedPassword['password'])) {
	header('location:home.php');
} else {
	echo "Failed";
};

?>