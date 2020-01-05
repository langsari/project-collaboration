
   <div class="content">
                     <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-block">
                                    <legend class="text-bold margin-top-2.5"> Advisor Request</legend>

                                     <table class="table">
                                        <thead class="thead-default">
                                           <tr>
                  <th>Title project</th>
                  <th>Student</th>
                    <th>Status</th>
                <th></th>
                </tr>
                                        </thead>
                                        <tbody>
                                          <?php
require 'menu/connect.php';

$my_id = $_SESSION['id'];


      $strSQL = "SELECT advisergroup.*,  advisergroup.advisergroup_id,files.files_id,files.files_filename_proposal,files.advisergroup_id,advisergroup.advisergroup_topic FROM advisergroup

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id

        WHERE advisergroup.member_id = '$my_id'   
               ";



              if($rs = $db->query($strSQL)){
                while($row = $rs->fetch_object()){
              ?>

            
             <tr>                 
                  <td><?php echo $row->advisergroup_topic; ?></td>
                  <td><?php echo get_member_list($row->group_id); ?></td>


               <td><a href="?page=view&id=<?php echo $row->advisergroup_id;?>"class="btn btn-success btn-xs"  ><i class='glyphicon glyphicon-ok'></i> View Track</a>


              

                    </td>



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


