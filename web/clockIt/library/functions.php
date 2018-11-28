<?php

function createTimesheet($timeEntries) {
	$timeSheet = "<table class='table table-striped table-dark table-hover'>";
	$timeSheet .= "\n<thead>\n<tr>";
	$timeSheet .= "<th scope='col'>Start Time</th>\n<th scope='col'>End Time</th>\n<th scope='col'>Total Time</th>\n<th scope='col'>Notes</th>";
	$timeSheet .= "\n</tr>\n</thead>\n<tbody>";
	foreach ($timeEntries as $entry) {
		// Creates starting time
		$timeSheet .= "<tr>\n<td>" . date('M d, Y', strtotime($entry['starttime'])) . ' ' . date('h:i', strtotime($entry['starttime'])) . "</td>\n";
		// Creates ending time
		$endDate = '';
		if (isset($entry['endtime'])) {
			$endDate = date('M d, Y', strtotime($entry['endtime'])) . ' ' . date('h:i', strtotime($entry['endtime']));
		}
		$timeSheet .= "<td>$endDate</td>\n<td></td>\n<td>$entry[notes]</td></tr>";
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
	$activitiesList = '';
	foreach ($activities as $activity) {
		$activitiesList .= '<form method="post">';
		$activitiesList .= "<input type='submit' name='activityName' value='" . ucfirst($activity['name']) . "'>";
		$activitiesList .= "<input type='hidden' name='activityId' value='" . urlencode($activity['id']) . "'><br/>";
		$activitiesList .= "<input type='hidden' name='action' value='setActivity'>";
		$activitiesList .= '</form>';
	};
	
	
	return $activitiesList;
}