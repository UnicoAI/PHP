<?php include 'header.php'; ?>
<div class="intro">
<?php
$topModules[0] = "Internet Systems Development";
$topModules[1] = "Programming 1";
$topModules[2] = "Programming 2";
$topModules[3] = "OOAD";
$topModules[4] = "Software Engineering";

foreach ($topModules as $index => $value) {
    echo "Index is $index and value is $value <br/>";
}
?>
</div>
</body>
</html>