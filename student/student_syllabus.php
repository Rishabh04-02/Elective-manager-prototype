<?php
  
  include_once("../dbconnect.php");

	$dep_id=$_POST['syllabus'];
	//echo "$dep_id";
	$abc="SELECT link,seats FROM elective WHERE elecname='$dep_id' ";
  if($result = mysqli_query($connection, $abc))
  {
 while($rowa = mysqli_fetch_array($result))
  {
  $seats=$rowa['seats'];
  $link=$rowa['link'];
  echo "Seats Availabe"."=".$seats."<br>";
  echo $link;
}
}
  



?>