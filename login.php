<?php
	include 'core/init.php';

	if (empty($_POST) === false) {
		$userName = $_POST['userName'];
		$passWord = $_POST['passWord'];
		
		if (empty($userName) === true || empty($passWord) === true) {
			$errors[] = 'You need to enter a valid username and password!';
		} else if (user_exists($userName) === false) {
			$errors[] = 'Username is not found in the database!';
		} else {
			if (strlen($passWord) > 32) {
				$errors[] = 'Password too long!';
			}
			
			$login = login($userName, $passWord);
			if ($login === false) {
				$errors[] = "The username/password combination is incorrect!";
			} else {
				$_SESSION['userID'] = $login;
				header('Location: index.php');
				exit();
			}
		}
	} else {
		$errors[] = 'No data receieved';
	}
	
	if (empty($errors) === false) {
		?>
			<h2>Error: </h2>
		<?php
			echo output_errors($errors);
	}
?>

<ul><li>Go Back or <a href="../StuddyBuddy/index.php">Try Again!</a></li></ul>