<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'banking_system');
$q="update balance set balance=balance-$amount where customerid='$customerid'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
mysqli_close($con);

?>

//html code how much amount debited and go to new balnce view