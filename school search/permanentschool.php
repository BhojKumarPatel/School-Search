<?php
include("dbConnect.php");
if(isset($_REQUEST["status"])==true)
{
	$p=$_REQUEST["status"];
}

$rsCart=mysql_query("select * from tempschools as ts where s_code='$p' ");

while($row=mysql_fetch_array($rsCart))
{
	$a=($row["s_name"]);
	$b=($row["s_add"]);
	$c=($row["s_pin"]);
	$d=($row["s_dist"]);
	$e=($row["s_city"]);
	$f=($row["s_state"]);
	$g=($row["s_code"]);
	$h=($row["s_yearofreg"]);
	$i=($row["s_email"]);
	$l=($row["s_classes"]);
	$fl1=($row["s_fl1"]);
	$fh1=($row["s_fh1"]);
	$fl2=($row["s_fl2"]);
	$fh2=($row["s_fh2"]);
	$fl3=($row["s_fl3"]);
	$fh3=($row["s_fh3"]);
	$fl4=($row["s_fl4"]);
	$fh4=($row["s_fh4"]);
	$fl5=($row["s_fl5"]);
	$fh5=($row["s_fh5"]);
	$n=($row["s_type"]);
mysql_query("insert into permanentschools (s_name,s_add,s_pin,s_dist,s_city,s_state,s_code,s_yearofreg,s_email,s_classes,s_fl1,s_fh1,s_fl2,s_fh2,s_fl3,s_fh3,s_fl4,s_fh4,s_fl5,s_fh5,s_type) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$l','$fl1','$fh1','$fl2','$fh2','$fl3','$fh3','$fl4','$fh4','$fl5','$fh5','$n')") or die(header("location:confirmschool.php?status=failure"));
header("location:confirmschool.php?status=success");
}
mysql_query("delete from tempschools where s_code='$p'") or die("query error");
?>