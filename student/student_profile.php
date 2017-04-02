<?php
include('student_session.php');
//more features to implement

?>
<!DOCTYPE html>
<html>
<head>
	<title>Student - Dashboard</title>
<?php
  include_once('student_head.php');
  include_once("../dbconnect.php");

  //session username
  $outname1=$_SESSION['login_user'];

  //fetch the set value for pr1
  $abc1="SELECT pr1 FROM student_login WHERE rollno='$outname1'";
  $result1 = mysqli_query($connection, $abc1);
  $rowa1 = mysqli_fetch_array($result1);
  $out1=$rowa1['pr1'];
  
  
  //check if priority is set/not
  if ($out1==NULL) 
  {
    $pub="Prioritize Electives";
  }
  else
  {
    $pub="Elective Prioritized";
  }
?>		
</head>
<body>
<div class="container">
<div class="mail-box">
                  <aside class="sm-side">
                      <div class="user-head">
                          <a class="inbox-avatar" href="javascript:;">
                              <img  width="64" height="64" src="../books.jpg">
                          </a>
                          <div class="user-name">
                              <h5><a href="#"><?php echo $login_session; ?></a></h5>
                              <span><a href="#">Welcome</a></span>
                          </div>
                          <a class="mail-dropdown pull-right" href="javascript:;">
                              <i class="fa fa-chevron-down"></i>
                          </a>
                      </div>
                      <div class="inbox-body">
                          <form action="" method="post">
                            <div>
                        <input type="submit" name="prioritize" id="Prioritized Electives" tabindex="4" class="form-control btn btn-info" value="Prioritize Electives">
                      </div>
                          </form>
                      </div>
                      <ul class="inbox-nav inbox-divider nav nav-pills nav-stacked labels-info inbox-divider">
                      <li> <h4>Available Electives</h4> </li>
                      <?php
                            $abc="SELECT  elecname  FROM elective WHERE publish=1";
                            if($result = mysqli_query($connection, $abc))
                              {
                                while($rowa = mysqli_fetch_array($result))
                                  { 
                                    $out=$rowa['elecname'];
                                    $outname1=$_SESSION['login_user'];
                                    $query="SELECT * FROM $out WHERE rollno='$outname1' and selects=1";
                                   // echo $query;
                                    $color="color:red";
                                    $icon="fa-times";
                                    if($result1 = mysqli_query($connection, $query))
                                    {
                                      if($data=mysqli_fetch_array($result1))
                                      {
                                        //$x="yes".$data['rollno'];
                                        $color="color:green";
                                        $icon="fa-check";
                                      }
                                      else
                                      {  
                                        $color="color:red";
                                        $icon="fa-times";
                                      } 

                                     } 

  
                      ?>
                          <li class="active">
                          <a href="#"><i class="fa <?php echo $icon; ?>" style="<?php echo $color; ?>"></i> <?php echo $out; ?> <span class="label label-info pull-right"></a>
                            <form action="" method="post">
                            <div>
                        <input type="submit" name="syllabus" id="<?php echo $out; ?>" tabindex="4" class="form-control btn btn-info" value="<?php echo $out; ?>">
                      </div>
                          </form>
                              </li>
                              <?php 
                                
                                    }
                                     }
                              ?>
                       
                      </ul>
                      <!-- <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
                          <li> <h4>Labels</h4> </li>
                          <li> <a href="#"> <i class=" fa fa-sign-blank text-danger"></i> Work </a> </li>
                      </ul>
                      <ul class="nav nav-pills nav-stacked labels-info ">
                          <li> <h4>Buddy online</h4> </li>
                          <li> <a href="#"> <i class=" fa fa-circle text-success"></i>Raman <p>I do not think</p></a>  </li>
                      </ul>

                      <div class="inbox-body text-center">
                          <div class="btn-group">
                              <a class="btn mini btn-primary" href="javascript:;">
                                  <i class="fa fa-plus"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a class="btn mini btn-success" href="javascript:;">
                                  <i class="fa fa-phone"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a class="btn mini btn-info" href="javascript:;">
                                  <i class="fa fa-cog"></i>
                              </a>
                          </div>
                      </div>-->

                  </aside>
                  <aside class="lg-side">
                      <div class="inbox-head">
                          <h3>Dashboard - Features to implement</h3>
                          <form action="#" class="pull-right position">
                              <div class="input-append">
                                  <a href="../logout.php"><button class="btn sr-btn" type="button"><i class="fa fa-external-link"></i> Logout</button></a>
                              </div>
                          </form>
                      </div>
<?php

if(isset($_POST['prioritize']))
{
  include_once('student_prioritize.php');
}
else if(isset($_POST['priority']))
{
  include_once('student_prioritize.php');
}
else if(isset($_POST['syllabus']))
{
  include_once('student_syllabus.php'); 
}
else
{
  include_once('student_content.php'); 
}

?>
</div>
</body>
</html>