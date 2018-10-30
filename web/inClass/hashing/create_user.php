<?php

require('dbConnnect.php');
$db = get_db();

$user = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
Password_hash($password, PASSWORD_DEFAULT);


$statement = $db->prepare('INSERT INTO users (name, password) VALUES (:username, :password)');
$statement->bindValue(':username', $user, PDO::PARAM_INT);
$statement->bindValue(':password', $password, PDO::PARAM_INT);
$statement->execute();

?>