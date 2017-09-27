<!DOCTYPE html>
<html>
	<head>
		<title>Log in </title>
		<link rel="stylesheet" href="index.css">
	</head>
<body>
<h2>User Log In Page</h2>
<h3>Alex Hoffer, 9/26/2017</h3>

<form method="post" action="verifyLogin.php">
	<input type="text" name="username" />Username</br/>
	<input type="password" name="password" />Password</br/>
	<input type="submit" value="Submit">
</form>	
</div>

<?php
	include 'connectvarsEECS.php';
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	if (!$conn) {
		die('Could not connect; ' . mysql_error());
	}

	mysqli_close($conn);

?>
</body>
</html>
