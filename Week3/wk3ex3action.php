<?php include 'header.php'; ?>
<div class="intro">
    <H1>Selection Switch </h1>

    <!-- using switch with break to run the code line after line
if match exist code will break there-->
 <?php
switch ($_POST["course"]){
    case "HNC" : echo "You have selected an $_POST[course]";
    break;
    case "HND" : echo "You have selected an $_POST[course]";
    break;
    case "BSC" : echo "You have selected an $_POST[course]";
    break;
    case "Part Time BSC" : echo "You have selected an $_POST[course]";
    break;
    default : echo "No course selected";
}
 ?>
</div>
</body>
</html>