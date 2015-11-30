<?php
	include 'core/init.php';
	protect_page();
	include 'includes/overall/header.php';
?>
<center>
	<p>
	<h1>Edit Profile</h1>
	<font color="red">
	<?php
		if (isset($_GET['success']) && empty($_GET['success'])) {
			echo '<font color="blue">' . 'You have successfully edited your profile!' . '</font>';
		
		?>
		  <?php 
		} else {	
			if (empty($_POST) === false && empty($errors) === true) {
				edit_user($session_user_id, $_POST['userName'], $_POST['passWord']);
				header('Location: edit_profile.php?success');
			}
			else if (empty($errors) === false) {
				echo output_errors($errors);
			}	
		
	?>
			</font>

	<form action="" method="post">
		<p> Change Username:  <input type="text" name="userName" value=<?php echo $user_data['userName'] ?>></p>
		<p> Enter New Password:  <input type="password" name="passWord" value=<?php echo md5($user_data['passWord']) ?>></p>
		<p> Re-Enter New Password:  <input type="password" name="passWord" value=<?php echo md5($user_data['passWord']) ?>></p>
		<br>
		<input type="submit" value="Save Changes"/>
		<br><br>
	</form>
</center>
<?php	
		}
		?>

<?php
	include 'includes/overall/logout.php';
?>