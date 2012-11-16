<?php

$host = "mysql3.000webhost.com";
$user = "a2554300_cris";
$pw = "Finisterra01";
$db = "a2554300_Sia";

$con=mysql_connect($host,$user,$pw)or die ("problemas al conectar");
   mysql_select_db($db,$con)or die ("problemas al conectar"); 
?>
