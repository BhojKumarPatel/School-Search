<?php
include("header.php");
include("dbConnect.php");
$p=$_REQUEST["status"];
$rsCrs=mysql_query("select * from permanentschools where s_code='$p'");
echo("<table border='1' bordercolor='#330099'>");
echo("<th height='100px'>School Name</th>");
echo("<th height='100px'>Type</th>");
echo("<th height='100px'>Address</th>");
echo("<th height='100px'>pin code</th>");
echo("<th height='100px'>City</th>");
echo("<th height='100px'>District</th>");
echo("<th height='100px'>State</th>");
echo("<th height='100px'>Year of registration</th>");
echo("<th height='100px'>email</th>");
echo("<th height='100px'>code</th>");
echo("<th height='100px'>classes upto</th>");



echo("<th height='100px'>Fees for nursery</th>");
echo("<th height='100px'>Fees for Ukg</th>");
echo("<th height='100px'>Fees for class 1</th>");
echo("<th height='100px'>Fees for class 5</th>");
echo("<th height='100px'>Fees for class 6</th>");
echo("<th height='100px'>Fees for class 8</th>");
echo("<th height='100px'>Fees for class 9</th>");
echo("<th height='100px'>Fees for class 10</th>");
echo("<th height='100px'>Fees for class 11</th>");
echo("<th height='100px'>Fees for class 12</th>");
while($row=mysql_fetch_array($rsCrs))
{
	echo("<tr height='50px' align='center'><td width='50px' text-aling:center>");
	echo($row["s_name"]);
	$x=$row["s_code"];
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["s_type"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["s_add"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["s_pin"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["s_city"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["s_dist"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["s_state"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["s_yearofreg"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["s_email"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["s_code"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["s_classes"]);
	echo("</td>");
	
	
	echo("<td width='200px'>");
	echo($row["s_fl1"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["s_fh1"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["s_fl2"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["s_fh2"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["s_fl3"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["s_fh3"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["s_fl4"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["s_fh4"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["s_fl5"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["s_fh5"]);
	echo("</td>");
}
echo("</table>");
include("footer.php");
?>