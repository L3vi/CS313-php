<?php

// Acounts Model

function registerUser($userEmail, $userPassword) {
    // Create a connection object using the acme connection function
    $db = getDatabase();
    // The SQL statement
    $sql = 'INSERT INTO users (name, password)
     VALUES (:username, :password)';
    // Create the prepared statement using the acme connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':username', $userEmail, PDO::PARAM_STR);
    $stmt->bindValue(':password', $userPassword, PDO::PARAM_STR);
    
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
}