<?php
include('dept_session.php');
include_once("../dbconnect.php");
$outname1=$_SESSION['login_user'];

$abc1="SELECT electiveid FROM dept_login WHERE deptid='$outname1'";
  $result1 = mysqli_query($connection, $abc1);
  $rowa1 = mysqli_fetch_array($result1);
  $out1=$rowa1['electiveid'];
$rollno=$_REQUEST['rollno'];
$abc="Delete FROM $out1 WHERE rollno=$rollno ";
echo $abc;

if(mysqli_query($connection, $abc))
{
	echo "Deleted";
}
else
{
	echo "error";
}
header('Location:dept_profile.php?check=1');
?>