<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>INSERTION</TITLE>
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
#p1
{
	text-align:center;
}
</STYLE>
</HEAD>
<BODY>
<h1 id="h1">DHAN BANK</h1>
<H1 ID="h1">CUSTOMER RECORD</H1>
<H2 ID="h2">   INSERTION      </H2>
<P id="p1">
<?php 
/*if(isset($_POST['submit']))
{
	if(getimagesize($_files['image']['tmp_name']) == FALSE)
	{
		echo "upload an image";
	}
	else
{*/
	
	/*$image= addslashes($_FILES['image']['tmp_name']);
	$name= addslashes($_FILES['image']['name']);
	$image=file_get_contents($image);
	$image=base64_encode($image);*/
if(isset($_FILES['image']) && $_FILES['image']['size'] > 0) { 
  $tmpName  = $_FILES['image']['tmp_name'];  
  $fp = fopen($tmpName, 'r');
  $data = fread($fp, filesize($tmpName));
  $data = addslashes($data);
  fclose($fp);
  include("config.php");
	$ACCOUNTNO=$_POST['accountno'];
    $NAME=$_POST['name'];
    $CITY=$_POST['city'];
    $DISTRICT=$_POST['district'];
    $STATE=$_POST['state'];
    $MOBILENO=$_POST['mobileno'];
    $PANID=$_POST['panid'];
    $PINCODE=$_POST['pincode'];
    $BALANCE=$_POST['balance'];
    $PASSWORD=$_POST['password'];

/*}
}
function s($ACCOUNTNO,$NAME,$CITY,$DISTRICT,$STATE,$MOBILENO,$PANID,$PINCODE,$BALANCE,$name,$image)
{*/

$q="INSERT INTO account_info (accountno,name,city,district,state,mobileno,panid,pincode,balance,password,image) values ('$ACCOUNTNO','$NAME','$CITY','$DISTRICT','$STATE','$MOBILENO','$PANID','$PINCODE',$BALANCE,'PASSWORD','$data')";
$status=mysqli_query($db,$q);
mysqli_close($db);
print "success";
}
else
{
	print "error";
}
/*
$f=$_FILES['image'];
echo "FILE NAME:".$f['name'];
echo "FILE TYPE:".$f['type'];
echo "FILE SIZE:".$f['size'
move_uploaded_file($f['tmp_name'],"photos/".$f['name']);
*/
?>
</br>
go to<a href="viewaccounts.php">view accounts</a>
</P>
</BODY>
</HTML>