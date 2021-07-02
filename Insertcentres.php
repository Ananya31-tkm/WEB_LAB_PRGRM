<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Convention Centre Booking Portal</h2></center>
<br>

<?php
include("DB_Convention.php");

$name=$_POST["name"];
$location=$_POST["location"];
$capacity=$_POST["capacity"];
$avldate=$_POST["avldate"];
$contact=$_POST["contact"];

$query = "insert into centerbooking(name,location,capacity,avldate,contact) values('$name','$location','$capacity','$avldate','$contact')"; 
$result = mysqli_query($db,$query);

?>

<h3> Convention Centre Details  Inserted Successfully </h3>

<a href="Userbooking.php"> To Book for the Convention Centre click here </a><br>



</body>
</html>
