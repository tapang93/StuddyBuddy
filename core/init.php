<?php
	session_start();
	
	require 'database/connect.php';
	require 'functions/general.php';
	require 'functions/users.php';
	
	if (logged_in() === true) {
		$session_user_id = $_SESSION['userID'];
		$user_data = user_data($session_user_id, 'userID', 'userName', 'passWord', 'firstName', 'lastName');
	}
	
	
	$errors = array();
?>