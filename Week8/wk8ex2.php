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
include "header.php";
// SQL query to retrieve all records from the lotto table
$sql = "SELECT * FROM lotto";

// Execute the query
$result = $db->query($sql);

// Check if there are any records
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Week: " . $row["wk"] . "<br>";
        echo "Lottery Date: " . $row["lottodate"] . "<br>";
        echo "Numbers: " . $row["number1"] . ", " . $row["number2"] . ", " . $row["number3"] . ", " . $row["number4"] . ", " . $row["number5"] . ", " . $row["number6"] . "<br><br>";
    }
} else {
    echo "0 results";
}

// Close the connection
$db->close();
?>