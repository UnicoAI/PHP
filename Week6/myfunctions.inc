<?php
function html_header($pageTitle)
{
    echo "<html><head><title>$pageTitle</title></head>";
    echo "<body>";
}

function html_h1($text)
{
    echo "<h1>$text</h1>";
}

function html_footer()
{
    echo "</body>";
    echo "</html>";
}
function calculatetax($salary, $rate)
{
    $tax = ($salary * ($rate / 100));
    return $tax;
}
function calculatefixedtax($salary, $rate=40)
{
    $tax = ($salary * ($rate / 100));
    return $tax;
}


?>
