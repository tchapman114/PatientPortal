
<?php
$servername = "DESKTOP-37KVV44";
$username = "patient";
$password = "password";
$dbname = "patient";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>