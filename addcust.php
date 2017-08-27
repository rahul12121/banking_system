<?php 

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
<FORM align="center" enctype="multipart/form-data" action="addingcust.php" METHOD="POST">
<TABLE align="center">
<TR>
<TH>ACCOUNT NO:</TH>
<TD><INPUT TYPE="TEXT" NAME="accountno" REQUIRED/></TD>
</TR>
<TR>
<TH>NAME:</TH>
<TD><INPUT TYPE="TEXT" NAME="name" REQUIRED/></TD>
</TR>
<TR>
<TH>CITY/VILLAGE:</TH>
<TD><INPUT TYPE="TEXT" NAME="city" REQUIRED/></TD>
</TR>
<TR>
<TH>DISTRICT:</TH>
<TD><INPUT TYPE="TEXT" NAME="district" REQUIRED/></TD>
</TR>
<TR>
<TH>STATE:</TH>
<TD><INPUT TYPE="TEXT" NAME="state" REQUIRED/></TD>
</TR>
<TR>
<TH>MOBILE NO:</TH>
<TD><INPUT TYPE="TEXT" NAME="mobileno" REQUIRED/></TD>
</TR>
<TR>
<TH>PAN NO:</TH>
<TD><INPUT TYPE="TEXT" NAME="panid" REQUIRED/></TD>
</TR>
<TR>
<TH>PIN CODE:</TH>
<TD><INPUT TYPE="TEXT" NAME="pincode" REQUIRED/></TD>
</TR>
<TR>
<TH>BALANCE:</TH>
<TD><INPUT TYPE="TEXT" NAME="balance" REQUIRED/></br>digits</TD>
</TR>
<TR>
<TH>PASSWORD:</TH>
<TD><INPUT TYPE="PASSWORD" NAME="password" REQUIRED/></TD>
</TR>
</TABLE>
<label>UPLOAD IMAGE</label>
<input name="MAX_FILE_SIZE" value="102400" type="hidden"/>
<input name="image" accept="image/jpeg" type="file"/>
<INPUT TYPE="SUBMIT" name="submit" VALUE="ENTER"/>
</FORM>
<a href="home.php">HOME PAGE </a></br>
<a href="contact.php">contact us</a>
</BODY>
</HTML>