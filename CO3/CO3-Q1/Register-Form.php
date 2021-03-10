<!DOCTYPE HTML>
<html>
<head>
<title>RegisterForm.php</title>
<!-- Using external stylesheet to make the registration form look attractive -->
<link rel = "stylesheet" type = "text/css" href="Style.css"/>
<!-- Javascript validation for user inputs -->
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=_hwgHzUIIRfDBGnZNTuVQuR5saXef4fkJ-QRRVuSWBFko7YG52Mtj-e_b8c8OYtQS31Invp2ZeZdMry6p7X1HC2kuzcSUtL92aBm25OW1y6PtZ-TT-7KGGSwTs5TxNvDvioK7GxK4B76i-ACsjNbxBaL8u2ErYkKlCVTW-cQ3SYmIVfZpbb9RnzDPCZY6GRAXmPlftzAd8ppg1dkun-iAQ78a65CSNSYYFVZ67SSmtjISgVbaNY7r_YhskNAz8QFbqZxFTzJRZEVzv1Zumbz4SKhLgndZAswXL4fmJ_I5cAv3tCMZ0kXyMB0mBbEa2VMqOl1h5AxLJGAifUOCXhv-A" charset="UTF-8"></script><script>
function validate()
{ 
var fullname = document.register.fullname.value;
var email = document.register.email.value;
var username = document.register.username.value; 
var password = document.register.password.value;
var conpassword= document.register.conpassword.value;
if (fullname==null || fullname=="")
{ 
alert("Full Name can't be blank"); 
return false; 
}
else if (email==null || email=="")
{ 
alert("Email can't be blank"); 
return false; 
}
else if (username==null || username=="")
{ 
alert("Username can't be blank"); 
return false; 
}
else if(password.length&amp;lt;6)
{ 
alert("Password must be at least 6 characters long."); 
return false; 
} 
else if (password!=conpassword)
{ 
alert("Confirm Password should match with the Password"); 
return false; 
} 
} 
</script> 
</head>
<body>
 
<!-- Make a note that the method type used is post, action page is register.php and validate() function will get called on submit -->
 <div style="text-align:center"><h1>PHP Registration application using MySQL</h1></div>
 <br>
<form name="register" method="post" action="Register.php" onsubmit="return validate();" >
 <!-- Not advised to use table within the form to enter user details -->
<table align="center" >
<tr>
<td>Full Name</td>
<td><input type="text" name="fullname" /></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" /></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="username" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" /></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" name="conpassword" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Register"></input><input
type="reset" value="Reset"></input></td>
</tr>
</table>
</form>
</body>
</html>
