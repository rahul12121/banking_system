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
#p2
{
	text-align: center;
	font-size:22px;
	text-color:black;
}
</STYLE>
</HEAD>
<BODY>
<h1 id="h1">DHAN BANK</h1>
<h1 id="h1">ONLINE BANKING</h1>
<h1 id="h2">  CUSTOMER APPLICATION FORM </h1>
<br/>
<FORM align="center" ACTION="acountviewcust.php" METHOD="POST">
<TABLE align="center">
<TR>
<TH>ACCOUNT NO:</TH>
<TD><INPUT TYPE="TEXT" NAME="accountno" REQUIRED/></TD>
</TR>
</TABLE>
<INPUT TYPE="SUBMIT" VALUE="ENTER"/>
</FORM>
<p id="p2"><a href="transaction_history1.php"> TRANSACTION HISTORY </a></br>
</br>
apply for loan<a href="loan_apply.php"> click here </a></br>
</br>
to logout please<a href="logout1.php"> click here</a>
</p>
<br/>
<a href="home.php">HOME PAGE </a></br>
<a href="contact.php">contact us</a>
</BODY>
</HTML>