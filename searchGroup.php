<?php

$host = "localhost";
$username = "jwagner";
$password = "studdybuddy";
$database = "jwagner";
$table = "sbGroup";
$array = "user_groups"

echo "hi";

mysql_connect("127.0.0.1","jwagner","studdybuddy") or die(mysql_error());

mysql_select_db($database) or die(mysql_error());

//
//grab the next group id for storage into the sbGroup
//
$gid = mysql_query("SELECT gid from trackGID");


//
//Adds the group into the sbGroup table with values from the form in gFrom.html
//
mysql_query("INSERT into $table(groupID, groupName,currentSize, maxSize, department, classNum, adminID, privacyFlag) values ($gid,$_POST['gname'],1,$_POST['msize'],$_POST['dpmt'],$_POST['cnum'],$session_user_id,$_POST['priv'])");
echo "Group Added!";

//
//Adds group id to the users array of groups
//
mysql_query("INSERT into $array(profile_userID, sbGroup_groupID) values($session_user_id, $gid)")

//
//add one to group id counter
//
mysql_query("UPDATE 'trackGID' SET gid = gid + 1";
?>