<?php
	function register_user($register_data) {
		array_walk($register_data, 'array_sanitize');
		$register_data['passWord'] = md5($register_data['passWord']);
		
		$fields = '`' . implode('`, `', array_keys($register_data)) . '`';
		$data = '\'' . implode('\', \'', $register_data) . '\'';
		
		mysql_query("INSERT INTO profile ($fields) VALUES ($data)");
	}

	function user_data($userID) {
		$data = array();
		$userID = (int)$userID;

		$func_num_args = func_num_args();
		$func_get_args = func_get_args();
		
		if ($func_num_args > 1) {
			unset($func_get_args[0]);
			
			$fields = '`' . implode('`, `', $func_get_args) . '`';
			$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM profile WHERE userID = '$userID'"));
			
			return $data;
		}
	}

	function logged_in() {
		return (isset($_SESSION['userID'])) ? true : false;
	}
	
	function user_exists($userName) {
		$userName = sanitize($userName);
		return (mysql_result(mysql_query("SELECT COUNT(userID) FROM profile WHERE userName = '$userName'"), 0) == 1) ? true : false;
	}
	
	function user_id_from_username($userName) {
		$userName = sanitize($userName);
		return mysql_result(mysql_query("SELECT userID FROM profile WHERE userName = '$userName'"), 0, 'userID');
	}
	
	function login($userName, $passWord) {
		$userID = user_id_from_username($userName);
		
		$userName = sanitize($userName);
		$passWord = md5($passWord);

		return (mysql_result(mysql_query("SELECT COUNT(userID) FROM profile WHERE userName = '$userName' AND passWord = '$passWord'"), 0) == 1) ? $userID : false;
	}
?>