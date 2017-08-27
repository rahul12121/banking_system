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
	color:black;
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
#t tr
{
	background-color:white;
	text-color:black;
}
</STYLE>
</HEAD>
<BODY>
<h1 id="h1">DHAN BANK</h1>
<h1 id="h1">ONLINE BANKING</h1>
<h1 id="h2">  CUSTOMER ACCOUNT INFORMATION </h1>
<br/>
<?php
include("config.php");
session_start();
$accountno=$_POST['accountno'];
mysqli_select_db($db,'banking_system');
$q="select * from account_info where accountno='$accountno'";
$result=mysqli_query($db,$q);
$num=mysqli_num_rows($result);
mysqli_close($db);
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	?>
	<p>
	<p align="right"><?php echo'<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" width=200 height=200>' ?></p>
	<p align="center"></p>
	<td><?php echo $row['customerid']; ?></td></tr>
	<tr><TH>ACCOUNT NO</TH>
	<td><?php echo $row['accountno']; ?></td></tr>
	<tr><TH>NAME</TH>
	<td><?php echo $row['name']; ?></td></tr>
	<tr><TH>MOBILE NO</TH>
	<td><?php echo $row['mobileno']; ?></td></tr>
	<tr><TH>PAN NO</TH>
	<td><?php echo $row['panid']; ?></td></tr>
	<tr><TH>CITY/VILLAGE</TH>
	<TD><?php echo $row['city']; ?></TD></tr>
    <tr><TH>DISTRICT</TH>
    <TD><?php echo $row['district']; ?></TD></tr>
    <tr><TH>STATE</TH>
    <TD><?php echo $row['state']; ?></TD></tr>
    <tr><TH>PIN CODE</TH>
    <TD><?php echo $row['pincode']; ?></TD></tr>
    <tr><TH>BALANCE</TH>
    <TD><?php echo $row['balance']; ?></TD></tr>
	<tr><TH>DATE-OF-JOIN</TH>
	<td><?php echo $row['dateofjoin']; ?></td></tr>
	</TABLE>
	</p>
	<?php
}
?>

<a href="home.php">HOME PAGE </a></br>
<a href="contact.php">contact us</a>
</BODY>
</HTML>