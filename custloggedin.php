<?php 
session_start();
?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>CUSTOMER HOME</TITLE>
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
	text-align:left;
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
	text-color:black;
}
</STYLE>
</HEAD>
<BODY link="red">
<h1 id="h1">DHAN BANK</h1>
<h1 id="h1">ONLINE BANKING</h1>
<h1 id="h2">  welcome customer </h1>
<p id="p2">
<a href="account_info1.php"> ACCOUNT INFORMATION </a></br>
</br>
<a href="transaction_history1.php"> TRANSACTION HISTORY </a></br>
</br>
apply for loan<a href="loan_apply.php"> click here </a></br>
</br>
to logout please<a href="logout1.php"> click here</a>
</p>
<p id="p1">
<a href="home.php">home</a></br>
<a href="contact.php">contact us</a>
</p>
</BODY>
</HTML>