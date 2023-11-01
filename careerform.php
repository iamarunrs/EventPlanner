<?php
require("connection.php");
session_start();

$signid=$_REQUEST["signid"];
$name=$_REQUEST["name"];
$age=$_REQUEST["age"];
$email=$_REQUEST["email"];
$phone=$_REQUEST["phone"];
$gender=$_REQUEST["gender"];
$edu=$_REQUEST["Qualification"];
$myctry=$_REQUEST["ctry"];
$stat=$_REQUEST["state"];
$img=$_FILES["image"]["name"];
$resume=$_FILES["resume"]["name"];



$res=$con->query("INSERT INTO tb_career (logid, Name, DOB, email, PH, Gender, education, selectcountry, selectstate, Photo, Resume) values ('$signid', '$name', '$age', '$email', '$phone', '$gender', '$edu', (select name from countries where cont_id='$myctry'), (select sname from states where stat_id='$stat'), '$img', '$resume')");

$count=mysqli_affected_rows($con);

if ($count > 0)
{
	move_uploaded_file($_FILES["image"]["tmp_name"], 'admin/assets/fileall/' . $img);
	move_uploaded_file($_FILES["resume"]["tmp_name"], 'admin/assets/fileall/' .$resume);
	echo "<script>alert('Form Submitted'); window.location='careers.php'; </script>";
	exit;
} else {
	echo "<script>alert('error submitting file'); window.location='careers.php';</script>";
	exit;
}
?>