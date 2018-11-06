<?php

// Clock-It Controller

require_once('library/dbConnect.php');
require_once('models/clockIt-model.php');
require_once('library/functions.php');

//$activity_id = filter_input(INPUT_POST, 'activity');
//if ($activity_id == NULL) {
//    $activity_id = 0;
//}
$activity_id = 1;

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

$timeEntries = getTimeEntries($activity_id);
$timeSheet = createTimesheet($timeEntries);

switch ($action) {
    case 'loggedIn':
        // Logic to default to the login page if they're not logged in
        include 'views/home.php';
        break;
    default:
        include 'views/home.php';
        break;
}