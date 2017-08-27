<?php
session_start();
include("config.php");
$customerid=$_POST['customerid'];
$mobileno=$_POST['mobileno'];
$accountno=$_POST['accountno'];
$q="select * from account_info where customerid='$customerid' && accountno='$accountno' && mobileno='$mobileno'";
$result=mysqli_query($db,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	header('location:http://localhost/banking_system/custloggedin1.php');
}
else
{
	header('location:http://localhost/banking_system/customer1.php');
}

?>