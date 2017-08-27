<?php
include("config.php");
$sql = "SELECT imagetype,image FROM account_info ";
$result = mysqli_query("$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
$row = mysqli_fetch_array($result);
header("Content-type: " . $row["imagetype"]);
echo $row["image"];
}
mysql_close($db);
?>