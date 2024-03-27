<?php
$hourlyrate = 5.75;
$hoursperweek = 40;
$gross = $hourlyrate * $hoursperweek;
?>

<?php include 'header.php'; ?>
<div class="intro">
<p>My gross wage is <?php print($gross); ?>;
</div>
</body>
</html>