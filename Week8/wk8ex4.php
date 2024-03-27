<?php
include "connection.php";
include "header.php";


if (isset($_POST['selweek'])) {
    $selected_week = $_POST['selweek'];
    $sql = "SELECT * FROM lotto WHERE wk = $selected_week";
    $result = mysqli_query($connection, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "Number 1 is {$row['number1']}<br/>";
        echo "Number 2 is {$row['number2']}<br/>";
        echo "Number 3 is {$row['number3']}<br/>";
        echo "Number 4 is {$row['number4']}<br/>";
        echo "Number 5 is {$row['number5']}<br/>";
        echo "Number 6 is {$row['number6']}<br/>";
    } else {
        echo "No records found for the selected week.";
    }
} else {
    $sql = "SELECT * FROM lotto";
    $result = mysqli_query($connection, $sql);

    echo "<form action='" . htmlspecialchars($_SERVER['PHP_SELF']) . "' method='post'>";
    echo "<br/>Select the lottery week ";
    echo "<select class='btn btn-warning' name='selweek'>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='{$row['wk']}'>Week {$row['wk']}</option>";
    }
    echo "</select><br/>";
    echo "<input type='submit' class='btn btn-primary' value='Select' />";
    echo "</form>";
}



// Close the database connection
mysqli_close($connection);
?>
