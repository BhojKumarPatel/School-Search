<?php
if($_SESSION['utype']="admin");
{
include("header1.php");
if(session_id()=="")
session_start(); 

}?>
<style>
#options a
{
	width:200px;
	height:240px;
	border:1px solid black;
	margin:10px;
	margin-left:150px;
	display:inline-block;
	border-radius:10px;
	text-align:center;
	padding:10px;
}
#options
{
	margin:29px;
}
</style>
<title>Admin</title>
<div id="options">
<a href="confirmschool.php" style="background-image:url(images/1.jpg)"></a>
<a href="showconfirmschools.php" style="background-image:url(images/2.png)"></a>
<a href="logout.php" style="background-image:url(images/3.png)"></a>
</div>
<?php
include("footer.php");
?>