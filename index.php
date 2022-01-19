<?php 

$visitDate = date("Y-M-d");

$visitTime = date("H:i:s");

$visitIp = $_SERVER["REMOTE_ADDR"];

$s = "$visitDate,$visitTime,$visitIp\n";

file_put_contents("visits.csv", $s, FILE_APPEND);

include("task_list.html");

?>