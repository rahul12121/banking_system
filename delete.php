<?php
session_start();
include("config.php");
$q="select * from account_info";
$result=mysqli_query($db,$q);
$num=mysqli_num_rows($result);
mysqli_close($db);

?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>delete account</TITLE>
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

#h3
{
	text-align:center;
	color:grey;
	text-decoration:underline;
}
#t
{
	border-style:solid;
	border-color:black;
	width:900;
	
}
#t tr
{
	background-color:orange;
	text-color:green;
</STYLE>
</HEAD>
<BODY>
<H1 ID="h1">DHAN BANK</H1>
<H2 ID="h3">   DELETE ACCOUNT    </H2>
<FORM align="center" ACTION="deletion.php" METHOD="POST"/>
<TABLE align="center" id='t'>
<TR>
<TH>CUSTOMER ID</TH>
<TH>ACCOUNT NO</TH>
<TH>NAME</TH>
<TH>MOBILE NO</TH>
<TH>PAN NO</TH>
<TH>SELECT</TH>
</TR>
<?php
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
	<td><input type="checkbox" value="<?php echo $row['customerid'];?>" name="c<?php echo $i;?>"/></td>
	</tr>
	<?php
}
?>
</TABLE>
<INPUT TYPE="SUBMIT" VALUE="DELETE"/>
</FORM>
<a href="home.php">home</a></br>
<a href="contact.php">contact us</a>
</BODY>
</HTML>