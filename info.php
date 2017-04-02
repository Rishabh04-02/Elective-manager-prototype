<?php
  include_once('dbconnect.php');
  $abc1="SELECT elecname,teachernm,seats,link FROM elective WHERE 1 ";
  if($result1 = mysqli_query($connection, $abc1))
  {
    echo "electives"." "."teacher"." "."seats"." "."syllabus"."link"."<br>";
  	while($rowa = mysqli_fetch_array($result1))
  	{
  		
  		echo $rowa['elecname']." ".$rowa['teachernm']." ".$rowa['seats']." ".$rowa['link']."<br>";

  	}
    echo "<br>";
  }
  $abc2="SELECT elecname,teachernm,seats,link FROM elective WHERE publish=1";

    echo "Registered"." "."Elective"."<br>";
    echo "electives"." "."teacher"." "."seats"." "."syllabus"."link"."<br>";
    if($result2 = mysqli_query($connection, $abc2))
    {
    while($rowa = mysqli_fetch_array($result2))
    {
      //if(&rowa['publish']==1)
      //{
      echo $rowa['elecname']." ".$rowa['teachernm']." ".$rowa['seats']." ".$rowa['link']."<br>";

    //}
  }
}


?>