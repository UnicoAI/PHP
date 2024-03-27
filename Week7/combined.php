<?php
$server = "localhost"; // Change to your server address if different
$database = "gwalke01"; // Change to your database name
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP (empty)

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
include "header.php";
function displayMonsters($conn, $result)
{
    echo "<table align='center' border='1'>";
    echo "<tr><th width='200' align='left'>ID</th><th width='200' align='left'>Name</th><th>Audio</th><th>Image</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td><a href='getwav.php?id=" . $row['id'] . "'>Click to play</a></td>";
        echo "<td><img src='getjpg.php?id=" . $row['id'] . "' height='100' width='100'></td>";
        echo "</tr>";
    }

    echo "</table>";
}

$sql = "SELECT id, name FROM monster";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    displayMonsters($conn, $result);
} else {
    echo "No records found.";
}

mysqli_close($conn);
?>
