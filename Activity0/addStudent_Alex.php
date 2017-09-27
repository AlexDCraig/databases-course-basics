<!DOCTYPE html>
<!-- Add Studentto Table CS 340 -->
<html>
	<head>
		<title>Add A Student to Alex's CS340 Table</title>
		<link rel="stylesheet" href="index.css">
	</head>
<body>
<h2> Add a new student record to Alex's CS340 Table</h2>

<form action="insert_Alex.php" method="post">
    <p>
        <label for="id">ID:</label>
        <input type="text" name="id" id="sID">
    </p>
    <p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="Name">
    </p>

    <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="GPA">
    </p>
	   <p>
        <label for="topic">Topic:</label>
        <input type="text" name="topic" id="sizeHS">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>
