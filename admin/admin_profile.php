<?php
include('admin_session.php');
//more features to implement

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin - Dashboard</title>
<?php
  include_once('admin_head.php');
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
                      <div class="inbox-body">
                          <a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-compose">
                              Delete Elective
                          </a>
                          
                      </div>
                      <?php
                            include_once('../dbconnect.php');
                            $qr=mysqli_query($connection," SELECT COUNT(elecname) as total FROM elective");
                            $num_rows = mysqli_fetch_assoc($qr);
                      ?>
                      <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
                          <li class="active">
                              <a href="#"><i class="fa fa-inbox"></i>Available Departments<span class="label label-info pull-right"><?php echo $num_rows['total']; ?></span></a>
                              </li>
                      </ul>

                      <?php
                            $qr=mysqli_query($connection," SELECT COUNT(elecname) as total FROM elective where publish=1");
                            $num_rows = mysqli_fetch_assoc($qr);
                      ?>
                      <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
                          <li class="active">
                              <a href="#"><i class="fa fa-inbox"></i>Published Electives<span class="label label-info pull-right"><?php echo $num_rows['total']; ?></span></a>
                          </li>
                      </ul>
                      <div class="inbox-body">
                      <form action="" method="post">
                            <div>
                        <input type="submit" name="view-el" id="view-el" tabindex="4" class="form-control btn btn-info" value="View Electives">
                      </div>
                          </form>
                          
                      </div>
                      

                      <!-- <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
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
                      </div>-->

                  </aside>
                  <aside class="lg-side">
                      <div class="inbox-head">
                          <h3>Admin - Dashboard</h3>
                          <form action="#" class="pull-right position">
                              <div class="input-append">
                                  <a href="../logout.php"><button class="btn sr-btn" type="button"><i class="fa fa-external-link"></i> Logout</button></a>
                              </div>
                          </form>
                      </div>


<?php

if(isset($_POST['view-el']))
{
  include_once('admin_view.php');
}
else
{
  include_once('admin_content.php');
}


?>
</div>
</body>
</html>