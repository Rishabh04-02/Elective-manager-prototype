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
$prior=$_POST['priority'];
	
	$outname=$_SESSION['login_user'];
	
	//fetch elective id from the current session username
	$abc="SELECT * FROM student_login WHERE rollno='$outname'";
	$result = mysqli_query($connection, $abc);
	$rowa = mysqli_fetch_array($result);
	$roll=$rowa['rollno'];
	$cgpi=$rowa['cgpi'];
	$dept=$rowa['brancode'];
	$alot=$rowa['allotted'];
	$pr1=$rowa['pr1'];
	$pr2=$rowa['pr2'];
	$pr3=$rowa['pr3'];
	$pr4=$rowa['pr4'];
	$pr5=$rowa['pr5'];
	$pr6=$rowa['pr6'];

	if ($alot!=NULL) 
	{
		echo "You've been allotted an elective<br>";
		header('Location: student_profile.php;refresh:5');
	}

	$count=1;
	
	

	for ($cn=1; $cn < 7; $cn++) 
	{
	 	$elec=$pr.$cn;
		if ($elec!=NULL) 
		{
			++$count;
		}
	}

	
	if($count==7)
	{
		//update priority values in user table
	$sql = "UPDATE student_login SET pr1='$prior' WHERE rollno = '$outname'";
	
	if (mysqli_query($connection, $sql)) 
			{
    		echo "<center>Priority added</center><br>";
    		}
    else
    		{
    			echo "Error: " . $creat . "<br>" . mysqli_error($connection);
    		}

	//create entry in elective table
    $sql="INSERT INTO $prior(rollno,bracode,cgpi,priority) VALUES('$roll','$dept','$cgpi',1)";

    if (mysqli_query($connection, $sql)) 
			{
    		echo "<center>Application to elective created</center><br>";
    		}
    else
    		{
    			echo "Error: " . $creat . "<br>" . mysqli_error($connection);
    		}

	}

	//priority 2
	else if($count==6)
	{
		//update priority values in user table
	$sql = "UPDATE student_login SET pr2='$prior' WHERE rollno = '$outname'";
	
	if (mysqli_query($connection, $sql)) 
			{
    		echo "<center>Priority added</center><br>";
    		}
    else
    		{
    			echo "Error: " . $creat . "<br>" . mysqli_error($connection);
    		}

	//create entry in elective table
    $sql="INSERT INTO $prior(rollno,bracode,cgpi,priority) VALUES('$roll','$dept','$cgpi',2)";

    if (mysqli_query($connection, $sql)) 
			{
    		echo "<center>Application to elective created</center><br>";
    		}
    else
    		{
    			echo "Error: " . $creat . "<br>" . mysqli_error($connection);
    		}

	}
	
	//priority 3
	else if($count==5)
	{
		//update priority values in user table
	$sql = "UPDATE student_login SET pr3='$prior' WHERE rollno = '$outname'";
	
	if (mysqli_query($connection, $sql)) 
			{
    		echo "<center>Priority added</center><br>";
    		}
    else
    		{
    			echo "Error: " . $creat . "<br>" . mysqli_error($connection);
    		}

	//create entry in elective table
    $sql="INSERT INTO $prior(rollno,bracode,cgpi,priority) VALUES('$roll','$dept','$cgpi',3)";

    if (mysqli_query($connection, $sql)) 
			{
    		echo "<center>Application to elective created</center><br>";
    		}
    else
    		{
    			echo "Error: " . $creat . "<br>" . mysqli_error($connection);
    		}

	}

	//priority 4
	else if($count==4)
	{
		//update priority values in user table
	$sql = "UPDATE student_login SET pr4='$prior' WHERE rollno = '$outname'";
	
	if (mysqli_query($connection, $sql)) 
			{
    		echo "<center>Priority added</center><br>";
    		}
    else
    		{
    			echo "Error: " . $creat . "<br>" . mysqli_error($connection);
    		}

	//create entry in elective table
    $sql="INSERT INTO $prior(rollno,bracode,cgpi,priority) VALUES('$roll','$dept','$cgpi',4)";

    if (mysqli_query($connection, $sql)) 
			{
    		echo "<center>Application to elective created</center><br>";
    		}
    else
    		{
    			echo "Error: " . $creat . "<br>" . mysqli_error($connection);
    		}

	}

	//priority 5
	else if($count==3)
	{
		//update priority values in user table
	$sql = "UPDATE student_login SET pr5='$prior' WHERE rollno = '$outname'";
	
	if (mysqli_query($connection, $sql)) 
			{
    		echo "<center>Priority added</center><br>";
    		}
    else
    		{
    			echo "Error: " . $creat . "<br>" . mysqli_error($connection);
    		}

	//create entry in elective table
    $sql="INSERT INTO $prior(rollno,bracode,cgpi,priority) VALUES('$roll','$dept','$cgpi',5)";

    if (mysqli_query($connection, $sql)) 
			{
    		echo "<center>Application to elective created</center><br>";
    		}
    else
    		{
    			echo "Error: " . $creat . "<br>" . mysqli_error($connection);
    		}

	}

	//priority 6
	else if($count==2)
	{
		//update priority values in user table
	$sql = "UPDATE student_login SET pr6='$prior' WHERE rollno = '$outname'";
	
	if (mysqli_query($connection, $sql)) 
			{
    		echo "<center>Priority added</center><br>";
    		}
    else
    		{
    			echo "Error: " . $creat . "<br>" . mysqli_error($connection);
    		}

	//create entry in elective table
    $sql="INSERT INTO $prior(rollno,bracode,cgpi,priority) VALUES('$roll','$dept','$cgpi',6)";

    if (mysqli_query($connection, $sql)) 
			{
    		echo "<center>Application to elective created</center><br>";
    		}
    else
    		{
    			echo "Error: " . $creat . "<br>" . mysqli_error($connection);
    		}

	}
	//priority 7
	else 
	{
		//update priority values in user table
	$sql = "UPDATE student_login SET pr7='$prior' WHERE rollno = '$outname'";
	
	if (mysqli_query($connection, $sql)) 
			{
    		echo "<center>Priority added</center><br>";
    		}
    else
    		{
    			echo "Error: " . $creat . "<br>" . mysqli_error($connection);
    		}

	//create entry in elective table
    $sql="INSERT INTO $prior(rollno,bracode,cgpi,priority) VALUES('$roll','$dept','$cgpi',7)";

    if (mysqli_query($connection, $sql)) 
			{
    		echo "<center>Application to elective created</center><br>";
    		}
    else
    		{
    			echo "Error: " . $creat . "<br>" . mysqli_error($connection);
    		}

	}
	
}
else
{
?>

<center>
<h3><code>Select your most preferred electives in order</code></h3>

<?php

		$abc="SELECT  elecname  FROM elective WHERE publish=1";
                        if($result = mysqli_query($connection, $abc))
                              {
                                while($rowa = mysqli_fetch_array($result))
                                  { 
                                    $out=$rowa['elecname'];
?>
						    <form method="post" action="">
						    <input type="submit" name="priority" value="<?php echo $out; ?>" style="width: 30%;"> <br>
							</form>
						 <!-- <div>
                        <input type="submit" name="priority" id="<?php //echo $out; ?>" tabindex="4" class="form-control btn btn-info" value="<?php //echo $out; ?>">
                      </div>-->
                          
									<?php
								}
							}
							?>						
</div>
</center>
<?php 
}

?>