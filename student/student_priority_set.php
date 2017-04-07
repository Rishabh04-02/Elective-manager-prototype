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
	$getsql="SELECT * FROM student_login where rollno='$rollno'";
	if($res=mysqli_query($connection, $getsql))
	{
		if($data= mysqli_fetch_array($res))
		{
			$rollno=$data['rollno'];
			$cgpi=$data['cgpi'];
			$bracode=$data['brancode'];
			//INSERT INTO command to insert data into MySQL table: INSERT INTO table_name ( field1, field2,...fieldN ) VALUES ( value1, value2,...valueN );
			$getsql1="SELECT * FROM $prior where rollno='$rollno'";
			$resx=mysqli_query($connection, $getsql1);
			if( mysqli_fetch_array($resx))
			{
				$delsql1="DELETE FROM $prior where rollno='$rollno'";
				echo "$getsql1 $delsql1";
				if(mysqli_query($connection, $delsql1))
				{
					echo "delete $rollno $prior<br> ";
				}
			}
			else
			{
				
			}

			$sqlin ="INSERT INTO $prior ( rollno,bracode,cgpi,priority,selects) values('$rollno','$bracode',$cgpi,$i,0)";

				if(mysqli_query($connection, $sqlin))
				{
					
					echo "$sqlin<br>";
					echo "update1";
				}
				else {
					echo "error";
				}
			
		}
		else{
			echo "error";
		}
	}
	else{
			echo "error";
		}
	$sql = "UPDATE student_login SET pr".$i."='$prior' WHERE rollno = '$rollno'";

	//echo "$count";
	printf($sql);

	if(mysqli_query($connection, $sql))
	{
		//echo "updated";
		//$add=$add+"$prior";
		echo "<br>";
		printf($sql);
		echo "updatd   ...";
	}
	else{
			echo "error";
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