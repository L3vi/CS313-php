<?php

function createTimesheet($timeEntries) {
    $timeSheet = '<ul>';
    foreach ($timeEntries as $entry) {
        $timeSheet .= "<li>$entry[starttime] | $entry[endtime]<br/>$entry[notes]</li>";
    }
    $timeSheet .= '</ul>';

    return $timeSheet;
}
