<!DOCTYPE html>
<html>
<style>
table.lamp {
   display: block;
    margin-left: auto;
    margin-right: auto 
}

</style>
	<head>
		<title>StuddyBuddy</title>
		<script type="text/javascript">
			function changes() {

			}
			
			function logout() {

			}
		</script>
	</head>
	<body>
			<img align="left" src="" alt="profilePic" />
			<font size="5" align="left">Jimmy</font>
			<br>
			<font size="5" align="left">Jimson</font>
			<br>
			<center>
			<a href="../StuddyBuddy/main.php">		<!--location might be different in order for this to work-->
			<div style="text-align: center"><img src="https://www.googledrive.com/host/0B0n7HO8qgKkxR21SOUx4MFpKMW8"  alt="StuddyBuddy"  /></div>
  			</a>
			<br>
			<hr>
			<nav>
			<a href="../StuddyBuddy/main.php"><font size="5">Main</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			<a href="../StuddyBuddy/edit_profile.php"><font size="5">Edit Profile</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          
			<a href="../StuddyBuddy/index.php"><font size="5">Manage Groups</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
			<a href="../StuddyBuddy/index.php"><font size="5">View History</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
			</nav>   
			<hr>
			<p> Change Profile Picture: <img src="" alt="profilePic" /></p>
			<p> Change Username:  <input type="text" name="username" id="username"></p>
			<p> Change Password:  <input type="password" name="password1" id="password1"></p>
			<p> Re-Enter Password:  <input type="password" name="password2" id="password2"></p>
			<br>
			<input type="button" name="changes" value="Save Changes" onclick="changes()"/>
			<br><br><br><br><br>
			<a href="../StuddyBuddy/index.php"><input type="button" name="logout" value="Logout" onclick="logout()"/></a>		<!--location might be different in order for this to work-->
	</center></body>
</html>
