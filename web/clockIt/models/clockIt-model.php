<?php

// Clock-It Model

function startTimeEntry() {
    
}

function endTimeEntry() {
    
}

// Gets list of projects
function getTimeEntries($activity_id) {

    $database = getDatabase();
    $sql = 'SELECT starttime, endtime, notes FROM timeentries WHERE activity_id=:activity_id';
    $statement = $database->prepare($sql);
    $statement->bindValue(':activity_id', $activity_id, PDO::PARAM_INT);
    $statement->execute();
    $timeEntries = $statement->fetchAll();
    $statement->closeCursor();
    return $timeEntries;
}
