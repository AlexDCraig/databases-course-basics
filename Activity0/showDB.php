<!DOCTYPE html>
<!-- showDB.php CS 340-->
<html>
	<head>
		<title>MySQL DB Viewer</title>
		<link rel="stylesheet" href="index.css">
	</head>
<body>
<h2>CS 340 MySQL database viewer</h2>
Your name & date

<?php
// include global connection variables
	include 'connectvarsEECS.php'; 
	
// establish connection	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die('Could not connect: ' . mysqli_error());
	}
	
// Query the database for names of all tables	
	$result = mysqli_query($conn, "SHOW TABLES");
	if (!$result) {
		die("Query to show fields from table failed");
	}
	$num_row = mysqli_num_rows($result);
	
// 	Create a pulldown menu with names of all Tables in a form
//   the action is to call showTable.php to diplay the contens of the table

	echo "<h3>Choose one table:<h3>"; 
	echo "<form action=\"showTable.php\" method=\"POST\">";
	echo "<select name=\"myTable\" size=\"1\" Font size=\"+2\">";
	
	// Select a database table to display
	for($i=0; $i<$num_row; $i++) {
		$tablename=mysqli_fetch_row($result);
		echo "<option value='$tablename[0]' >".$tablename[0]."</option>";
	}
	
	echo "</select>";
	echo "<div><input type=\"submit\" value=\"submit\"></div>";
	echo "</form>";
		
	mysqli_free_result($result);
	mysqli_close($conn);
	
?>
</body>

</html>

	
