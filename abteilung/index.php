<?php
$servername = "143.93.245.165";
$username = "ampharos";
$password = "LkSzdK";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>