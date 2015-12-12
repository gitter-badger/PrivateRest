<?php

$dbhost = "%%host%%";
$dbuser = "%%username%%";
$dbname = "%%database%%";
$dbpass = "%%password%%";

mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());

?>