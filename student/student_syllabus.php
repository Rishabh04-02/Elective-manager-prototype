


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
  //$tech=$rowa['teachernm'];
  echo "Seats Availabe"."=".$seats."<br>";
 // echo "Teacher Name"."=".$tech."<br>";
  echo $link;
}
}
                              

                              ?>
                              <form id="accept-reject" action="" method="post" role="form">
                              <tr class="unread">
                                  <td class="view-message  " name="roll-student" id="roll-student"><?php echo $seats ?></td>
                          
                                  <td class="view-message ">
                                    
                                    <button type="button" class="btn btn-link" id="reject-student" name="reject-student" value="Reject"><?php echo $link ?></button>
                                   
                                  </td>
                                              

                              </tr>
                              </form>
                              <?php
                                }
                              }
                              ?>
                           
                              </tbody>
                          </table> 
                          </div>
                  </aside>
              </div>
  
