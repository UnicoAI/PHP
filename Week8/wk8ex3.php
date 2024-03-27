<?php
include "header.php";
// Generate lottery numbers for today's date
$lottodate = date("Ymd");
echo "The lottery numbers for $lottodate are:<br>";

// Generate 6 random numbers
$numbers = array();
for ($n = 0; $n < 6; $n++) {
    $numbers[$n] = rand(1, 49);
    echo "$numbers[$n]<br>";
}

include "connection.php";
// Insert lottery numbers into the database
$sql = "INSERT INTO lotto (lottodate, number1, number2, number3, number4, number5, number6) VALUES ('$lottodate', $numbers[0], $numbers[1], $numbers[2], $numbers[3], $numbers[4], $numbers[5])";

if ($connection->query($sql) === TRUE) {
    echo "<br>This week's numbers have been saved.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$connection->close();
?>
