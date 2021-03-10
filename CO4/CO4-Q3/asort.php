<!DOCTYPEhtml>
<html>
<body>
<?php
$names=array("Ananya","Reshma","Anila");
sort($names);

$clength=count($names);
for($x=0;$x<$clength;$x++){
echo$names[$x];
echo"<br>";
}
echo"Sorted using values:";
echo"<br>";
$age=array("Ananya"=>"35","Reshma"=>"37","Anila"=>"43");
asort($age);

foreach ($age as$x=>$x_value){
echo"Key=".$x;
echo"<br>";
}
echo"<br>";
echo"After Sorted using values in descending order:";
echo"<br>";
$age=array("Ananya"=>"35","Reshma"=>"37","Anila"=>"43");
arsort($age);

foreach($age as$x=>$x_value){
echo"Key=".$x.",Value=".$x_value;
echo"<br>";
}
?>
</body>
</html>
