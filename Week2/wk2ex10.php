<?php include 'header.php'; ?>
<div class="intro">
<?php
$mymarks["year 1"] = 55;
$mymarks["year 2"] = 65;
$mymarks["year 3"] = 75;

// foreach loop here
foreach ($mymarks as $index => $value) {
    echo "For $index my grade was $value <br/>";
}

echo "<br/> My best year was Year 3 when I averaged " . $mymarks["year 3"];
?>

    <table style="border=1;align=center">
        <tr><th>Year</th><th>Grade</th></tr>
        <?php
        foreach ($mymarks as $index => $value) {
            echo "<tr><td>$index</td><td>$value</td></tr>";
        }
        ?>
    </table>

    <br/>
    My best year was Year 3 when I averaged <?php echo $mymarks["year 3"]; ?>

    </div>
</body>
</html>
