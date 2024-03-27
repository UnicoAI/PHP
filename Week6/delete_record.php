<?php
include "connection.php"; // Corrected include statement

// Check if 'id' parameter is set in the GET request
if (isset($_GET['id'])) {
    // Retrieve 'id' from GET request
    $id = $_GET['id'];
    
    // Construct SQL query for deletion
    $sql = "DELETE FROM test WHERE ID='$id'"; // Assuming 'ID' is the primary key
    
    // Execute deletion query
    if (mysqli_query($connection, $sql)) {
        echo "Record deleted successfully!";
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
} else {
    echo "No ID parameter provided.";
}
?>
