<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Passport Application</title>
	</head>
	<body>
		<a href="index.html"><div align="center" id="header"><h1>Web Portal of Passport Seva, India</h1></div></a>
		<div id="nav">
			<a href="register.html"><div id="navItem">New User</div></a>
			<a href="login.html"><div id="navItem">Login</div></a>
			<a href="check.html"><div id="navItem">Check Status</div></a>
		</div>
		
<?php

	define('DB_NAME', 'passport');
define('DB_USER', 'bharathyes');
define('DB_PASS', 'password@123');
define('DB_HOST', 'db4free.net');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS);

if (!$link) {
    dir('There was a problem when trying to connect to the host. Please contact Tech Support. Error: ' . mysql_error());    
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$link) {
    dir('There was a problem when trying to connect to the database. Please contact Tech Support. Error: ' . mysql_error());    
}

$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$gender = $_POST['gender'];
$Username = $_POST['Username'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];

$sql = "INSERT INTO `passport`.`passport` (`firstName`, `lastName`, `gender`, `username`, `dob`, `email`, `password`, `mobile`) VALUES ('$FirstName', '$LastName', '$gender', '$Username', '$dob', '$email', '$password', '$mobile')";

if (!mysql_query($sql)) {
    die('Error: ' . mysql_error()); 
}

?>

<h3 id="section">&nbsp;&nbsp;&nbsp; Registration Successful.</h3>

</body>
</html>