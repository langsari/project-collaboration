<div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
 
                                   <h5 class="mt-3">All Users</h5>
                                <?php
require 'menu/connect.php';

$my_id = $_SESSION['id'];


      $strSQL = "SELECT advisergroup.*,  files.files_status,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic,advisergroup.advisergroup_id FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id

        WHERE advisergroup.member_id = '$my_id'  AND files_status = '1' 
               ";


              ?>


      <table class="display datatable table table-stripped" cellspacing="0" width="100%">
          <thead>
             <tr>
                   	<th class="text-center">No</th>  
                        <th class="text-center">Topic</th>   
                        <th class="text-center">ID-Student</th>
                       


                 </tr>
               </thead>
 <?php
     
              if($rs = $db->query($strSQL)){
                while($row = $rs->fetch_object()){
              ?>

           <tbody>
            <tr>
            	<td class="text-center"><?php echo get_groupcode($row->group_id); ?>s</td>
                     <td class="text-center"><?php echo $row->advisergroup_topic; ?></td>
              <td class="text-center"><?php echo get_member_list($row->group_id); ?></td>
                    


                    </tr>

                             
  <?php
    }
               }
                   ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    
