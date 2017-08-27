<?php
session_start();
include("config.php");
$accountno=$_POST['accountno'];
$balance=$_POST['balance'];
$q="update account_info set balance=(balance+$balance) where accountno='$accountno'";
$result=mysqli_query($db,$q);

?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>INSERTION</TITLE>
<STYLE>
body {
	background: url("bank.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#h1
{ text-align: center;
	color:brown;
}
#h2
{
	text-align: center;
	color:grey;
	text-decoration:underline;
}
#p1
{
	text-align: center;
}
#p2
{
	text-align: center;
	font-size:22px;
}
#p3
{
	font-size:20px;
	font-weight:bold;
	text-align:left;
	text-decoration:underline;
}
</STYLE>
</HEAD>
<BODY>
<H1 ID="h1">DHAN BANK</H1>
<H2 ID="h2">   CREDIT      </H2>
<P id="p1">
<?PHP
if($result==1)
{
	echo "CREDITED";
	echo "<br/>";
   echo "AMOUNT CREDITED: ".$_POST['balance'];  
}
else
	echo "FAILED";
?>
</p>
<p id="p2">for new customer<a href="addcust.php">  click here</a><br/>
to delete customer<a href="delete.php">  click here</a><br/>
to logout please<a href="logout.php"> click here</a>
</p>
<p id="p3">
<a href="home_page.php">home</a></br>
<a href="contact.php">contact us</a>
</p>
</BODY>
</HTML>