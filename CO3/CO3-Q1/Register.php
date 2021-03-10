<!DOCTYPE HTML>
<html>
<body><script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=il8HpCk7lGBK1_B3Mog05G8DI2ecTgK1TST-sUomXqqjM_HThCP09NmIp6CkV8lFbRHungSu6qXGDluKc0H40lvob-rTJWyeJpqaATuM2Ssien7wt4-Hv0AS8MvBrY0B-RipUuwiHzmSlcQHns1ayIgHs6rHY78l6O5XeJk1il4FtmdafLSJPnYBhUV552H6RqpALtr8kNXYNGIM0Y2HhbJNQKk753hmXy___S8aplgEJEpzBQzkA3-q6ZtdQ8lNVFasZfbn4QLmBCLo-Z1z_AhHCl9-Lp70P-5kOQ3Dl0H4iN5xBIOeu7CnPrNZ1hjTNPPs_dPEkxEfsRW6yqfaHg" charset="UTF-8"></script>
<?php
 
include("DBConnection.php"); // include the connection object from the DBConnection.php
 
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
 $inFullname = $_POST["fullname"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
	 $inEmail = $_POST["email"];
	 $inUsername = $_POST["username"];
	 $inPassword = $_POST["password"];

	$encryptPassword = password_hash($inPassword, PASSWORD_DEFAULT);
	 
	 $stmt = $db->prepare("INSERT INTO REGFORM(FULLNAME, EMAIL, USERNAME, PASSWORD) VALUES(?, ?, ?, ?)"); //Fetching all the records with input credentials
	 $stmt->bind_param( "ssss", $inFullname, $inEmail, $inUsername, $encryptPassword); //Where s indicates string type. You can use i-integer, d-double
	 $stmt->execute();
	 $result = $stmt->affected_rows;
	 $stmt -> close();
	 $db -> close(); 
	
	if($result > 0)
	 {
		header("location: RegSuccess.php"); // user will be taken to the success page
	 }
	 else
	 {
		 echo "Oops. Something went wrong. Please try again"; 
		 ?>
		 <a href="Register-Form.php">Try Login</a>
		 <?php 
	 }
}
?>
</body> 
</html>
