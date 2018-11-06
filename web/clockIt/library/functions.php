<?php

function createTimesheet($timeEntries) {
	$timeSheet = "<table class='table table-striped table-dark table-hover'>";
	$timeSheet .= "\n<thead>\n<tr>";
	$timeSheet .= "<th scope='col'>Start Time</th>\n<th scope='col'>End Time</th>\n<th scope='col'>Total Time</th>\n<th>scope='col'>Notes</th>";
	$timeSheet .= "\n</tr>\n</thead>\n<tbody>";
	foreach ($timeEntries as $entry) {
		$timeSheet .= "<tr>\n<td>$entry[starttime]</td>\n<td>$entry[endtime]</td>\n<td></td>\n<td>$entry[notes]</td></tr>";
	}
	$timeSheet .= "\n</tbody>\n</table>";

	return $timeSheet;
}

?>