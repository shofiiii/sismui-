<?php 

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="dbtest";

$konekkui =mysql_connect($dbhost,$dbuser,$dbpass)or die(mysql_error());
mysql_select_db("dbtest");

 ?>