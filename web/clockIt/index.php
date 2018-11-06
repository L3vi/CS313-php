<?php

// Clock-It Controller

//require_once 'library/dbConnect.php';

//$db = getDatabase();

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

switch ($action) {
    case 'loggedIn':
        // Logic to default to the login page if they're not logged in
        include 'views/home.php';
        break;
    default:
        include 'views/home.php';
        break;
}
