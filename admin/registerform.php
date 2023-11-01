<!DOCTYPE html>
<html lang="en">
<head>
    <script src="admin/assets/AlertifyJS-master/build/alertify.min.js"></script>
    <link rel="stylesheet" href="admin/assets/AlertifyJS-master/build/css/themes/default.min.css">
    <link rel="stylesheet" href="admin/assets/AlertifyJS-master/build/css/alertify.min.css">
</head>
<body>
<?php
require ("connection.php");
session_start();

$name=$_REQUEST["Name"];
$email=$_REQUEST["Email"];
$phone=$_REQUEST["phone"];
$date=$_REQUEST["EventDate"];
$message=$_REQUEST["Message"];

$checkevent = $con->query("SELECT * FROM `tb_register` WHERE `Eventdate` = '$date'");

if ($checkevent->num_rows > 0 ) {

    echo "<script>alertify.alert('Event date already exists', function(){ window.location='enquiry.php'});</script>";

	exit;

} else {

$res=$con->query("INSERT into `tb_register` (Name, Email, Phone, Eventdate, Message) values ('$name', '$email', '$phone', '$date', '$message')");

$count=mysqli_affected_rows($con);

if ($count > 0) {
	echo "<script>alertify.alert('Registered Successfully', function(){
	 window.location='enquiry.php'}); </script>";
	exit;
}  else {
	echo "<script>alertify.alert('error register. Please try again'); window.location='enquiry.php'; </script>";
	exit;
}
}
?>
</body>
</html>
