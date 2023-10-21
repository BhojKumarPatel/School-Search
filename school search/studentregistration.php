
<?php
include("header.php");
?>

<?php
if(isset($_REQUEST["status"]))
{
echo("<div id='replyMessage'>");
if($_REQUEST["status"]=="success")
echo("Data has been Saved");
else if($_REQUEST["status"]=="failure")
echo("Data not saved");

echo("</div>");
}
?>

<form method="post" action="insertstudent.php"> 
<table width="92%">
<tr> <td width="45%">Name </td> <td width="55%"> <input type="text" name="Name"> </td></tr>
<tr> <td> Gender </td> <td> <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other </td></tr>
<tr> <td> Father's Name</td> <td> <input type="text" name="FName"> </td></tr>
<tr> <td> Mobile No</td> <td> <input type="text" name="Mobile"> </td></tr>
<tr> <td> Email Id</td> <td> <input type="text" name="Email"> </td></tr>
<tr> <td> Create Password</td> <td> <input type="password" name="Pass"> </td></tr>
<tr> <td> Confirm Password</td> <td> <input type="password" name="CPass"> </td></tr>
<div></div><div><tr><td><b>EDUCATION DETAILS:</b></td></tr>
<tr> <td> Last class of Graduation</td> <td> <input type="text" name="Lastgrad"> </td></tr>
<tr> <td> % of Last Class</td> <td> <input type="text" name="Lastperc"> </td></tr>
<tr> <td> Last Year of Graduation</td> <td> <input type="date" name="Lastyear"> </td></tr>
</div>
<tr> <td> <input type="submit" value="Ok"></td> <td> <input type="reset" value="Cancel"> </td></tr>

</table>
</form>
</div><!--closing of formSetting-->

</div>

<?php
include("footer.php");
?>