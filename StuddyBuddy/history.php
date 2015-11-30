<?php
	include 'core/init.php';
	protect_page();
	include 'includes/overall/header.php';
?>

<center>
	<h1>History</h1>
	<form action="main.php" method="post">
	<?php
		
		$sql = "SELECT * FROM sbgroup";
		$result = mysql_query($sql);
		
		
		while ($row = mysql_fetch_array($result)) {
			
			echo "<strong>" . "Group Name: " . "</strong>";
			echo $row['groupName'] . "<br><br>";
			echo "<strong>" . "Department: " . "</strong>";
			echo $row['department'] . "<br><br>";
			echo "<strong>" . "Class Number: " . "</strong>";
			echo $row['classNum'] . "<br><br>";
			echo "<strong>" . "Max Size: " . "</strong>";
			echo $row['maxSize'] . "<br><br>";
			echo "<strong>" . "Description/Location/Time: " . "</strong>";
			echo $row['description'] . "<br><hr><br>";
			joined($row['groupID']);			
		}
		
	?>
	</form>
<br><br><br>
</center>

<?php
	include 'includes/overall/logout.php';
?>