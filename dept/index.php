<!DOCTYPE html>
<html>
<head>
	<title>Department Section</title>
<?php
  include_once('dept_head.php');
?>
</head>
<body>
<center>
<div class="container">
<h1>Welcome to Department section</h1>
<h3><code>To continue please Login/Register</code></h3>
 <div class="jumbotron">

<?php
include_once("../dbconnect.php");
session_start();

//checking if user sessions is set
   $user_check = $_SESSION['login_user'];
   //checking in database username
   $ses_sql = mysqli_query($connection,"SELECT deptid from dept_login where deptid = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['deptid'];
   
   //if user session is set then redirecting user to profile
   if(isset($_SESSION['login_user'])&& $login_session!='')
   {
      header("location:dept_profile.php");
   }

//New department Register

if(isset($_POST['register-submit']))
{

	$deptidd=$_POST['deptidd'];
	$teacher=$_POST['teacher'];
    $elecid=$_POST['electiveidd'];
    $email=$_POST['email'];
    $pswd=$_POST['password'];
    $pswd1=$_POST['confirm-password'];

    //checking the password and the confirm password
    if ($pswd==$pswd1) 
    {
    	$pswd=trim($pswd);
    	$pswd=md5($pswd);
    	
    	//inserting values into database
    	$sql = "INSERT INTO dept_login(deptid, teachername, pswd, electiveid, email) VALUES ('$deptidd', '$teacher', '$pswd', '$elecid','$email')";

		if (mysqli_query($connection, $sql)) 
		{
    	echo "Department added successfully, ";
		} 
		
		else 
		{
    	echo "Error: " . $sql . "<br>" . mysqli_error($connection);
		}

		//adding elective entry to another table
		$elesql = "INSERT INTO elective(elecname,teachernm,info,link) VALUES ('$elecid','$teacher','updating soon','link coming soon')";

		if (mysqli_query($connection, $elesql)) 
		{
    	echo "Elective created successfully<br>";
		} 
		
		else 
		{
    	echo "Error: " . $elesql . "<br>" . mysqli_error($connection);
		}

		mysqli_close($connection);


    }
    else
    {
    	echo "Passwords did not match<br>";
    }
    
}


//Login code here
if(isset($_POST['login-submit']))
{
		
	$usrname = mysqli_real_escape_string($connection,$_POST['deptidd']);
    $pswd = md5(mysqli_real_escape_string($connection,$_POST['password'])); 
       

    $sql = "SELECT * FROM dept_login WHERE deptid = '$usrname' and pswd = '$pswd'";
    $result = mysqli_query($connection,$sql);
    //for use in session.php file for checking sessions
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
              
    $count = mysqli_num_rows($result);
      
    // If result matched $usrname and $pswd, table row must be 1 row
		
    if($count == 1) 
    {
        $_SESSION['login_user'] = $usrname;
        header("location: dept_profile.php");
    }
    else 
    {
        echo "Your <b>Username</b> or <b>Password</b> is invalid<br>";
    }

}


?>


     	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="deptidd" id="username" tabindex="1" class="form-control" placeholder="Department id" pattern="(?=.*[a-z]).{3,}" value="" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" pattern=".{6,}" required>
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log-in">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
												 </div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="deptidd" id="username" tabindex="1" class="form-control" placeholder="Department id" pattern="(?=.*[a-z]).{3,}" value="" required>
									</div>
									<div class="form-group">
										<input type="text" name="teacher" id="teacher" tabindex="1" class="form-control" placeholder="Teacher" value="" required>
									</div>
									<div class="form-group">
										<input type="text" name="electiveidd" id="elective" tabindex="1" class="form-control" placeholder="Elective id" value="" required>
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password > 6 characters" pattern=".{6,}" required>
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" pattern=".{6,}" placeholder="Confirm Password > 6 characters" required> 
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</center>
</body>
</html>