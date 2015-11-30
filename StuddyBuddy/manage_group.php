<?php
	include 'core/init.php';
	protect_page();
	include 'includes/overall/header.php';
?>

<center>
<?php
	if (empty($_POST) === false) {
		$required_fields = array('groupName', 'department', 'classNum');
		foreach ($_POST as $key=>$value) {
			if (empty($value) && in_array($key, $required_fields) === true) {
				$errors[] = '*Fields marked with an asterisk are required';
				break 1;
			}
		}
		
		if(empty($errors) === true) {
			if (strlen($_POST['description']) > 140) {
				$errors[] = 'Description may only be 140 characters long!';
			}
			if (strlen($_POST['groupName']) > 20) {
				$errors[] = 'Group name may only be 20 characters long!';
			}
		}
	}
	?>
	<body>
	<center>
	
	<p>
	<h1>Create a Group</h1>
	<font color="red">
	<?php
		if (isset($_GET['success']) && empty($_GET['success'])) {
			echo '<font color="blue">' . 'Group has been made successfully!' . '</font>';
			
		?>
		  <?php 
		} else {	
			if (empty($_POST) === false && empty($errors) === true) {
				$register_group_data = array(
					'groupName'  => $_POST['groupName'],
					'department'  => $_POST['department'],
					'classNum' => $_POST['classNum'],
					'maxSize'  => $_POST['maxSize'],
					'description'  => $_POST['description']
				);
				create_group($register_group_data);
				header('Location: manage_group.php?success');
				exit();
			}
			else if (empty($errors) === false) {
				echo output_errors($errors);
			}	
		
	?>
			</font>
			<form action="" method="post">
			<p> Group Name*: <input type="text" name="groupName"></p>
			<p> Department*: <input type="text" name="department"></p>
			<p> Class Number*:  <input type="text" name="classNum"><p>
			<p> Max Size:  <input type="text" name="maxSize"></p>
			<p> Description/Location/Time:  <input type="text" name="description"></p>
			
	
			
			<p>
			<input type="submit" value="Create Group"/>
			</form>
		<?php	
		}
		?>
	
	
	
  </center>
  </body>
<br><br><br>
</center>

<?php
	include 'includes/overall/logout.php';
?>