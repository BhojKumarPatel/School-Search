
<?php
$a=$_REQUEST["Name"];
$b=$_REQUEST["add"];
$c=$_REQUEST["pincode"];
$d=$_REQUEST["District"];
$e=$_REQUEST["city"];
$f=$_REQUEST["state"];
$n=$_REQUEST["type"];
$g=$_REQUEST["code"];
$h=$_REQUEST["yearofreg"];
$i=$_REQUEST["Email"];
$j=$_REQUEST["Pass"];
$k=$_REQUEST["CPass"];
$l=$_REQUEST["classes"];
$fl1=$_REQUEST["fl1"];
$fh1=$_REQUEST["fh1"];
$fl2=$_REQUEST["fl2"];
$fh2=$_REQUEST["fh2"];
$fl3=$_REQUEST["fl3"];
$fh3=$_REQUEST["fh3"];
$fl4=$_REQUEST["fl4"];
$fh4=$_REQUEST["fh4"];
$fl5=$_REQUEST["fl5"];
$fh5=$_REQUEST["fh5"];

include("dbConnect.php");
if($j==$k)
{
mysql_query("insert into user_details (user_id, user_pass, user_type) values('$i','$k','school')");
mysql_query("insert into tempschools (s_name,s_add,s_pin,s_dist,s_city,s_state,s_code,s_yearofreg,s_email,s_classes,s_fl1,s_fh1,s_fl2,s_fh2,s_fl3,s_fh3,s_fl4,s_fh4,s_fl5,s_fh5,s_type) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$l','$fl1','$fh1','$fl2','$fh2','$fl3','$fh3','$fl4','$fh4','$fl5','$fh5','$n')") or die(header("location:index.php?status=failure"));
header("location:index.php?status=success");
}
else
{
	include("header.php");
	echo("Password does not Match");
	include("footer.php");
}
?>