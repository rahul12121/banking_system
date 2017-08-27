<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'banking_system');
$q="select * from view_balance,account_info where customerid='$customerid'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>

<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>balance</TITLE>
<STYLE>
body {
	background: url("banking.jpg") no-repeat center center fixed; 
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
<h1 id="h2">  BALANCE </h1>
<br/>
<TABLE align="center">
<TR>
<TH>CUSTOMER ID:</TH>
<TH>ACCOUNT NO:</TH>
<TH>NAME:</TH>
<TH>MOBILE NO:</TH>
<TH>PAN NO:</TH>
<TH>BALANCE AVAILABLE:</TH>
</TR>
<?php
{
$row=mysqli_fetch_array($result);
?>
<TR>
<TD><?php echo $row['customerid']; ?></TD>
<TD><?php echo $row['accountno']; ?></TD>
<TD><?php echo $row['name']; ?></TD>
<TD><?php echo $row['mobileno']; ?></TD>
<TD><?php echo $row['panid']; ?></TD>
<TD><?php echo $row['balance']; ?></TD>
</TR>
<?php
}
?>
</TABLE>
<a href="home.php">HOME PAGE </a></br>
<a href="contact.php">contact us</a>
</BODY>
</HTML>