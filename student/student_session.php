<?php
   include('../dbconnect.php');
   session_start();
   
   //checking user for sessions
   $user_check = $_SESSION['login_user'];
   //checking in database username
   $ses_sql = mysqli_query($connection,"SELECT rollno from student_login where rollno = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['rollno'];

   if(!isset($_SESSION['login_user'])|| $login_session=='')
   {
      header("location:index.php");
   }
?>