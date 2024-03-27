<?php
include "header.php";
include("myfunctions.inc");
html_header("My first function demo");
html_h1("These functions are going to save me lots of time");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the form
    $income = $_POST["income"];
    $taxRate = $_POST["tax_rate"];
    
    // Calculate tax using user input
    echo "Your Calculation based on values provided:";
    echo "I pay with my tax calculation : <br/>" . calculatetax($income, $taxRate) . "--% tax<br/>";
    echo "I pay with fixed calculation:<br/>" . calculatefixedtax($income, $taxRate) . "--% tax<br/>";
}

// Display the form
?>
<?php  echo "Marius Boncica Calculation!";
    echo "I pay with my tax calculation : <br/>" . calculatetax(2000,22) . "--%tax<br/>";
    echo "I pay with fixed calculation:<br/>" . calculatefixedtax(2000,22) . "--%tax<br/>";
    ?>

    <div class="intro">
<h2> Calculate Your Tax Using my calculator</h2><br/>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="income">Income:</label>
    <input type="number" name="income" id="income" required><br/></br>

    <label for="tax_rate">Tax Rate:</label>
    <input type="number" name="tax_rate" id="tax_rate" required><br/><br/>

    <input type="submit" class="btn btn-primary" value="Calculate Tax">
</form>
</div>
<?php
html_footer();
?>
