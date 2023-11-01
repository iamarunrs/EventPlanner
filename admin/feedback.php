<?php
require ("connection.php");

$nam=$_REQUEST["Name"];
$emai=$_REQUEST["Email"];
$dat=$_REQUEST["EventDate"];
$messag=$_REQUEST["Message"];

$res=$con->query("INSERT INTO `tb_feedback` (`name`, `email`, `date`, `message`) values('$nam', '$emai', '$dat', '$messag')");

$count=mysqli_affected_rows($con);

if ($count > 0)
{
echo '<script>alert("Feedback Submitted"); window.location="contact.php"; </script>';
exit;
} else {
echo '<script>alert("error submition"); window.location:"contact.php"; </script>';
exit;
}
?>