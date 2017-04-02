<?php
  include_once('dbconnect.php');
  echo "<br><center><b>Registered Electives</b></center>";
  $abc1="SELECT elecname,teachernm,seats,link FROM elective WHERE 1 ";
  if($result1 = mysqli_query($connection, $abc1))
  {
    echo '<table class="table"><thead><tr>';
    echo '<th>electives</th><th>teacher</th><th>seats</th><th>syllabus link</th></tr></thead><tbody><tr>';
  	while($rowa = mysqli_fetch_array($result1))
  	{
  		
  		echo "<td>".$rowa['elecname']."</td><td>".$rowa['teachernm']."</td><td> ".$rowa['seats']."</td><td> ".$rowa['link']."</td></tr>";

  	}
    echo '</tbody></table><br>';
    
  }
  echo "<center>Published Electives</center>";
  echo '<table class="table"><thead><tr>';
  $abc2="SELECT elecname,teachernm,seats,link FROM elective WHERE publish=1";
  echo '<th>electives</th><th>teacher</th><th>seats</th><th>syllabus link</th></tr></thead><tbody><tr><td>';
    if($result2 = mysqli_query($connection, $abc2))
    {
    while($rowa = mysqli_fetch_array($result2))
    {
      echo $rowa['elecname']."</td><td>".$rowa['teachernm']."</td><td> ".$rowa['seats']."</td><td> ".$rowa['link']."</td></tr></tbody></table>";
  }
}


?>
