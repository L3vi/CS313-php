<?php

// Clock-It Controller

require_once('library/dbConnect.php');
require_once('models/clockIt-model.php');
require_once('library/functions.php');
session_start();

//$activity_id = filter_input(INPUT_POST, 'activity');
//if ($activity_id == NULL) {
//    $activity_id = 0;
//}

// Bad naming, but the right variables are being pulled from the activities page

$activity_name = filter_input(INPUT_POST, 'activityName');
if ($activity_name == NULL) {
    $activity_name = filter_input(INPUT_GET, 'activityName');
}

$activity_id = filter_input(INPUT_POST, 'activityId');
if ($activity_id == NULL) {
    $activity_id = filter_input(INPUT_GET, 'activityId');
    $_SESSION['activity_id'] = $activity_id;
}

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

// Create variable timeEntries from database
$timeEntries = getTimeEntries($activity_id);
// Create timesheet (html table) with timeEntries
$timeSheet = createTimesheet($timeEntries);

$workWeek = [
	"Monday",
	"Tuesday",
	"Wednesday",
	"Thursday",
	"Friday"
];
// if screen is smaller use this array instead
$workWeekSmall = ["M", "Tu", "W", "Th", "F"];

// Create week navigation based on arrays above. Will be dynamic in future according to user settings.
// Will have the ability to show different days of the week in the future.
$weekNav = createWeekNav($workWeek);
// $totalTime = getTotalTime($timeEntries);

switch ($action) {
    case 'clockIn':

        if(isset($_SESSION['activity_id'])) {
            $successfulClockIn = startTimeEntry($_SESSION['activity_id']);
        } else {
            echo $_SESSION['activity_id'];
            // header('Location: activities');
        }
        if ($successfulClockIn) {
            $message = "<p>Successfully clocked in!</p>";
            include 'views/home.php';
            exit;
        } else {
            $message = "<p>Did not successfully clock in...</p>";
            include 'views/home.php';
            exit;
        }
        break;
    case 'clockOut':
        break;
    default:
        if(isset($_SESSION['userId'])) {
            if(isset($_SESSION['activity_id'])) {
                include 'views/home.php';
            } else {
                header('Location: activities');
            }
        } else {
            header('Location: accounts');
        }
        break;
}