<?php 

$visitDate = date("Y-M-D H:i:s");

$visitBrowser = $_SERVER["USER_AGENT"];

$visitIp = $_SERVER["REMOTE_ADDR"];

$s = "$visitDate,$visitBrowser,$visitIp\n";

file_put_contents("visits.csv", $s, FILE_APPEND);

include("index.html");

?>