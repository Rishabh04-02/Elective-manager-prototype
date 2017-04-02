<!DOCTYPE html>
<html>
<head>
	<title>Openelective management system</title>
<?php
	include_once('head.php');
  include_once('dbconnect.php');
?>
</head>
<body>
<div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm" href="#home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#home" class="smoothScroll">Home</a></li>
    		    <li> <a href="#about" class="smoothScroll"> About</a></li>
			  </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="admin/">Admin</a></li>
          <li><a href="student/"">Student section</a></li>
          <li><a href="dept/">Department section</a></li>
        </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>

<!-- <div id="particles">
<div id="intro">
<center>
<p>
<a href="admin/" class="btn">Admin</a> |
<a href="student/" class="btn">Student section</a> |
<a href="dept/" class="btn">Department section</a> 
</p>
</center>
</div>
</div> -->
<div class="jumbotron" style="background: transparent; color: white;">
  <br>
  <center>
    <h1>Open Elective Management System</h1>
    <div class="container">
    <div class="row little-padding">
                    <?php
                 $qr=mysqli_query($connection," SELECT COUNT(deptid) as total FROM dept_login");
                 $num_rows = mysqli_fetch_assoc($qr);
                 echo "<center>";
                 echo "Registered Departments - ";
                 echo $num_rows['total'];    
                 echo "</center>";  
                  
            include_once('info.php');
        ?>            
        
        
        
    </div>
</div>
</center>
</div>
</body>
</html>
