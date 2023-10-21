
<?php
include("header.php");
?>
<html>
<style>
form
{
	margin-left:20%;
	margin-top:7%;
	margin-bottom:15%;

}

img
{ height:100px;
width:150px;
}
</style>

<form action="selectregister.php" method="get" >

<table><tr><td rowspan="4"><a href="index.php"><img src="images/logo1.png" /></a>/</td><tr><td> You Are a: </td>
<td><select name='type'>
<option value='0'>Select User Type </option>
<?php
include("dbConnect.php");
$rstyp=mysql_query("select types from user_types");
while($row=mysql_fetch_array($rstyp))
{
	$x=$row["types"];
	echo("<option value='$x'>");
	echo($row["types"]);
    echo("</option>");
}
?>
</select>
</td></tr>
<tr><td><input type="submit" value="Confirm"></td></td><td><input type="reset" value="Cancel"></td></tr>
</table>
</form>
</html>
