<?php
// version 1.1
$database_tds=""; // change to your own
$username_tds=""; // change to your own
$password_tds=""; // change to your own

$link = mysql_connect("localhost",$username_tds,$password_tds) or die ("Unable to connect to SQL server");
mysql_select_db($database_tds,$link) or die ("Unable to select database");

?>