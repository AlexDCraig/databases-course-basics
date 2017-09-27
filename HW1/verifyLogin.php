<!DOCTYPE html>

<?php
// change the value of $dbuser and $dbpass to your username and password
	include 'connectvarsEECS.php'; 
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}

	// Sanitize inputs.
	$username = $_POST['username'];
	$username = mysqli_real_escape_string($conn, $username);
	$password = $_POST['password'];
	$password = mysqli_real_escape_string($conn, $password);

	if ($username == NULL)
		exit("No username provided");

	if ($password == NULL)
		exit("No password provided");

	$query = "SELECT * FROM Users WHERE username='$username'";
	$result = mysqli_query($conn, $query);


	if ($result && mysqli_num_rows($result)>0)
	{
		// Grab row.
		while ($row = mysqli_fetch_assoc($result))
		{
			// Loop thru each name/value pair.
			foreach ($row as $cname => $cvalue) 
			{
				if (strcmp($cname, "password") == 0)
				{
					$passWithSalt = $cvalue;
				}

				else if (strcmp($cname, "salt") == 0)
				{
					$salt = $cvalue;
				}
			}
		}

		$userPassWithSalt = $password . $salt;
		
		if (strcmp($userPassWithSalt, $passWithSalt) == 0)
			echo "Successfully logged in.";

		else
			echo "Username/password combination not found.";
	} 

	else
		echo "Username/password combination not found.";
	
	mysqli_free_result($result);
	mysqli_close($conn);
?>
