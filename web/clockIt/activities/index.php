<?php

// Activities Controller

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

switch($action) {
    case 'displayActivities':
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