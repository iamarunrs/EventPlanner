<?php
require ("connection.php");
session_start();

$email=$_REQUEST["username"];
$password=$_REQUEST["password"];

$res=$con->query("SELECT * FROM tb_sign where email='$email' and password='$password' ");

$count=$res->num_rows;


echo '<!DOCTYPE html><head>
<script src="admin/assets/AlertifyJS-master/build/alertify.min.js"></script>
<link rel="stylesheet" href="admin/assets/AlertifyJS-master/build/css/themes/default.min.css">
<link rel="stylesheet" href="admin/assets/AlertifyJS-master/build/css/alertify.min.css">
</head><body>';

if ($count > 0)
{
	$row=$res->fetch_assoc();
	$logid=$row["logid"];
	$_SESSION["logid"]=$logid;
	$_SESSION["username"]=$email;

	echo "<script> alertify.alert('Login Success', function(){

	 window.location='welcome.php'}); </script>";
	exit;
} else {
	echo "<script> alertify.alert('error login', function(){

	 window.location='login.php'}); </script>";
	exit;
}
echo '</body></html>';

?>