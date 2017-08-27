<?php
include('session.php');
?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>ADMIN HOME</TITLE>
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
#t tr
{
	column-gap: 30px;
	background-color:white;
	color:black;
}
.a1
{
	color:black;
	text-decoration:blink;
	cursor:pointer;
}
.a1:hover
{
color:darkblue;
}
.a2
{
	color:black;
	text-decoration:blink;
	cursor:pointer;
}
.a2:hover
{
color:brown;
}
.a3
{
	color:black;
	text-decoration:blink;
	cursor:pointer;
}
.a3:hover
{
color:darkorange;
}
.a4
{
	color:black;
	text-decoration:blink;
	cursor:pointer;
}
.a4:hover
{
color:darkgreen;
}
.a5
{
	color:black;
	text-decoration:blink;
	cursor:pointer;
}
.a5:hover
{
color:darkred;
}
.a6
{
	color:black;
	text-decoration:blink;
	cursor:pointer;
}
.a6:hover
{
color:darkblue;
}
</STYLE>
</HEAD>
<BODY>
<h1 id="h1">DHAN BANK</h1>
<h1 id="h1">ONLINE BANKING</h1>
<h1 id="h2">  ADMIN HOME </h1>
<h2 id="h3"> HELLO <?php echo $login_session; ?></h2>
<ol align="center" style="color:black;font-size: 25px;">
<TABLE align="center" id='t'>
<tr>
<th><a class="a1" href="viewaccounts.php">view accounts</a></th>
<th><a class="a2" href="customer.php">existing customer</a></th>
<th><a class="a3" href="addcust.php">add customer</a></th>
<th><a class="a4" href="custloanreq.php">loan request</a></th>
<th><a class="a5" href="custsignreq.php">customer signup request</a></th>
</tr>
</TABLE>
</ol>
<P id="p2">
to logout please<a class="a1" style="text-decoration:underline;" href="logout.php"> click here</a>
</P>
<p id="p1">
<a class="a1" href="home.php">home</a></br>
<a class="a1" href="contact.php">contact us</a>
</p>
</BODY>
</HTML>