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
		<h3 id="section">&nbsp;&nbsp;&nbsp; Application Status Check Result</h3>

<div id="database">
<?php
$servername = "db4free.net";
$username = "bharathyes";
$password = "password@123";
$dbname = "passport";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username, status FROM passport WHERE username ='$_POST[Username]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Username : " . $row["username"]."<br>"."Status : " . $row["status"]. "<br>";
    }
} else {
    echo "User Not Found";
}
$conn->close();
?> 
</div>
</body>
</html>