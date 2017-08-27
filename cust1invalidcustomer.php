<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>CUSTOMER</TITLE>
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
#p3
{
	text-align: center;
}
</STYLE>
</HEAD>
<BODY link="red">
<h1 id="h1">DHAN BANK</h1>
<h1 id="h1">ONLINE BANKING</h1>
<h1 id="h2">  CUSTOMER </h1>
<p id="p3">
<?php echo "invalid customer" ?>
</p>
<h2 id="h3"> HELLO </h2>
<FORM align="center" ACTION="validcaptcha.php" METHOD="POST">
<TABLE align="center">
<TR>
<TH>CUSTOMERID</TH>
<TD><INPUT TYPE="NUMBER" NAME="customerid" REQUIRED/></TD>
</TR>
<TR>
<TH>MOBILENUMBER</TH>
<TD><INPUT TYPE="TEXT" NAME="mobileno" REQUIRED/></TD>
</TR>
<TR>
<TH>PASSWORD:</TH>
<TD><INPUT TYPE="PASSWORD" NAME="password" REQUIRED/></TD>
</TR>
</TABLE>
ENTER CAPTCHA
<INPUT TYPE="TEXT" NAME="CAP" REQUIRED/>
<img src="captch.php">
</br>
<INPUT TYPE="SUBMIT" NAME="check" VALUE="VERIFY"/>
</FORM>
<p id="p2">
if you don't have an account please<a href="addcust.php">  click here</a><br/>
to logout please<a href="logout.php"> click here</a>
</p>
<a href="home.php">HOME PAGE </a></br>
<a href="contact.php">contact us</a>
</BODY>
</HTML>