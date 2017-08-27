<?php
session_start();
include("config.php");
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
	$index="c".$j;
	if(isset($_POST[$index]))
	$customerid[$i]=$_POST[$index];
	else
		$i--;
}
mysqli_select_db($db,'banking_system');
for($k=1;$k<=$size;$k++)
{
$q="delete from account_info where customerid=".$customerid[$k];
mysqli_query($db,$q);
}
mysqli_close($db);

?>

<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>DELETION</TITLE>
<STYLE>
body {
	background: url("bank.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#h1
{
	color:brown;
	text-align:center;
}

#h3
{
	text-align:center;
	color:grey;
	text-decoration:underline;
}
#p1
{
	text-align:center;
	font-size: 22px;
}
</STYLE>
</HEAD>
<BODY>
<H1 ID="h1">DHAN BANK</H1>
<H2 ID="h3">   DELETING      </H2>
<P id="p1">
<?PHP

echo $size." records deleted"

?>
<br/>
<a href="viewaccounts.php">VIEW ACCOUNT</a>
<br/>
<a href="delete.php">DELETE ACCOUNT</a>
</P>
<a href="home.php">home</a>
<br/>
<a href="contact.php">contact us</a>
</BODY>
</HTML>