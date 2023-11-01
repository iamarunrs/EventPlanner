<?php
require ("connection.php");

$name=$_REQUEST["name"];
$email=$_REQUEST["username"];
$password=$_REQUEST["password"];
$confirmpass=$_REQUEST["confirmpassword"];

$checkemail=$con->query("SELECT email FROM tb_sign WHERE email='$email'");

if($checkemail->num_rows > 0)
{
	echo "<script>alert('Email id Exists'); window.location='signup.php'; </script>";
	exit; 
}

$res=$con->query("INSERT INTO tb_sign (name, email, password, confirm_password) values ('$name', '$email', '$password', '$confirmpass')");

$count=mysqli_affected_rows($con);

if ($count > 0)
{
	echo "<script> alert('Signup Success'); window.location='login.php'; </script>";
	exit;
} else {
	echo "<script> alert('error signup'); window.location='signup.php'; </script>";
	exit;
}