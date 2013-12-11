<?php

//$dbuser = "chi2008";
$dbuser = "altchior_2013";
$dbpass = "@vant_Gard3";
//$dbname = "chi2008";
$dbname = "altchior_2013";
$dbprefix = "altchi_";

@mysql_connect(localhost, $dbuser, $dbpass) or die("Unable to connect to db!");
mysql_select_db($dbname);

?>
