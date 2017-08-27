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
<h1 id="h2">  ADMIN LOGIN </h1>
<br/>
<FORM align="center" ACTION="validationadmin.php" METHOD="POST">
<TABLE align="center">
<TR>
<TH>USERID:</TH>
<TD><INPUT TYPE="TEXT" NAME="userid" REQUIRED/></TD>
</TR>
<TR>
<TH>PASSWORD:</TH>
<TD><INPUT TYPE="PASSWORD" NAME="password" REQUIRED/></TD>
</TR>
</TABLE>
<INPUT TYPE="SUBMIT" VALUE="ENTER"/>
</FORM>
<a href="contact.php">contact us</a>
<br/>
<a href="home.php">home</a>
</BODY>
</HTML>