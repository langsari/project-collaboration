
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


          $sql = "SELECT advisergroup.*, partnergroup.group_number FROM advisergroup
          LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id
         WHERE advisergroup.member_id = '$my_id' AND advisergroup_status = 'w'
          ORDER BY advisergroup.advisergroup_id DESC";




              if($rs = $db->query($sql)){
                while($row = $rs->fetch_object()){
              ?>

            
             <tr>                 
                  <td><?php echo $row->advisergroup_topic; ?></td>
                  <td><?php echo get_member_list($row->group_id); ?></td>
                <td><?php echo status_for_advisor($row->advisergroup_status); ?></td>


                    <td><a href="advisor/check_approve.php?id=<?php echo $row->advisergroup_id; ?>"class="btn btn-success btn-xs"  title="Comfirm" onclick="return confirm_accept('<?php echo $row->group_number; ?>')"><i class='glyphicon glyphicon-ok'></i> Approve</a>
               <a href="advisor/check_approve.php?id=<?php echo $row->advisergroup_id; ?>"class="btn btn-danger btn-xs"  title="Comfirm" onclick="return confirm_accept('<?php echo $row->group_number; ?>')"><i class='glyphicon glyphicon-ok'></i> Reject</a>

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
                <th></th>
                </tr>
                                        </thead>
                                        <tbody>
              
              <?php
require 'menu/connect.php';


$my_id = $_SESSION['id'];


    $strSQL = "SELECT advisergroup.*,  files.files_status,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id

        WHERE advisergroup.member_id = '$my_id'  AND files_status = 'w' 

               ";



       


              if($rs = $db->query($strSQL)){
                while($row = $rs->fetch_object()){
              ?>
                <tr>
                  <td class="text-center"><?php echo get_member_list($row->group_id); ?></td>
                        <td class="text-center"><?php echo $row->advisergroup_topic; ?></td>
                        <td class="text-center"><?php echo $row->files_filename_proposal; ?></td>
                  <td class="text-center"><?php echo status_to_text($row->files_status); ?></td>
  <td><a href="advisor/check_topic.php?id=<?php echo $row->files_id; ?>"class="btn btn-success btn-xs"  title="Comfirm" onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i class='glyphicon glyphicon-ok'></i> Approve</a>

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

