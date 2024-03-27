<?php
// Assuming you have established a database connection earlier in your code
// Make sure to properly sanitize and validate user input before using in SQL queries
include 'header.php';
include "connection.php";

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $phone_number = $_POST['txtPhoneNumber'];
    
    // Construct SQL query for insertion
    $sql = "INSERT INTO test (name, email, phone_number) VALUES ('$name', '$email', '$phone_number')";
    
    // Execute the insertion query
    if (mysqli_query($connection, $sql)) {
        echo "Record added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}

// Construct and execute SELECT query to display data
$select_sql = "SELECT * FROM test";
$result = mysqli_query($connection, $select_sql);

// Check if the query execution was successful
if ($result) {
    // Display results
    while ($row = mysqli_fetch_assoc($result)) {
        echo "$row[name] $row[email] $row[phone_number] <br/>";
    }
    // Free result set
    mysqli_free_result($result);
} else {
    // Handle query execution failure
    echo "Error: " . mysqli_error($connection);
}

// Close database connection
mysqli_close($connection);
?>
