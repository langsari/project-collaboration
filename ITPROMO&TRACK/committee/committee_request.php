
  
<div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
 
                                   <h5 class="mt-3">All Final Project Topics</h5>
 <?php
 

      

require 'menu/connect.php';
$my_id = $_SESSION['id'];

      $strSQL = "SELECT committeegroup.*,  partnergroup.group_number,advisergroup.group_id,committeegroup.member_id,committeegroup.group_id,schedule.schedule_status,files.committeegroup_id,files.files_id FROM committeegroup
        LEFT JOIN member ON committeegroup.member_id = member.member_id
           LEFT JOIN partnergroup ON committeegroup.group_id = partnergroup.group_id
 LEFT JOIN files ON committeegroup.member_id = files.committeegroup_id
         LEFT JOIN schedule ON committeegroup.group_id = schedule.group_id

        LEFT JOIN advisergroup ON committeegroup.member_id = advisergroup.member_id
    WHERE committeegroup.member_id  ='$my_id'  ";
        ?>

      <table class="display datatable table table-stripped" cellspacing="0" width="100%">
          <thead>
             <tr>
                        <th>Group Code</th>   
                        <th>Owner Project</th>
                        <th>Title</th>
                        <th>Advisor</th>
                        <th>Status</th>
                        <th>Result</th>
                        <th>View</th>



                 </tr>
               </thead>
 <?php
     if($result = $db->query($strSQL)){
             while($objResult = $result->fetch_object()){
            ?>

           <tbody>
            <tr>
            <td class="text-center"><?php echo $objResult->group_number; ?></td>
            <td class="text-center"><?php echo get_member_list($objResult->group_id); ?></td>
             <td class="text-center"><?php echo get_topic($objResult->group_id); ?></td>
            <td class="text-center"><?php echo get_advisor($objResult->group_id); ?></td>
            <td class="text-center"><?php echo $objResult->schedule_status; ?></td>
            <td class="text-center"><?php echo $objResult->committeegroup_id; ?></td>
             
              <td><a href="committee/check_pass.php?id=<?php echo $objResult->files_id; ?>"class="btn btn-success btn-xs"  title="Comfirm" onclick="return confirm_accept('<?php echo $objResult->files_status; ?>')"><i class='glyphicon glyphicon-ok'></i> Pass Presentation</a>


<a href="advisor/check_confirm.php?id=<?php echo $objResult->files_id; ?>" title="Comfirm" onclick="return confirm_accept('<?php echo $objResult->member_name; ?>')"><i class="fa fa-close" aria-hidden="true"> Not Pass Presentation</i> </a>

             </td>



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

    

  
  
                         

          
</form>
</div>
</div>
</div>
</div>

 
   

            <!-- /PAGE CONTENT -->