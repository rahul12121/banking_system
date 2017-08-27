<?php 
session_start();
?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>HOME</TITLE>
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
#h2
{
	color:red;
	text-align:center;
	text-decoration:underline;
}
#h3
{
	font-size:25px;
	text-align:right;
}
</STYLE>
</HEAD>
<BODY>
<h1 id="h1">DHAN BANK</h1>
<h1 id="h1">ONLINE BANKING</h1>
<h1 id="h2">  CUSTOMER APPLICATION FORM </h1>
<br/>
<FORM align="center" ACTION="acountviewadmin.php" METHOD="POST">
<TABLE align="center">
<TR>
<TH>ACCOUNT NO:</TH>
<TD><INPUT TYPE="TEXT" NAME="accountno" REQUIRED/></TD>
</TR>
</TABLE>
<INPUT TYPE="SUBMIT" VALUE="ENTER"/>
</FORM>
<a href="home.php">HOME PAGE </a></br>
<a href="contact.php">contact us</a>
</BODY>
</HTML>