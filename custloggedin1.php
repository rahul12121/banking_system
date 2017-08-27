<?php 
session_start();
?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>custloggedin1</TITLE>
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
	text-align:center;
	text-decoration:underline;
}
#h3
{
	text-align:center;
}
.a1
{
	
	text-decoration:blink;
	cursor:pointer;
}
.a1:hover
{
color:brown;
}
#p2
{
	text-align:center;
	font-size:20px;
}
</STYLE>
</HEAD>
<BODY>
<h1 id="h1">DHAN BANK</h1>
<h1 id="h1">ONLINE BANKING</h1>
<h1 id="h2">  welcome customer </h1>
<p id="p2">
<a class="a1" href="account_info.php"> ACCOUNT INFORMATION </a></br>
</br>
<a class="a1" href="credit.php"> CREDIT </a></br>
</br>
<a class="a1" href="transaction_history.php"> TRANSACTION HISTORY </a>
</br>
to logout please<a class="a1" href="logout.php"> click here</a>
</br>
</p>
<p>
<a class="a1" href="home_page.php">HOME PAGE </a></br>
<a class="a1" href="contact.php">contact us</a>
</p>
</BODY>
</HTML>