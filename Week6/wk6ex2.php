<?php include 'header.php'; ?>
<?php include 'connection.php'; ?>

<html>
<body>

<?php
// Construct and execute SELECT query to fetch data
$select_sql = "SELECT * FROM test";
$result = mysqli_query($connection, $select_sql);

// Check if query execution was successful
if ($result) {
    // Fetch and display data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<a href='wk6ex2action.php?id={$row['name']}'>{$row['name']}</a><br/>";
    }
} else {
    // Handle query execution failure
    echo "Error: " . mysqli_error($connection);
}

// Close connection
mysqli_close($connection);
?>

</body>
</html>
