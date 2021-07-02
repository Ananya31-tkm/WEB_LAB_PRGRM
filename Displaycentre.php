<!DOCTYPE HTML>
<html>
<body bgcolor="grey">
<center><h2>Convention Centre Booking Portal</h2></center>
<br>
<center><h2>Available Convention Centre For Your Date is... </h2></center>
<br>
<?php
include("DB_Convention.php");
$search = $_REQUEST["search"];
$query = "select Name,Location,Capacity,Avldate,Contact from Centerbooking where Avldate like '%$search%'"; 
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
<td><?php echo $row["Name"];?> </td>
<td><?php echo $row["Location"];?> </td>
<td><?php echo $row["Capacity"];?> </td>
<td><?php echo $row["Avldate"];?> </td>
<td><?php echo $row["Contact"];?> </td>
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
