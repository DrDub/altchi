<?php

$dbuser = "altchior_2013";
$dbpass = "";
$dbname = "altchior_2013";
$dbprefix = "altchi_";

@mysql_connect(localhost, $dbuser, $dbpass) or die("Unable to connect to db!");
mysql_select_db($dbname);

?>
