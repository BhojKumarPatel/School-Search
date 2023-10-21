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
<form action="registerschool.php" method="get" >
<table><tr><td rowspan="4"><a href="index.php"><img src="images/logo1.png" /></a></td><tr><td> Your School is affiliated by: </td>
<td><select name='types'>
<option value='0'>Select Affiliation </option>
<?php
include("dbConnect.php");
$rstyp=mysql_query("select type from school_types");
while($row=mysql_fetch_array($rstyp))
{
	$x=$row["type"];
	echo("<option value='$x'>");
	echo($row["type"]);
    echo("</option>");
}
?>
</select>
</td></tr>
<tr><td><input type="submit" value="Confirm" ></td><td><input type="reset" value="Cancel"></td></tr>
</table>
</form>
<?php
include("footer.php");
?>
</html>
