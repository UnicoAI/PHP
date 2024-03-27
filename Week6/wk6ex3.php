<?php
include "header.php";
include "connection.php";
// Assuming you have established a database connection earlier in your code

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['txtname'];
    $telno = $_POST['txttelno'];
    $email = $_POST['txtemail'];

    // Construct SQL query for update
    $sql = "UPDATE test SET phone_number='$telno', email='$email' WHERE name='$name'";
    
    // Execute update query
    if (mysqli_query($connection, $sql)) {
        echo "Record updated successfully!";
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}
?>

<html>
<body>
<form action="" method="post">
    Name:
    <input type="text" style="" name="txtname" STYLE="color:black" value="<?php echo isset($row['name']) ? $row['name'] : ''; ?>" readonly /><br/>
    Phone number:
    <input type="text" name="txttelno" value="<?php echo isset($row['phone_number']) ? $row['phone_number'] : ''; ?>" /><br/>
    Email:
    <input type="text"  name="txtemail" value="<?php echo isset($row['email']) ? $row['email'] : ''; ?>" /><br/>
    <input type="submit" class="btn btn-primary" name="btnsubmit" value="Save" />
    
<a href="delete_record.php?id=<?php echo isset($row['name']) ? $row['name'] : ''; ?>" class="btn btn-danger">Delete Record</a>

</form>
<a href="wk6ex1action.php?id=<?php echo isset($row['name']) ? $row['name'] : ''; ?>" class="btn btn-secondary">View All Records Details</a>
</body>
</html>
