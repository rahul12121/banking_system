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
<h1 id="h2">  CUSTOMER ACCOUNT INFORMATION </h1>
<br/>
<TABLE align="center" id='t'>
<TR>
<TH>CUSTOMER ID</TH>
<TH>ACCOUNT NO</TH>
<TH>NAME</TH>
<TH>MOBILE NO</TH>
<TH>PAN NO</TH>
<TH>CITY/VILLAGE</TH>
<TH>DISTRICT</TH>
<TH>STATE</TH>
<TH>PIN CODE</TH>
<TH>PASSWORD</TH>
<TH>BALANCE</TH>
<TH>DATE-OF-JOIN</TH>
</TR>
<?php
session_start();
$accountno=$_POST['accountno'];
include("config.php");
$q="select * from account_info where accountno='$accountno'";
$result=mysqli_query($db,$q);
$num=mysqli_num_rows($result);
mysqli_close($db);
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	?>
	<tr>
	<td><?php echo $row['customerid']; ?></td>
	<td><?php echo $row['accountno']; ?></td>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['mobileno']; ?></td>
	<td><?php echo $row['panid']; ?></td>
	<TD><?php echo $row['city']; ?></TD>
    <TD><?php echo $row['district']; ?></TD>
    <TD><?php echo $row['state']; ?></TD>
    <TD><?php echo $row['pincode']; ?></TD>
    <TD><?php echo $row['password']; ?></TD>
    <TD><?php echo $row['balance']; ?></TD>
	<td><?php echo $row['dateofjoin']; ?></td>
	</tr>
	<tr>
	<tr>
<TH align="middle">IMAGE</TH>
</tr>
	<td><?php echo'<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" width=100 height=100>' ?></td>
	</tr>
	<?php
}
?>
</TABLE>
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