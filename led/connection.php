<?php
$servername = "localhost";
$username = "id18326879_iotmaven";
$password = "7438879938@aA";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>