<?php
// Database connection settings
$servername = "localhost";
$username = "root";      // default XAMPP username
$password = "";          // default password is empty
$dbname = "webdev_db";   // we'll create this database soon

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Optional success message (you can remove this later)
echo "✅ Database connected successfully";
?>