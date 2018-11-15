<?php

function createTimesheet($timeEntries) {
	$timeSheet = "<table class='table table-striped table-dark table-hover'>";
	$timeSheet .= "\n<thead>\n<tr>";
	$timeSheet .= "<th scope='col'>Start Time</th>\n<th scope='col'>End Time</th>\n<th scope='col'>Total Time</th>\n<th scope='col'>Notes</th>";
	$timeSheet .= "\n</tr>\n</thead>\n<tbody>";
	foreach ($timeEntries as $entry) {
		$timeSheet .= "<tr>\n<td>$entry[starttime]</td>\n<td>$entry[endtime]</td>\n<td></td>\n<td>$entry[notes]</td></tr>";
	}
	$timeSheet .= "\n</tbody>\n</table>";

	return $timeSheet;
}

function createWeekNav($workWeek) {
	$weekNav = "<div class='weekNav'>\n<ul class='nav nav-tabs'>";
	foreach ($workWeek as $workDay) {
		$weekNav .= "<li class='nav-item'>\n<a class='nav-link' href='#'>$workDay</a>\n</li>";
	}
	$weekNav .= "</ul>\n</div>";

	return $weekNav;
}

function getTotalTime($timeEntries) {
	foreach ($timeEntries as $entry) {
		$today = getdate($entry[starttime]);
	}
}

function createActivitiesList($activities) {
	// $activitiesList = '<ul>';
	// foreach ($activities as $activity) {
	// 	$activitiesList .= "<li><a href='../index.php?activityName=" . urlencode($activity['name']) . "&activityId=" . urlencode($activity['id']) . "'>" . ucfirst($activity[name]) . "</a></li>";
	// }
	// $activitiesList .= '</ul>';

	$activitiesList = '<form method="post">';
	foreach ($activities as $activity) {
		$activitiesList .= "<input type='submit' name='activityName' value='" . urlencode($activity) . "'><br/>";
	};
	$activitiesList .= "<input type='hidden' name='action' value='setActivity'>";
	$activitiesList .= '</form>';
	return $activitiesList;
}