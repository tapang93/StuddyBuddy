<?php

$host = "localhost";
$username = "jwagner";
$password = "studdybuddy";
$database = "jwagner";
$table = "sbGroup";




mysql_connect($host,$username,$password) or die(mysql_error());

mysql_select_db($database) or die(mysql_error());


//
//the search for all 
//
$result = mysql_query("SELECT groupName, department, classNum) from sbGroup where (groupName = $_POST['gname']) or (department = $_POST['dpmt']) or (classNum = $_POST['cnum'])");

echo $result;


?>