

<div class="inbox-body">
                         <div class="mail-option">
                             
                          <table class="table table-inbox table-hover">
                            <tbody>
                              <tr class="unread">
                                  <td class="view-message  dont-show">Total Seats</td>
                                  <td class="view-message ">Elective - syllabus</td>
                          
                              </tr>


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
                             // echo "Seats Availabe"."=".$seats."<br>";
                             // echo "Teacher Name"."=".$tech."<br>";
                             // echo $link;

                            ?>
                              <form id="accept-reject" action="" method="post" role="form">
                              <tr class="unread">
                                  
                                  <td class="view-message "><?php echo $seats; ?></td>
                                  <td class="view-message "><a href="<?php echo $link; ?>" target="_blank"><?php echo $link; ?></a></td>
                                  
                                              

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
             
        

