<?php
// Return current date from the remote server
$today = date("d/m/Y");
echo $today;
echo "<br>";

$time = time();
echo(date("F d, Y h:i:s", $time));
?>