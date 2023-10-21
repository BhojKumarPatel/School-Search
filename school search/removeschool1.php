<?php
if(session_id()=="")
session_start(); 
?>
<?php
include("dbConnect.php");
if(isset($_REQUEST["status"])==true)
{
	$p=$_REQUEST["status"];
}
mysql_query("delete from permanentschools where s_code='$p'") or die("query error");
header("location:showconfirmschools.php");
?>