<?php
$hostname = "localhost"; // Change to your server address if different
$database = "gwalke01"; // Change to your database name
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP (empty)

// Create connection
$db = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
// Obtain the file sent to the server within the response.
$image = $_FILES['monsterimage']['tmp_name'];
$audio = $_FILES['monsteraudio']['tmp_name'];

// Get the file binary data
$imagedata = addslashes(file_get_contents($image));
$audiodata = addslashes(file_get_contents($audio));

// Prepare the SQL query
$name = mysqli_real_escape_string($db, $_POST['txtname']);
$sql = "INSERT INTO monster (Name, Image, Audio) VALUES ('$name', '$imagedata', '$audiodata')";

// Execute the query
$result = mysqli_query($db, $sql);

// Check if query execution was successful
if ($result) {
    echo "Monster details saved successfully.";
} else {
    echo "Error: " . mysqli_error($db);
}

// Close the database connection
mysqli_close($db);
?>
