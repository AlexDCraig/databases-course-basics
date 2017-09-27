<!DOCTYPE html>
<!-- Add Studentto Table CS 340 -->
<html>
	<head>
		<title>Add Student to Table</title>
		<link rel="stylesheet" href="index.css">
	</head>
<body>
<h2> Add new student record to Student Table</h2>

<form action="insert.php" method="post">
    <p>
        <label for="sID">Student ID:</label>
        <input type="text" name="sID" id="sID">
    </p>
    <p>
        <label for="Name">Name:</label>
        <input type="text" name="sName" id="Name">
    </p>

    <p>
        <label for="GPA">GPA:</label>
        <input type="text" name="GPA" id="GPA">
    </p>
	   <p>
        <label for="sizHS">High School Size:</label>
        <input type="text" name="sizeHS" id="sizeHS">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>
