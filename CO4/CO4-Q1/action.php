<html>
<title>Registration Form</title>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=Vk4PkxZZRdGwJvsgdGT1D2jSS8py2kgoOzN0BL70HTqMFJJGizvUPEBVZFY81OxF7aRjUMYxo8CdNfuzx5ZqnR5_5NxGQNZaJNQd41fVfVUxfKJS9kW34VwDbh0HWZDgRELXR-0bXUQFAGJCP8wQeoeRlAjk--RVNJC2zzy5c5t96eYrvGTzuhdLGPJt62hTr6XW9kEJmNTlk-qbho7wNK6iA0PV9JRepbSCo31plfK_CMizVeeSecXA-roHLEuem8CCO8OZENz8ZYZq_lXnNe9OnCYC_gNiv8bUPN3-Y2af-uYAL2MRrAoO0XZ4YXGcZ_hy2xSe2w1ogYAIKQ72Cnx7tNQNpKV_9bob1FrUqxyYTMOzjaKR4p2chiTxdpYgmgcq-NPm34H8jnzDE9PraZmBijy2IXcCppjzKsKHecu7EH9nzmQH3u48wz7CQI9H2FfFU4xlLO4nEF_F8SglXA" charset="UTF-8"></script><style> 
 body
    {
        text-align: center;
    }
</style>
<body>
<?php
foreach ($_POST as $key=>$value)
 {
   if(empty($_POST[$key])) 
 {
$message = ucwords($key) . " field is required";
}
  }
 if(!isset($message))
 {
if($_POST['password'] != $_POST['confirm_password']){
$message = 'Passwords should be same<br>';
}
 }
if(!isset($message))
 {
if($_POST['password']=='' || $_POST['confirm_password']==''){
$message = 'Please enter the password<br>';
}
 }
/* Validation to check if gender is selected */
if(!isset($message)) {
if(!isset($_POST["gender"])) {
$message = " Gender field is required";
}
}
/* Validation to check if Terms and Conditions are accepted */
if(!isset($message)) {
if(!isset($_POST["terms"])) {
$message = "Accept Terms and conditions before submit";
}
}
print"<h2><br>REGISTRATION FORM<br></h2>";
print "<br>User Name:".$_POST['userName']."<br>";
print "<br>First Name:".$_POST['firstName']."<br>";
print "<br>Last Name:".$_POST['lastName']."<br>";
print "<br>Gender:".$_POST['gender']."<br>";
?>