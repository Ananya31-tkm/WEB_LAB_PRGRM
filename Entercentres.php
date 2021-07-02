<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Convention Centre Booking Portal</h2></center><br>
<center><h2><font color="red"><marquee>Details Entered by Owner Of The Convention Centres...</marquee></font> </h2></center>
<form action="Insertcentres.php" method="post">

<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> Enter Centre Name :</td>
<td> <input type="text" name="name" size="48"> </td>
</tr>
<tr>
<td> Enter Centre Location :</td>
<td> <input type="text" name="location" size="48"> </td>
</tr>
<tr>
<td> Enter Centre Capacity :</td>
<td> <input  name="capacity" size="48"> </td>
</tr>
<tr>
<td> Enter Available Date :</td>
<td> <input type="text" name="avldate" size="48"> </td>
</tr>
<tr>
<td> Enter Contact Details: </td>
<td> <input type="text" name="contact" size="48"> </td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>
</body>
</html>
