//use sql code for debit and update view
<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'banking_system');
$q="select * from view_balance where customerid='$customerid'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
mysqli_close($con);

?>

<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>CUSTOMER</TITLE>
<STYLE>
body {
	background: url("banking.jpg") no-repeat center center fixed; 
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
#p1
{
	font-size:20px;
	font-weight:bold;
	color:red;
	text-align:right;
	text-decoration:underline;
}
#h2
{
	text-align:center;
	text-decoration:underline;
}
#h3
{
	text-align:center;
}
#p2
{
	text-align: center;
	font-size:22px;
	color:black;
}
</STYLE>
</HEAD>
<BODY link="black">
<h1 id="h1">DHAN BANK</h1>
<h1 id="h1">ONLINE BANKING</h1>
<h1 id="h2">  CUSTOMER </h1>
<FORM align="center" ACTION="debited.php" METHOD="POST">
<TABLE align="center">
<TR>
<TH>AMOUNT TO DEBIT:</TH>
<TD><INPUT TYPE="TEXT" NAME="amount" REQUIRED/></TD>
</TR>
</TABLE>
<INPUT TYPE="SUBMIT" VALUE="DEBIT"/>
</FORM>
<p id="p2">
if you don't have an account please<a href="addcust.php">  click here</a><br/>
to logout please<a href="logout.php"> click here</a>
</p>
<a href="home.php">HOME PAGE </a></br>
<a href="contact.php">contact us</a>
</BODY>
</HTML>