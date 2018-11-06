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
		$weekNav .= "<li class='nav-item'>\n<a class='nav-link' href='#''>$workDay</a>\n</li>";
	}
	$weekNav .= "</ul>\n</div>";
}

function getTotalTime($timeEntries) {
	foreach ($timeEntries as $entry) {
		$today = getdate($entry[starttime]);
	}
}
?>

<div class='weekNav'>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="#">Monday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Tuesday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Wednesday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Thursday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Friday</a>
                </li>
            </ul>
        </div>