<!DOCTYPE html>
<html>
	<head>
		<title>Showing the tables in Alex's database</title>
		<link rel="stylesheet" href="index.css">
	</head>
<body>
<h2>CS340 MySQL Database Viewer</h2>
<h3>Alex Hoffer, 9/21/2017</h1>

<?php
	include 'connectvarsEECS.php';
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	if (!$conn) {
		die('Could not connect; ' . mysql_error());
	}

	$listOfTables = mysqli_query($conn, "SHOW TABLES");

	if (!$listOfTables) {
		die("Problem with table querying.");
	}

	$numberOfRows = mysqli_num_rows($listOfTables);

	echo "<h4>Choose a table from my database in the dropdown menu to see what's in it.</h4>";
	echo "<form action=\"showTable_Alex.php\" method=\"POST\">";
	echo "<select name=\"myTable\" size=\"1\" Font size=\"+2\">";
	
	for($i=0; $i<$numberOfRows; $i++) {
		$tableName = mysqli_fetch_row($listOfTables);
		echo "<option value='$tableName[0]' >".$tableName[0]."</option>";
	}

	echo "</select>";
	echo "<div><input type=\"submit\" value=\"submit\"></div>";
	echo "</form>";

	mysqli_free_result($listOfTables);
	mysqli_close($conn);

?>
</body>
</html>
