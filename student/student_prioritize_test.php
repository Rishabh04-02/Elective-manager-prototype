<div class="jumbotron">
                  
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
                                  <td class="view-message  dont-show">Priority No.</td>
                                  <td class="view-message ">Set Priority</td>
                                  
                                  <td class="inbox-small-cells">Previous Priority</td>
                              </tr>
                              	<?php
								include_once("../dbconnect.php");

								$rollno=$_SESSION['login_user'];
								echo "$rollno";
								$abc="SELECT  elecname  FROM elective WHERE publish=1";
								if($result1 = mysqli_query($connection, $abc))
								{
									$count=mysqli_num_rows($result1);
									for($i=1;$i<=$count;$i++)
									{
								?>
								<tr class="unread">
                                  <td class="view-message  dont-show" id="<?php echo $i."z";?>"><?php echo $i;?></td>
                                  <td class="view-message ">
                                  	<select name="<?php echo $i ?>" id="<?php echo $i ?>">
                                  	<option value="volvo">NULL</option>
                                  <?php
                                  if($result = mysqli_query($connection, $abc))
									{
										while($rowa = mysqli_fetch_array($result))
									    { 
									    	 $out=$rowa['elecname'];
 	 
                                  ?>
                                  
									  <option value="volvo"><?php echo $out;?></option>
									
                                  <?php
                                      }
									}    	 
                                  ?>
                                  </select> 
                                  </td>
                                   <?php

                                    $sqlget = "SELECT * FROM student_login WHERE rollno = '$rollno'";
                                    if($resultget = mysqli_query($connection, $sqlget))
                                     {   
                                      if($rowaget = mysqli_fetch_array($resultget))
                                      {  
                                        $x='pr'.$i;
                                        $a=$rowaget[$x];
                                  ?>
                                  <td class="inbox-small-cells"><?php echo $a;?></td>
                                  <?php
                                  }
                                }
                                  ?>
                             	 </tr>

                             	 <?php
                             	 	}
                             	 }	
                             	 ?>
                             	 <tr class="unread">
                                  <td class="view-message  dont-show"></td>
                                  <td class="view-message ">
                                  <form action="" method="post">
                                  <!--<input type="submit" name="submit_priority" id="submit_priority" value="Set Priority">-->
                                  </form>
                                  <button onclick="set(<?php echo $count; ?>,'<?php echo $rollno;?>')">Set Priority</button>
                                  </td>
                                  
                                  <td class="inbox-small-cells text-right">
                                  	 

                                  </td>
                              	 </tr>



                              </tbody>
                          </table> 
                          </div>
                  </aside>
              </div>
              <script>
             
              function set($count,$rollno) {
           		$i=0;
           		$add="";

           		$add=$add+"count="+$count;
               	
               for($i=1;$i<=$count;$i++)
               {	
                  //document.getElementById($i+"z").innerHTML = "xx"+$i;
                var e = document.getElementById($i);
				var value = e.options[e.selectedIndex].value;
				var text = e.options[e.selectedIndex].text;
				//document.getElementById($i+"z").innerHTML = "xx"+text;

				  // window.location.href="dept_"+$i;
				  $add=$add+"&pri"+$i+"="+text;

               }  
              window.location.href="student_priority_set.php?"+$add+"&rollno="+$rollno;
                 //http://localhost/project/Elective-manager/student/student_priority_set.php?pri1=cse33pri2=NULLpri3=cse33pri4=NULLpri5=NULL
                 //http://localhost/project/Elective-manager/student/student_priority_set.php?pri0=undefined&pri2=ece33&pri3=cse33&pri4=civil33&pri5=eee33
              }
           
               

              </script>
