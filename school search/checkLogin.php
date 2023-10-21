<?php session_start(); ?>
<?php

$a=$_REQUEST["User"];
$b=$_REQUEST["Pass"];
require_once("dbConnect.php");


$rsuser=mysql_query("select * from user_details where user_id='$a'") or die("query error");

if(mysql_num_rows($rsuser)==0)
{
	echo("Invalid UserID or password");
}
else
{
	$row=mysql_fetch_array($rsuser);
	if($row["user_pass"]==$b)
	{
		 $_SESSION['uname']=$a;
		 
	     if($row["user_type"]=="admin")
		 {
		 $_SESSION['utype']="admin";
			 header("location:adminchoice.php");
		 }
		else if($row["user_type"]=="student")
		{
					 $_SESSION['utype']="student";
			
			header("location:loginFormNew.php");
		}
		else if($row["user_type"]=="parent")
		{
					 $_SESSION['utype']="parent";
			header("location:loginFormNew.php");
		}
		else if($row["user_type"]=="school")
		{
					 $_SESSION['utype']="school";
			header("location:loginFormNew.php");
		}
	}
	else
	{
		echo("Invalid Userid or Password");
	}
}
?>