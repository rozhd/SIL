<?php 

$date = date("Y-M-D H:i:s");

$browser = '"'.$_SERVER["HTTP_USER_AGENT"].'"';

$ip = $_SERVER["REMOTE_ADDR"];

$s = "$date,$browser,$ip\n";

file_put_contents("goals.csv", $s, FILE_APPEND);



?>