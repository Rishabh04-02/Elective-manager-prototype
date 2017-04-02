<!-- 
FEATURES TO IMPLEMENT -
create table $uname with students applying -> rollno, branch code , cgpa, priority
 -->
<div class="jumbotron">
<?php
include_once("../dbconnect.php");
                     

if(isset($_POST['priority']))
{

//catch the details from form here
	$rollno=$_SESSION['login_user'];
$prior=$_POST['priority'];
echo "$prior";
//$sql = "UPDATE student_login SET pr2=$prior WHERE rollno= '$rollno'" ;
//if (mysqli_query($connection, $sql)) 
//{
	//echo "sucees given".<br>
//	i++;
//}


/*

	
	$outname=$_SESSION['login_user'];
	
	//fetch elective id from the current session username
	$abc="SELECT electiveid FROM dept_login WHERE deptid='$outname'";
	$result = mysqli_query($connection, $abc);
	$rowa = mysqli_fetch_array($result);
	$out=$rowa['electiveid'];
	
	
	//update values in electives table
	$sql = "UPDATE elective SET publish=1 ,seats = $seats, info='$info', link='$link' WHERE elecname = '$out'" ;

		if (mysqli_query($connection, $sql)) 
		{
    		echo "<center>Elective details updated</center><br>";

    		//publishing elective by creating a new registration table for elective
   $creat="CREATE TABLE $out(rollno varchar(10) PRIMARY KEY, bracode varchar(10),cgpi varchar(5),priority int(2))";

    		if (mysqli_query($connection, $creat))
    		{
    			echo "<center>Elective successfully published</center><br>";
    			//adding a refresh button 
    			$url="dept_profile.php";
    			print("<center><a href=$url >Click here</a></center>");
    		}
    		else
    		{
    			echo "Error: " . $creat . "<br>" . mysqli_error($connection);
    		}


		} 
		
		else 
		{
    		echo "Error: " . $sql . "<br>" . mysqli_error($connection);
		}
*/
}
else
{
?>

<center>
<h3><code>Prioritize the electives below</code></h3>
</center>
<form id="elective-forma" action="" method="post" role="form" >
<?php

		$abc="SELECT  elecname  FROM elective WHERE publish=1";
                        if($result = mysqli_query($connection, $abc))
                              {
                                while($rowa = mysqli_fetch_array($result))
                                  { 
                                    $out=$rowa['elecname'];
?>
						<div>
                        <input type="submit" name="priority" id="<?php echo $out; ?>" tabindex="4" class="form-control btn btn-info" value="<?php echo $out; ?>">
                      </div>
                          
									<?php
								}
							}
							?>						
									
							
</form>
</div>
<?php 
}

?>