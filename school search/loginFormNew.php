<?php
include("header.php");
?>
<style>
form
{
	margin-left:30%;
	margin-top:7%;
	margin-bottom:13%;
	}
td
{
	word-wrap:normal;text-align:left;
	text-indent:0px;

}
img
{ height:100px;
width:150px;
}

</style>

<div id="login">
<form method="get" action="checkLogin.php">

<table>
<tr><td rowspan="4"><img src="images/logo1.png" /></td>
<tr><td> Enter user name </td> <td> <input type="text" name="User" placeholder="USER ID"> </td>
</tr>
  <tr><td> Enter your password </td> <td> <input type="password" name="Pass" placeholder="PASSWORD" /> </td>
</tr> <td> <input type="submit" value="Ok" /> </td> <td> <input type="reset" value="Cancel"></td> </tr>

</table>

</form>

</div> <!--closing og login -->


</div>


<?php
include("footer.php");
?>