<div class="jumbotron">
<?php
include_once("../dbconnect.php");

$rollno=$_SESSION['login_user'];
$i=1;
echo "$rollno<br>";
//$val=
$rollno=$_REQUEST["rollno"];
$count=$_REQUEST["count"];
$prior=$_REQUEST["pri".$i];
echo "$rollno<br>";
$add="";
for($i=1;$i<=$count;$i++)
{	
	$prior=$_REQUEST["pri".$i];
	$sql = "UPDATE student_login SET pr".$i."='$prior' WHERE rollno = '$rollno'";
	//echo "$count";
	printf($sql);

	if(mysqli_query($connection, $sql))
	{
		//echo "updated";
		//$add=$add+"$prior";
		echo "updatd   ...";
	}
	//echo "$pri$i=$prior   <br>\n";
	echo "<br>";
}
//echo $prior;
//echo $count;
//echo $add;
//echo "updateds";
header('Location:student_profile.php?up=updated');
?>