<?php
$a=$_REQUEST["Name"];
$b=$_REQUEST["gender"];

$c=$_REQUEST["Mobile"];
$d=$_REQUEST["Email"];
$k=$_REQUEST["Pass"];
$e=$_REQUEST["CPass"];

$f=$_REQUEST["Pass"];
$g=$_REQUEST["FName"];
$j=$_REQUEST["Lastgrad"];
$h=$_REQUEST["Lastperc"];
$i=$_REQUEST["Lastyear"];

include("dbConnect.php");
if($k==$e)
{
mysql_query("insert into user_details (user_id, user_pass, user_type) values('$d','$e','student')");

mysql_query("insert into stud_details(stud_name,stud_gen,stud_mobile,stud_email,stud_fname,stud_lastgrade,stud_lastperc,stud_lastyear) values('$a','$b','$c','$d','$g','$j','$h','$i')") or die(header("location:studentregistration.php?status=failur"));
header("location:studentregistration.php?status=success");
}
else
{
	echo("Password does not Match");
}




?>