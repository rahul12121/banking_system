<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>view account</TITLE>
<STYLE>
body {
	background: url("bank.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#h2
{
	text-align: center;
	color:brown;
	text-decoration:underline;
}
#h3
{
	text-align: center;
	color:black;
	text-decoration:underline;
}
#t
{
	border-style:solid;
	border-color:black;
	width:1000;
	length:1000;
}
#t tr
{
	background-color:white;
	color:black;
	column-gap: 18px;
}
.a1
{
	color:black;
	text-decoration:blink;
	cursor:pointer;
}
.a1:hover
{
color:brown;
}
#x tr
{
	column-width: 20px;
	column-gap: 18px;
	background-color:white;
}
#p2
{
	
	text-align: center;
	font-size:22px;
	color:black;
}
</STYLE>
</HEAD>
<BODY>
<H1 ID="h2">DHAN BANK</H1>
<H2 ID="h3">   VIEW ACCOUNT RECORD    </H2>
<TABLE align="center" id='t'>
<TR>
<TH>CUSTOMER ID</TH>
<TH>ACCOUNT NO</TH>
<TH>NAME</TH>
<TH>MOBILE NO</TH>
<TH>PAN NO</TH>
<TH>DATE-OF-JOIN</TH>
<TH>IMAGE</TH>
</TR>
<?php
session_start();
include("config.php");
$q="select * from account_info";
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
	<td><?php echo $row['dateofjoin']; ?></td>
	<td><?php echo'<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" width=100 height=100>' ?></td>
	</tr>
	<?php
}
?>
</TABLE>
<br/>
<p align="center"><a class="a1" href="delete.php">DELETE ACCOUNT<a/></p>
<TABLE align="center" id='x'>
<tr>
<th><a class="a1" href="customer.php">existing customer</a></th>
<th><a class="a1" href="addcust.php">new user</a></th>
</tr>
</TABLE>
</ol>
<P id="p2">
to logout please<a class="a1" style="text-decoration:underline;" href="logout.php"> click here</a>
</P>
<a href="home.php">home</a></br>
<a href="contact.php">contact us</a>
</BODY>
</HTML>