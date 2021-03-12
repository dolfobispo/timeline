<?php

$result = array();

$sent["id"] = "1";
$sent["status"]="sent";

$waiting_to_approval["id"] = "2";
$waiting_to_approval["status"] = "waiting_to_approval";

$approved["id"] ="3";
$approved["status"] = "approved";

$completed["id"] = "4";
$completed["status"] = "completed";

$result[] = $sent;
$result[] = $waiting_to_approval;
$result[] = $approved;
$result[] = $completed;

echo json_encode($result);
?>