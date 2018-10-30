<?php

require('dbConnnect.php');
$db = get_db();

$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);


$statement = $db->prepare('INSERT INTO users (name, password) VALUES (:username, :password)');
$statement->bindValue(':username', $username, PDO::PARAM_STR);
$statement->bindValue(':password', $hashedPassword, PDO::PARAM_STR);
$statement->execute();

?>