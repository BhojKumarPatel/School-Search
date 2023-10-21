<?php
include("header.php");
include("dbConnect.php");
$t=$_REQUEST["types"];
$p=$_REQUEST["s_pin"];
$rsCrs=mysql_query("select s_name,s_code,s_pin,s_add,s_dist,s_state,s_email,s_yearofreg,s_classes,s_type from permanentschools where s_pin='$p' AND s_type ='$t'");
echo("<table border='1' bordercolor='#330099'>");
echo("<th height='100px'>School Name</th>");
echo("<th height='100px'>Type</th>");
echo("<th height='100px'>Address</th>");
echo("<th height='100px'>pin code</th>");
echo("<th height='100px'>District</th>");
echo("<th height='100px'>State</th>");
echo("<th height='100px'>Year of registration</th>");
echo("<th height='100px'>email</th>");
echo("<th height='100px'>code</th>");
echo("<th height='100px'>classes upto</th>");
echo("<th> View </th>");
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
	echo("<td width='200px'><a href='showschooldetail.php?status=$x'>Show</a></td>");

}
echo("</table>");
include("footer.php");
?>