<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "calender";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$Username=$_POST["Username"];
$password=$_POST["password"];

$sql = "SELECT * FROM REGISTRATION WHERE Username='$Username' and password='$password'";

if ($conn->query($sql) === TRUE) {
    echo "WELCOME $Username";
}else{
	echo"Create your account first";
}

$conn->close();
?>