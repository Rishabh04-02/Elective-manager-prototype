 <div class="inbox-body">
                         <div class="mail-option">
                         <table class="table table-inbox table-hover">
                            <tbody>
                            <!-- now use php while loop -->
                            <?php
                            include_once('../dbconnect.php');
                            $qr=mysqli_query($connection," SELECT COUNT(elecname) as total FROM elective where publish=1");
                            $num_rows = mysqli_fetch_assoc($qr);
                            $fetc=mysqli_query($connection," SELECT elecname FROM elective where publish=1");
                            $result1 = mysqli_fetch_array($fetc);
                            while($num_rows['total']--)
                            {
                            ?>
                          
                            <tr class="unread">
                                  
                                  <td class="inbox-small-cells"><i class="fa fa-info"></i></td>
                                  <td class="view-message  dont-show">Department name</td>
                                  <td class="view-message "><?php echo $result1['elecname']; ?></td>
                                  
                                  <td class="view-message  text-right">Published</td>
                              </tr>
                              <?php 
                          } 
                      ?>
                      </tbody>
                          </table>
                      </div>
                  </aside>
              </div>