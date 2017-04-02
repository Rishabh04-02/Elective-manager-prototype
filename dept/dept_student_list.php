<?php
include('dept_session.php');
include_once("../dbconnect.php");
$outname1=$_SESSION['login_user'];

?>
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
                                  <td >

                                  </td>
                                  <td class="inbox-small-cells"></td>
                                  <td class="view-message  dont-show">Roll No.</td>
                                  <td class="view-message ">Department</td>
                                  <td class="view-message ">CGPI</td>
                                  <td class="view-message  text-right">Priority</td>
                              </tr>

                              <?php
                                $abc="SELECT electiveid FROM dept_login WHERE deptid='$outname1'";
                                $result = mysqli_query($connection, $abc);
                                $rowa = mysqli_fetch_array($result);
                                $out=$rowa['electiveid'];

                            
                                $sql="SELECT * FROM $out";
                            
                                $result=mysqli_query($connection, $sql);
                                while($data=mysqli_fetch_array($result))
                                {
                              ?>
                              <tr class="unread">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                  <td class="view-message  dont-show"><?php echo "".$data['rollno']; ?></td>
                                  <td class="view-message "><?php echo "".$data['bracode']; ?></td>
                                  <td class="view-message "><?php echo "".$data['cgpi']; ?></td>
                                  <td class="view-message text-right"><?php echo "".$data['priority']; ?></td>
                              </tr>
                               <?php
                                }
                               ?>
                              </tbody>
                          </table>
                          </div>
                  </aside>
              </div>