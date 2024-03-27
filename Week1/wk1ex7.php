<?php include 'header.php'; ?>
<div class="intro">
   

    <h1> Introduction Maths Calculation</H1>
    <?php $hourlyrate = 40 ;
    $hoursperweek = 40;
    $gross = $hourlyrate * $hoursperweek;
    $deductionsvalue = 0.22 ;
    $deductions = $gross * $deductionsvalue;
$net = $gross - $deductions;
    ?>
    <table>
    <tr>
    <td>Rate </td>
    <td>Hours</td>
    <td>Gross</td>
    <td>Deductions</td>
    <td>Net</td>
</tr>
<tr>
 <td><?php echo $hourlyrate; ?></td>
<td><?php echo $hoursperweek; ?></td>
<td><?php echo $gross;?></td>
<td><?php echo $deductions; ?></td>
<td><?php echo $net;?></td>
</tr>

</table>
</div>
</body>
</html>