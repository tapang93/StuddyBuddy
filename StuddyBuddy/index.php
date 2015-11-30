<?php
	include 'core/init.php';
	if (logged_in() === false) {
		include 'includes/widgets/login.php';
	} else {
		header('Location: main.php');
	}
?>