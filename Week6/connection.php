<?php
$server = "localhost"; // Change to your server address if different
$database = "gwalke01"; // Change to your database name
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP (empty)

// Create connection
$connection = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully";

// Perform database operations here

// Close connection
//mysqli_close($connection);
?>

