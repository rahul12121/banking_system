<?PHP
session_start();
if(isset($_SESSION[customerid]))
{
  header("Location: accountalerts.php");
}
if(isset($_POST['check']))
{
	$code = $_SESSION['cap_code'];
	$user = $_POST['CAP'];
	if($user == $code)
 {
  include("config.php");
    $customerid=mysqli_real_escape_string($db,$_POST['customerid']);
    $mobileno=mysqli_real_escape_string($db,$_POST['mobileno']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $q="select * from account_info where customerid=$customerid && mobileno='$mobileno' && password='$password'";
    $result=mysqli_query($db,$q);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];
 $num=mysqli_num_rows($result);
    if($num==1)
   {
	header('location:http://localhost/banking_system/custloggedin.php');
   }
    else
   {
	header('location:http://localhost/banking_system/cust1invalidcustomer.php');
   }
 }
	else
	{
		header('location:http://localhost/banking_system/cust1captchainvalid.php');
	}
}
?>
