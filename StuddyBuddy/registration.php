<?php
	include 'core/init.php';
	logged_in_redirect()
?>
	<?php
	if (empty($_POST) === false) {
		$required_fields = array('firstName', 'userName', 'passWord', 'passWord_again');
		foreach ($_POST as $key=>$value) {
			if (empty($value) && in_array($key, $required_fields) === true) {
				$errors[] = '*Fields marked with an asterisk are required';
				break 1;
			}
		}
		
		if(empty($errors) === true) {
			if (user_exists($_POST['userName']) === true) {
				$errors[] = '*Sorry, the username \'' . $_POST['userName'] . '\' is already taken!';
			}
			if (preg_match("/\\s/", $_POST['userName']) == true) {
				$errors[] = '*Your username may not contain a space!';
			}
			if (strlen($_POST['passWord']) < 6) {
				$errors[] = '*Your password must be atleast 6 characters long!';
			}
			if ($_POST['passWord'] !== $_POST['passWord_again']) {
				$errors[] = '*Your passwords do not match!';
			}
		}
	}
	?>
	<body>
	<center>
	<a href="../StuddyBuddy/index.php">		<!--location might be different in order for this to work-->
	<img src="https://www.googledrive.com/host/0B0n7HO8qgKkxR21SOUx4MFpKMW8" alt="StuddyBuddy" />
	</a>
	<p>
	<h1>Registration</h1>
	<font color="red">
	<?php
		if (isset($_GET['success']) && empty($_GET['success'])) {
			echo '<font color="blue">' . 'You have been registered successfully!' . '</font>';
		
		?>
		<ul><font color="blue"><a href="index.php">Click Here</a> to log in!</font></ul>
		  <?php 
		} else {	
			if (empty($_POST) === false && empty($errors) === true) {
				$register_data = array(
					'userName'  => $_POST['userName'],
					'passWord'  => $_POST['passWord'],
					'firstName' => $_POST['firstName'],
					'lastName'  => $_POST['lastName']
				);
				register_user($register_data);
				header('Location: registration.php?success');
				exit();
			}
			else if (empty($errors) === false) {
				echo output_errors($errors);
			}	
		
	?>
			</font>
			<form action="" method="post">
			<p> First Name*: <input type="text" name="firstName"></p>
			<p> Last Name: <input type="text" name="lastName"></p>
			<p> Username*:  <input type="text" name="userName"><p>
			<p> Password*:  <input type="password" name="passWord"></p>
			<p> Re-Enter Password*:  <input type="password" name="passWord_again"></p>
			
	
			
			<p>
			<input type="submit" value="Register"/>
			</form>
		<?php	
		}
		?>
	
	
	
  </center>
  </body>