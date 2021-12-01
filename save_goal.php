<?php 

$date = date("Y-M-D H:i:s");

$browser = '"'.$_SERVER["HTTP_USER_AGENT"].'"';

$ip = $_SERVER["REMOTE_ADDR"];

$goal = $_POST["goal"];

$s = "$date,$browser,$ip,$goal\n";

file_put_contents("goals.csv", $s, FILE_APPEND);



?>