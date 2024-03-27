<?php
include "header.php";
$lottodate = date("dmY");
echo "The lottery numbers for $lottodate are <br/>";
for ($n = 1; $n < 7; $n++) {
    $number[$n] = rand(1, 49);
    echo "$number[$n]<br/>";
}
?>
