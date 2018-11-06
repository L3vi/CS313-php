<?php

// Activities Controller

require_once('../models/activities-model.php');
require_once('../library/dbConnect.php');
require_once('../library/functions.php');
session_start();

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}


$userId = $_SESSION['userId'];

$activities = getActivities($userId);
$activitiesList = createActivitiesList($activities);

switch($action) {
    case 'displayActivities':
        echo $userId;
        print_r($activities);
        include '../views/display-activities.php';
        break;
    case 'createActivityView':
        include '../views/create-activity.php';
        break;
    case 'createActivity':
        if (true) {
            // Assuming it successfully created, send them back to the activities page
            include '../views/display-activities.php';
        } else {
            echo "Please try creating the activity again.";
        }
        
        break;
    default:
        break;
}