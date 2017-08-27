<?php 
session_start();
?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>customer</TITLE>
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
#p1
{
	font-size:20px;
	font-weight:bold;
	text-align:left;
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
}
</STYLE>
</HEAD>
<BODY link="black">
<h1 id="h1">DHAN BANK</h1>
<h1 id="h1">ONLINE BANKING</h1>
<h1 id="h2">  CUSTOMER ACCOUNT </h1>
<p>invalid customer.. use valid details</p>
<FORM align="center" ACTION="validcust1.php" METHOD="POST">
<TABLE align="center">
<TR>
<TH>CUSTOMERID</TH>
<TD><INPUT TYPE="number" NAME="customerid" REQUIRED/></TD>
</TR>
<TR>
<TH>ACCOUNT NO</TH>
<TD><INPUT TYPE="TEXT" NAME="accountno" REQUIRED/></TD>
</TR>
<TR>
<TH>MOBILENUMBER</TH>
<TD><INPUT TYPE="TEXT" NAME="mobileno" REQUIRED/></TD>
</TR>
</TABLE>
<INPUT TYPE="SUBMIT" VALUE="ENTER"/>
</FORM>
<p id="p2">for new customer<a href="addcust.php">  click here</a><br/>
to delete customer<a href="delete.php">  click here</a><br/>
to logout please<a href="logout.php"> click here</a>
</p>
<p id="p1">
<a href="home_page.php">home</a></br>
<a href="contact.php">contact us</a>
</p>
</BODY>
</HTML>