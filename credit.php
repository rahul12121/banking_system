<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>CREDIT</TITLE>
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
<FORM align="center" ACTION="credited.php" METHOD="POST">
<TABLE align="center">
<TR>
<TH>ACCOUNT NO:</TH>
<TD><INPUT TYPE="TEXT" NAME="accountno" REQUIRED/></TD>
</TR>
<TR>
<TH>AMOUNT TO CREDIT:</TH>
<TD><INPUT TYPE="number" NAME="balance" REQUIRED/></TD>
</TR>
</TABLE>
<INPUT TYPE="SUBMIT" VALUE="CREDIT"/>
</FORM>
<p id="p2">
for new account please<a href="addcust.php">  click here</a><br/>
to logout please<a href="logout.php"> click here</a>
</p>
<a href="home.php">HOME PAGE </a></br>
<a href="contact.php">contact us</a>
</BODY>
</HTML>