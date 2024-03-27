<?php include 'header.php'; ?>
<div class="intro">
    <H1>Age Calcultaion</h1>
 <?php
if($_POST["txtage"]<21 && $_POST["radsex"] == "male")
{
    echo "Your enter Mans Club!<br/>";
    echo "Hy $_POST[radsex] !<br/> You are under 21 years old<br/>";
    

}
else if($_POST["txtage"]>21 && $_POST["radsex"] == "male"){
    echo "Your enter Mans Club!<br/>";
    echo "Hy $_POST[radsex] !<br/>You are 21 years old or over<br/>";
}
else if($_POST["txtage"]<21 && $_POST["radsex"] == "female")
{
    echo "Your enter Womans Club!<br/>";
    echo "Hy $_POST[radsex] !<br/> You are under 21 years old<br/>";
    

}
else if($_POST["txtage"]>21 && $_POST["radsex"] == "male"){
    echo "Your enter Womans Club!<br/>";
    echo "Hy $_POST[radsex] !<br/>You are 21 years old or over<br/>";
}
else{
    echo "Your enter Others Club!<br/>";
    echo "Hy $_POST[radsex] !<br/>You are 21 years old or over<br/>";

}
 ?>
</div>
</body>
</html>