<?php
include("header.php");
?>
<html>
<title> School Search</title>
<style>
table
{
	margin-top:50px;
	margin-left:200px;
	margin-bottom:50px;

}
#search
{
	margin-top:50px;
	margin-left:180px;
	background:#CCC;
	width:68%;
	}
body
{
	height:100%;
}
</style>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none; position:}
.image { margin-left:350px;}
</style>
<body>
<div class="image">
  <img class="mySlides" src="images/4.jfif" style="height:300px" style="width:600px" >
  <img class="mySlides" src="images/5.jfif" style="height:300px">
  <img class="mySlides" src="images/3.jfif" style="height:300px">

  </div>

<script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 2000); // Change image every 2 seconds
}</script>
<div id="search"><table>
<form action="searchbyname.php" method="get"><tr><td>Name of School </td><td><input type="text" name="s_name" placeholder="E.g. Delhi Public School"></td><td><input type="submit" value="Go"> </form></td></tr>
<form action="searchbypin.php" method="get"><tr><td>Pin code of School</td><td> <input type="text" name="s_pin" placeholder="E.g. 496001"></td><td><input type="submit" value="Go"></form></td></tr>
<form action="searchbytype.php" method="get"><tr><td>School type:</td><td><select name='types'>
<option value='0'>Select School type </option>
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
</td><td>Pin code of School</td><td> <input type="text" name="s_pin" placeholder="E.g. 496001"></td><td><input type="submit" value="Go"></form></td></tr>

<form action="searchbyclass.php" method="get"><tr><td>Class </td><td><input type="text" name="s_class" placeholder="E.g. 10"></td><td><input type="submit" value="Go">
</form></td></tr></table></div>

</body>
<?php
include("footer.php");
?>
</html>