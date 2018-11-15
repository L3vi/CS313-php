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
        include '../views/display-activities.php';
        break;
    case 'setActivity':
        print_r($_POST);
        echo "<br/>";
        $_SESSION['activity_name'] = filter_input(INPUT_POST, 'activityName', FILTER_SANITIZE_STRING);
        $_SESSION['activity_id'] = filter_input(INPUT_POST, 'activityId', FILTER_SANITIZE_STRING);
        echo $_POST['activityName'];
        echo $_POST['activityId'];
        print_r(array_search($_POST['activityName'], $_POST['activityId']));
        echo "<br/>";
        print_r($_SESSION);
        break;
    case 'createActivityView':
        include '../views/create-activity.php';
        break;
    case 'createActivity':
        $activityName = filter_input(INPUT_POST, 'activityName', FILTER_SANITIZE_STRING);
        $createOutcome = createActivity($activityName);
        if ($createOutcome) {
            // Assuming it successfully created, send them back to the activities page
            header('Location: ../activities');
        } else {
            echo "Please try creating the activity again.";
        }
        
        break;
    default:
        include '../views/display-activities.php';
        break;
}