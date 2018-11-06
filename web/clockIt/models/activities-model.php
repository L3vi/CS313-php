<?php

// Clock-It Model

// Gets list of activities
function getActivities($userId) {
	$database = getDatabase();
    $sql = 'SELECT id, name FROM activities WHERE user_id=:userId';
    $statement = $database->prepare($sql);
    $statement->bindValue(':userId', $userId, PDO::PARAM_INT);
    $statement->execute();
    $activities = $statement->fetchAll();
    $statement->closeCursor();
    return $activities;
}

function createActivity($activityName) {
    // Create a connection object using the acme connection function
    $db = getDatabase();
    // The SQL statement
    $sql = 'INSERT INTO activities name
     VALUES :activityName';
    // Create the prepared statement using the acme connection
    $statement = $db->prepare($sql);
    // Bound values
    $statement->bindValue(':activityName', $activityName, PDO::PARAM_STR);
    
    // Insert the data
    $statement->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $statement->rowCount();
    // Close the database interaction
    $statement->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
}