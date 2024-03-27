<?php
$server = "localhost"; // Change to your server address if different
$database = "gwalke01"; // Change to your database name
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP (empty)

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

header("Content-type: image/jpeg");

$id = $_GET['id'];
$sql = "SELECT image FROM monster WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo $row["image"];
} else {
    echo "Image not found.";
}

mysqli_close($conn);
?>
