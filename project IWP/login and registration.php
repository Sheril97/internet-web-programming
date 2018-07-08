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
$email=$_POST["email"];

$sql = "INSERT INTO login VALUES ('$Username','$password', 'email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>