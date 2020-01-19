
  
<div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
 
                                   <h5 class="mt-3">Proposal Presentation</h5>
 <?php
require 'menu/connect.php';
$my_id = $_SESSION['id'];

      $strSQL = "SELECT committeegroup.*,  files.files_status,files.pf,files.status_presentation,advisergroup.group_id,partnergroup.group_number,partnergroup.group_id,advisergroup.member_id,committeegroup.member_id,committeegroup.group_id,schedule.schedule_status,schedule.schedule_type
       FROM committeegroup
        LEFT JOIN advisergroup ON committeegroup.member_id = advisergroup.member_id
        LEFT JOIN member ON committeegroup.member_id = member.member_id
       LEFT JOIN partnergroup ON committeegroup.group_id = partnergroup.group_id
       LEFT JOIN files ON committeegroup.member_id = files.member_id
      LEFT JOIN schedule ON committeegroup.group_id = schedule.group_id

    WHERE committeegroup.member_id  ='$my_id' AND schedule_type='1'  ";

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
                        <th>Options</th>



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
        <td class="text-center"><?php echo $objResult->status_presentation; ?></td>

             
        




             </td>
                   <td><a href="?page=status_presentation&id=<?php echo $objResult->group_id;?>"><i class="fa fa-check" title="Pass"></i></a></td>



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