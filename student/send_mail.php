<?php 
//test this on an actual web server
include('../dbconnect.php');
   session_start();
   
   //checking user for sessions
   $user_check = $_SESSION['login_user'];
    $outname1=$_SESSION['login_user'];
   $abc1="SELECT email,allotted FROM student_login WHERE rollno='$outname1'";
  
   if($result1 = mysqli_query($connection, $abc1))
   {
   	if(result1['allotted']==1)
   	{
   	$email=result1['email'];
   	echo $email;

   $to = $email;
   $subject = 'Elective alloted';
    $body = 'congratulation you are selected for'  ;
    $headers = 'openelective';

   if(mail($to, $subject, $body, $headers))
   {
	   echo 'Email has been sent to '.$to;
    }
  else
    {
	   echo 'There was an error sending the email.';
      }
    }
}
      ?>