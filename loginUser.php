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

$sql = "SELECT * FROM passport WHERE username ='$_POST[Username]'and password='$_POST[password]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "Login Successful.<br><br>Your Application Details :<br>";
    	echo "First Name :  ".$row["firstName"]. "<br>";
        echo "Last Name :  ".$row["lastName"]. "<br>";
        echo "Gender :  ".$row["gender"]. "<br>";
        echo "User Name :  ".$row["username"]. "<br>";
        echo "DOB :  ".$row["dob"]. "<br>";
        echo "E-Mail :  ".$row["email"]. "<br>";
        echo "Password :  ".$row["password"]. "<br>";
        echo "Mobile :  ".$row["mobile"]. "<br>";
        echo "Status :  ".$row["status"]. "<br>";
    }
} else {
    echo "User Not Found";
}
$conn->close();
?> 
</div>
</body>
</html>