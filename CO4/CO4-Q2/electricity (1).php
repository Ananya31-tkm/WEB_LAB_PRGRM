<!DOCTYPE html>
<head>
	<title>Calculate Electricity Bill</title>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=uLJauJ0bQNQv8TuMMjUmJLuEvwgnobI4-RtxN4DzFRTIQvvPkyxv8b7_DjrhlZemHTALfOqxEns5f0sVaRIHxQuzajhr5WKqA9izc9hAyi1yIjBNCWpRDJsWyVNSV9ROXmIVBQGmPjMNNGoxIHa4IluUWoVHb-5RQPurWd_KmhC7UgYRYMGt0tFb6InbYHGlr3KlL5KfsRvV_Nd3Fm_TPkJql3_VMGSxhRtHXU041LnRTsY-Qf0pOOpxqXqhWckYzJkOFRPUU6RIjc0rluKCIl9jLlSy1pXODlWsYpzmJGs1BzCEtPYmL-OudmWxwC9VVV-s6giSZTQJUGzaz81-ikc0lRfUNU_RBj18AyEOcQtLCu5OckH8vx7n0xfgE6mZzv1WIjo73Fn8AhO-giGKYf2BbJ7vHIR0mtAiLA4AJmrtSQQgjKuiweoYYe2FznAOm12C5_GDqWPYC7_En1PtJA" charset="UTF-8"></script></head>
<?php
$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Bill Amount for ' . $units . ' Unit is Rs.' . $result;
    }
}
function calculate_bill($units) {
    $unit_cost_first = 4;
    $unit_cost_second = 5;
    $unit_cost_third = 6;

    if($units <= 100) {
        $bill = $units * $unit_cost_first;
    }
    else if($units > 100 && $units <= 200) {
        $temp = 100 * $unit_cost_first;
        $remaining_units = $units - 100;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    }
    else {
        $temp = (100 * 4) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 200;
        $bill = $temp + $remaining_units ;
    }
    return number_format((float)$bill, 2, '.', '');
} 
?>
 
<body>
	<div id="page-wrap">
		
<form action="" method="post" id="quiz-form">
<center>
<table width="50%" border="0" cellspacing="0" cellpadding="10">
<tr><th colspan="2"><h2>ELECTRICITY BILL</h2></th></tr>
<tr>
<td>Enter the consumer number</td>
<td><input type="text" name="consumer_number"></td>
</tr>
<tr>
<td>Enter the customer name</td>
<td><input type="text" name="consumer_name"></td>
</tr>

<tr>
<td><input type="number" name="units" id="units" placeholder="Please enter no. of Units" />  </td>
</tr>
<tr>
<td><input type="submit" name="unit-submit" id="unit-submit" value="Submit" /></td>
</tr>    
</table>
</center>            
</form>	
<div>
<?php echo '<br />' . $result_str; ?>
</div>	
</div>	
</body>
</html>