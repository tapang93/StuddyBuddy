<?php
	session_start();
	
	require 'database/connect.php';
	require 'functions/general.php';
	require 'functions/users.php';
	
	if (logged_in() === true) {
		$session_user_id = $_SESSION['userID'];
		//$session_group_id = $_SESSION['groupID'];
		$user_data = user_data($session_user_id, 'userID', 'userName', 'passWord', 'firstName', 'lastName');
		$group_data = group_data($session_user_id, 'groupID', 'groupName', 'department', 'classNum', 'maxSize', 'description', 'currentSize', 'joined');
	}
	
	
	$errors = array();
?>