<!DOCTYPE html>
<html>
<head>
<title>Successful Registation</title>
</head>
<body>
<?php

	// Connect to database server
	mysql_connect("db4free.net", "bharathyes", "password@123") or die (mysql_error ());

	// Select database
	mysql_select_db("passport") or die(mysql_error());
	
	$strSQL = "INSERT INTO `passport`.`passport` (`firstName`, `lastName`, `gender`, `username`, `dob`, `email`, `password`, `mobile`) VALUES ('maggie', 'grace', 'female', 'maggieGrace', '1983-09-21', 'maggiegrace@outlook.in', 'maggieGrace', '987654321')");

	mysql_query($strSQL) or die (mysql_error());

	// Close the database connection
	mysql_close();
	?>
<a href="index.html"><h1 align="center" id="header" lang="en">Passport of India Web Portal</h1></a>
	<h1>The database is updated!</h1>
</body>
</html>