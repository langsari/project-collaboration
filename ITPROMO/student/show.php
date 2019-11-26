
                 <table class="table">  
                                        <thead class="thead-default">
                                         
                                           <tr>
                  <th>Student ID</th>
                  <th>Full Name</th>
                  <th>Phone</th>
                </tr>
                                        </thead>
                                        <tbody>


                                          <?php
          //  require 'menu/function.php';

             $g_id = get_group_id();

                $sql = "SELECT files_id, files_filename,member_id FROM files WHERE files_id = '$g_id'";



              if($rs = $db->query($sql)){
                while($row = $rs->fetch_object()){
              ?>
                <tr>
                  <td><?php echo $row->files_id; ?></td>
                  <td><?php echo $row->files_filename; ?></td>
                  <td><?php echo $row->member_id; ?></td>
                  
                </tr>
              <?php
                }
              }else{
              }
              ?>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>