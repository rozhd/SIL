<?php 

$date = date("Y-M-d");

$time = date("H:i:s");

$ip = $_SERVER["REMOTE_ADDR"];

$goal = $_POST["goal"];

$s = "$date,$time,$ip,$goal\n";

file_put_contents("goals.csv", $s, FILE_APPEND);



?>