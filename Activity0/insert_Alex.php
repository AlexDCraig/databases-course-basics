<!DOCTYPE html>
<!-- Insert into Student table CS 340 -->
<html>
	<head>
		<title>Student Table Viewer</title>
		<link rel="stylesheet" href="index.css">
	</head>
<body>
<h2>Add to Student table</h2>
<?php
// change the value of $dbuser and $dbpass to your username and password
	include 'connectvarsEECS.php'; 
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}

// Escape user inputs for security
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$topic = mysqli_real_escape_string($conn, $_POST['topic']);
 
// attempt insert query 
	$query = "INSERT INTO CS340 (id, name, email, topic) VALUES ('$id', '$name', '$email', '$topic')";
	if(mysqli_query($conn, $query)){
		echo "Record added successfully.";
	} else{
		echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
	}
// close connection
mysqli_close($conn);
?>

</body>
</html>
