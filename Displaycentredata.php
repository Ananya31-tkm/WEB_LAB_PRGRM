<!DOCTYPE HTML>
<html>
<body bgcolor="grey">
<center><h2>Convention Centre Booking Portal</h2></center>
<center><h2>Details of All Convention Centres in Kerala</h2></center>
<br>
<?php
include("DB_Convention.php");

$query = "select * from Centerbooking "; 
$result = mysqli_query($db,$query);

if(mysqli_num_rows($result)>0)
{

?>

<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<th> Name </th>
<th> Location </th>
<th> Capacity </th>
<th> Avldate </th>
<th> Contact</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result))
{

?>

<tr>
<td><?php echo $row["name"];?> </td>
<td><?php echo $row["location"];?> </td>
<td><?php echo $row["capacity"];?> </td>
<td><?php echo $row["avldate"];?> </td>
<td><?php echo $row["contact"];?> </td>
</tr>

<?php
}
}
else
echo "<center>No Convention Centres found for this $search date </center>" ;

?>

</table>
</body>
</html>
<br>
