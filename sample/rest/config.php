<?php

$dbhost = "localhost";
$dbuser = "furesoftsql5";
$dbname = "furesoftsql5";
$dbpass = "123456789cC";

mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());

?>