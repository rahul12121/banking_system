<?php
session_start();
if(session_destroy()) {
header('location:http://localhost/banking_system/adminloginform.php');
}
?>