<?php include 'header.php'; ?>
<div class="intro">
<?php
$mymarks["year 1"] = 55;
$mymarks["year 2"] = 65;
$mymarks["year 3"] = 75;

$total = 0;

// foreach loop here
foreach ($mymarks as $index => $value) {
    echo "For $index my grade was $value <br/>";
    $total = $total + $value;
}

$average = $total / count($mymarks); 
echo "<br/> My best year was Year 3 when I averaged " . $mymarks["year 3"];
echo "<br/> My overall average mark is $average";
?>
</div>
</body>
</html>