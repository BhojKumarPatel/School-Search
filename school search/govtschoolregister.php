
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
<style>
form
{
	margin-left:20%;
}

</style>
<body>
<form method="post" action="inserttempschool.php"> 
<table width="60%">

<tr><td><b><ul>School Details : </ul></b></td></tr>
<tr> <td width="45%">School Name </td> <td width="55%"> <input type="text" name="Name"> </td></tr>
<tr> <td> Address</td> <td> <input type="text" name="add"> </td></tr>
<tr> <td> Pincode </td> <td> <input type="text" name="pincode"> </td></tr>
<tr> <td> District </td> <td> <input type="text" name="District"> </td></tr>
<tr> <td> City/Town </td> <td> <input type="text" name="city"> </td></tr>
<tr> <td> State </td> <td> <input type="text" name="state"> </td></tr>

<tr><td><b><ul><br />Registration Details:</b></ul></td></tr>
<tr> <td> Year of Registration</td> <td> <input type="date" name="yearofreg"> </td></tr>
<tr> <td> School Dice Code </td> <td> <input type="text" name="code"></td></tr>

<tr><td><b><ul><br />Identification Details :</b></ul></td></tr>
<tr> <td> Email </td> <td> <input type="text" name="Email"> </td></tr>
<tr> <td> Create Password</td> <td> <input type="password" name="Pass"> </td></tr>
<tr> <td> Confirm Password</td> <td> <input type="password" name="CPass"> </td></tr>

<tr><td><b><ul><br />Fees Details :</b></ul></td></tr>
<tr> <td> Classes Available upto</td> <td> <input type="text"  name="classes"> </td></tr>
<tr><td></td><td><font size="-2">Lowest</font></td><td><font size="-2">Highest</font></td></tr>
<tr> <td> Fees Range of Nurssery - Ukg</td> <td> <input type="text" name="fl1"> </td><td><input type="text" name="fh1"></td></tr>
<tr> <td> Fees Range of 1 - 5 </td> <td> <input type="text" name="fl2"> </td><td><input type="text" name="fh2"></td></tr>
<tr> <td> Fees Range of 6 - 8 </td> <td> <input type="text" name="fl3"> </td><td><input type="text" name="fh3"></td></tr>
<tr> <td> Fees Range of 9 - 10 </td> <td> <input type="text" name="fl4"> </td><td><input type="text" name="fh4"></td></tr>
<tr> <td> Fees Range of 11 - 12 </td> <td> <input type="text" name="fl5"> </td><td><input type="text" name="fh5"></td></tr>
<tr><td><h6>NOTE: * Mention NA where not applicaple</h6></td></tr>
<tr><td><input type="hidden" name="type" value="govt" /></td></tr>
<tr> <td> <input type="submit" value="Ok"></td> <td> <input type="reset" value="Cancel"> </td></tr>

</table>
</form>
</div><!--closing of formSetting-->

</div>
</body>
<?php
include("footer.php");
?>