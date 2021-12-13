<?php
header('Content-Type: Application/json');

$ue4 = array();
$ue4["success"] = true;
$ue4["message"] = "Realtime";
$ue4["X"] = 4;
$ue4["Y"] = 12;
$ue4["Z"] = 5;

echo json_encode($ue4);
