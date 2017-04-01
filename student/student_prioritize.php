<!-- 
FEATURES TO IMPLEMENT -
create table $uname with students applying -> rollno, branch code , cgpa, priority
 -->
<div class="jumbotron">
<?php
include_once("../dbconnect.php");


if(isset($_POST['prioritize']))
{

//catch the details from form here
	$seats=$_POST['seats'];
	$link=$_POST['link'];
	$info=$_POST['info'];

	//session username
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

}

else
{

?>

<center>
<h3><code>Fill the details below to publish elective</code></h3>
</center>
<form id="elective-form" action="" method="post" role="form" >
									<div class="form-group">
										<input type="number" name="seats" id="seats" tabindex="1" class="form-control" placeholder="Number of seats available" value="" required>
									</div>
									<div class="form-group">
										<input type="text" name="link" id="link" tabindex="1" class="form-control" placeholder="Paste here the link to elective's syllabus (.pdf,.html)" value="" required>
									</div>
									<div class="form-group">
										<textarea name="info" class="form-control" placeholder="Add information about elective here" required></textarea>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="elective-submit" id="elective-submit" tabindex="4" class="form-control btn btn-info" value="Confirm Publish">
											</div>
										</div>
									</div>
</form>
</div>
<<?php 
}

?>