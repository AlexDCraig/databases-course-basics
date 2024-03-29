﻿<!DOCTYPE html>
<!-- showTable.php CS 340 -->
<html>
	<head>
		<title>MySQL Table Viewer</title>
	</head>
<body>

<?php
// change the value of $dbuser and $dbpass to your username and password
	include 'connectvarsEECS.php'; 
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}
// Retrieve name of table selected	
	$table = $_POST['myTable'];
	$query = "SELECT * FROM $table ";

	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("Query to show fields from table failed");
	}
// get number of columns in table	
	$fields_num = mysqli_num_fields($result);
	echo "<h1>Table: $table </h1>";
	echo "<table border='1'><tr>";
	
// printing table headers
	for($i=0; $i<$fields_num; $i++) {	
		$field = mysqli_fetch_field($result);	
		echo "<td><b>$field->name</b></td>";
	}
	echo "</tr>\n";
	while($row = mysqli_fetch_row($result)) {	
		echo "<tr>";	
		// $row is array... foreach( .. ) puts every element
		// of $row to $cell variable	
		foreach($row as $cell)		
			echo "<td>$cell</td>";	
		echo "</tr>\n";
	}

	if ($table == "CS340") {
		echo '<a href="addStudent_Alex.php">Click here to add a student to the CS340 table.</a><br><br>';
	}

	mysqli_free_result($result);
	mysqli_close($conn);
?>
</body>

</html>

	
