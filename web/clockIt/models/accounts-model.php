<?php

// Acounts Model

function loginUser($userEmail, $userPassword) {
    $db = getDatabase();
    // The SQL statement
    $sql = 'INSERT INTO users (email, password)
     VALUES (:email, :password)';
    // Create the prepared statement using the acme connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':email', $userEmail, PDO::PARAM_STR);
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

function registerUser($userEmail, $userPassword) {
    // Create a connection object using the acme connection function
    $db = getDatabase();
    // The SQL statement
    $sql = 'INSERT INTO users (email, password)
     VALUES (:email, :password)';
    // Create the prepared statement using the acme connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':email', $userEmail, PDO::PARAM_STR);
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