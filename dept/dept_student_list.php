<?php
include('dept_session.php');
include_once("../dbconnect.php");
$outname1=$_SESSION['login_user'];

if(isset($_POST['accept-student']))
{
  $rollno=$_POST['roll-student'];
  //echo "".$rollno."sss";
}
else
{
 // echo "xxxx";


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
                                  <td class="view-message  dont-show">Roll No.</td>
                                  <td class="view-message ">Department</td>
                                  <td class="view-message ">CGPI</td>
                                  <td class="view-message "></td>
                                  <td class="view-message " onclick="pri()">Priority<i class="fa fa-arrow-down" aria-hidden="true" ></i></td>
                                  <td class="view-message ">condition</td>
                                  <td >

                                  </td>
                                  <td class="inbox-small-cells text-right"></td>
                              </tr>

                              <?php
                                $abc="SELECT electiveid FROM dept_login WHERE deptid='$outname1'";
                                $result = mysqli_query($connection, $abc);
                                $rowa = mysqli_fetch_array($result);
                                $out=$rowa['electiveid'];

                             
                                //SELECT * FROM  `csd315` ORDER BY  `csd315`.`priority` ASC
                            
                                $sql="SELECT * FROM $out where selects=0 ";
                                if($_REQUEST['pri']==1)
                                  $sql = $sql."ORDER BY `priority` ASC ";
                                
                                $result=mysqli_query($connection, $sql);
                                while($data=mysqli_fetch_array($result))
                                {
                              ?>
                              <form id="accept-reject" action="" method="post" role="form">
                              <tr class="unread">
                                  <td class="view-message  dont-show" name="roll-student" id="roll-student"><?php echo $data['rollno']; ?></td>
                                  <td class="view-message "><?php echo $data['bracode']; ?></td>
                                  <td class="view-message "><?php echo $data['cgpi']; ?></td>
                                  <td class="view-message "></td>
                                  <td class="view-message "><?php echo $data['priority']; ?></td>
                                  <td class="view-message " id="<?php echo $data['rollno']; ?>">none</td>
                                 
                                 
                                  <td class="inbox-small-cells text-right">
                                    
                                    <input type="button" class="btn btn-success" id="accept-student" name="accept-student" value="Accept" onclick="acc(<?php echo $data['rollno']; ?>)">
                                   
                                  </td>
                                  <td class="inbox-small-cells text-right">
                                    
                                    <input type="button" class="btn btn-danger" id="accept-student" name="accept-student" value="Rejected" onclick="rej(<?php echo $data['rollno']; ?>)">
                                   
                                  </td>
                                              

                              </tr>
                              </form>
                               <?php
                                }
                               ?>
                              </tbody>
                          </table> 
                          </div>
                  </aside>
              </div>
              <script>
             
              function acc(rollno) {
                $var=rollno;
               
                  document.getElementById($var).innerHTML = "accepted"+rollno;
                  window.location.href="dept_student_accept.php?rollno="+rollno;
              }
              function rej(rollno) {
                $var=rollno;
               
                  document.getElementById($var).innerHTML = "accepted"+rollno;
                  window.location.href="dept_student_rejected.php?rollno="+rollno;
              }
               function pri() {
                $var=rollno;
               
                 
                  window.location.href="dept_profile.php?pri=1";
                  document.getElementById(1).innerHTML = "accepted";
              } 
               

              </script>


<?php
}
?>  