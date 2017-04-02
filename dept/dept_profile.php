<?php
include('dept_session.php');
//more features to implement

?>
<!DOCTYPE html>
<html>
<head>
  <title>Department - Dashboard</title>
<?php
  include_once('dept_head.php');
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
                              <h5><a href="#"><?php echo $_SESSION['login_user']; ?></a></h5>
                              <span><a href="#"><?php echo "Welcome" ?></a></span>
                          </div>
                          <a class="mail-dropdown pull-right" href="javascript:;">
                              <i class="fa fa-chevron-down"></i>
                          </a>
                      </div>
<?php 
include_once("../dbconnect.php");
  
  //session username
  $outname1=$_SESSION['login_user'];

  //fetch elective id from the current session username
  $abc1="SELECT electiveid FROM dept_login WHERE deptid='$outname1'";
  $result1 = mysqli_query($connection, $abc1);
  $rowa1 = mysqli_fetch_array($result1);
  $out1=$rowa1['electiveid'];
  
  //now using the elective id fetch the publish status
  $abc2="SELECT publish FROM elective WHERE elecname='$out1'";
  $result2 = mysqli_query($connection, $abc2);
  $rowa2 = mysqli_fetch_array($result2);
  $out2=$rowa2['publish'];
  
  //check publish value and decide the name of the button
  if ($out2==1) 
  {
    $pub="Elective published";
  }
  else
  {
    $pub="publish-elective";
  }

?>
                      <div class="inbox-body">
                          <!-- publish elective form -->
                          <form action="" method="post">
                            <div>
                        <input type="submit" name="<?php echo $pub; ?>" id="<?php echo $pub; ?>" tabindex="4" class="form-control btn btn-info" value="<?php echo $pub; ?>">
                      </div>
                          </form>
                      </div>
                      <!-- publish elective form -->
                        <div class="inbox-body">
                          
                        <!-- update elective form -->
                          <form action="" method="post">
                            <div>
                        <input type="submit" name="update-elective" id="update-elective" tabindex="4" class="form-control btn btn-info" value="update-elective">
                      </div>
                          </form>
                          <!-- update elective form ends -->
                          <!-- delete elective form -->
                           <form action="" method="post">
                      </div>
                        <div class="inbox-body">
                          
                          <input type="submit" name="delete-elective" id="delete-elective" tabindex="4" class="btn btn-compose" value=" Delete-elective">

                      </div>
                      </form>
                      <!-- update elective form ends -->

                      <!--st-->
                       <ul class="inbox-nav inbox-divider nav nav-pills nav-stacked labels-info inbox-divider">
                      <li class="active">
                          <a href="#"><i class="fa fa-inbox"></i> Student List <span class="label label-info pull-right"></a>
                            <form action="" method="post">
                            <div>
                        <input type="submit" name="student-list" id="student-list" tabindex="4" class="form-control btn btn-info" value="View Student">
                      </div>
                          </form>
                          <form action="" method="post">
                            <div>
                        <input type="submit" name="selected-student" id="selected-student" tabindex="4" class="form-control btn btn-info" value="Selected Student">
                      </div>
                          </form>
                              </li>

                      </ul>
                      <!--sdf_-->       
                       
                      <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
                          <li> <h4>Labels</h4> </li>
                          <li> <a href="#"> <i class=" fa fa-sign-blank text-danger"></i> Work </a> </li>
                      </ul>
                      <ul class="nav nav-pills nav-stacked labels-info ">
                          <li> <h4>Buddy online</h4> </li>
                          <li> <a href="#"> <i class=" fa fa-circle text-success"></i>Alireza Zare <p>I do not think</p></a>  </li>
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
                      </div>

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

if(isset($_POST['publish-elective']))
{
  include_once('dept_publishelec.php');
}
else if($_POST['update-elective'])
{
  include_once('dept_updateelec.php');
}
else if(isset($_POST['elective-submit']))
{
  include_once('dept_publishelec.php');
}
else if(isset($_POST['student-list']))
{
  include_once('dept_student_list.php');
}
else if(isset($_POST['selected-student']))
{
  include_once('dept_selected_student.php');
}
else if(isset($_POST['delete-elective']))
{
  include_once('dept_delete_elective.php');
}
else
{

     include_once('dept_content.php'); 
}

?>
</div>
</body>
</html>