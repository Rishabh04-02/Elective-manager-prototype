

<div class="inbox-body">
                         <div class="mail-option">
                             <div class="chk-all">
                                 <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                                 <div class="btn-group">
                                     <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                         All
                                         <i class="fa fa-angle-down "></i>
                                     </a>
                                     <ul class="dropdown-menu">
                                         <li><a href="#"> None</a></li>
                                         <li><a href="#"> Read</a></li>
                                         <li><a href="#"> Unread</a></li>
                                     </ul>
                                 </div>
                             </div>

                             <div class="btn-group">
                                 <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                     <i class=" fa fa-refresh"></i>
                                 </a>
                             </div>
                             <div class="btn-group hidden-phone">
                                 <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
                                     More
                                     <i class="fa fa-angle-down "></i>
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                     <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                     <li class="divider"></li>
                                     <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                 </ul>
                             </div>
                             <div class="btn-group">
                                 <a data-toggle="dropdown" href="#" class="btn mini blue">
                                     Move to
                                     <i class="fa fa-angle-down "></i>
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                     <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                     <li class="divider"></li>
                                     <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                 </ul>
                             </div>

                             <ul class="unstyled inbox-pagination">
                                 <li><span>1-50 of 234</span></li>
                                 <li>
                                     <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                 </li>
                                 <li>
                                     <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                 </li>
                             </ul>
                         </div>
                          <table class="table table-inbox table-hover">
                            <tbody>
                              <tr class="unread">
                                  <td class="view-message  dont-show">Roll No.</td>
                                  <td class="view-message ">Department</td>
                          
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
                                  <td class="view-message "><?php echo $link; ?></td>
                                  
                                              

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
             
        

