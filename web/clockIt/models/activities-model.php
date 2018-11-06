<?php

// Clock-It Model

// Gets list of activities
function getActivities($userId) {
	$database = getDatabase();
    $sql = 'SELECT name FROM activities WHERE user_id=:userId';
    $statement = $database->prepare($sql);
    $statement->bindValue(':userId', $userId, PDO::PARAM_INT);
    $statement->execute();
    $activities = $statement->fetchAll();
    $statement->closeCursor();
    return $activities;
}