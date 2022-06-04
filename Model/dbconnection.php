<?php
$user = "root";
$password = "Weisserhai1";
$database = "book"; // book
$servername = "localhost";
// Create connection
$conn = new mysqli($user, $password, $database, $servername);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

