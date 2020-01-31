<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-block">

          <h5 class="mt-3">Project Proposal Revision (PF03)</h5>
          <?php
require 'menu/connect.php';
$my_id = $_SESSION['id'];

      $strSQL = "SELECT committeegroup.*, advisergroup.group_id,partnergroup.group_number,partnergroup.group_id,advisergroup.member_id,committeegroup.member_id,committeegroup.group_id,schedule.schedule_status,schedule.schedule_id,schedule.schedule_type,files.advisergroup_id,committeegroup.status_presentation,committeegroup.group_id
      FROM committeegroup
        LEFT JOIN advisergroup ON committeegroup.member_id = advisergroup.member_id
        LEFT JOIN member ON committeegroup.member_id = member.member_id
       LEFT JOIN partnergroup ON committeegroup.group_id = partnergroup.group_id
          LEFT JOIN files ON committeegroup.committeegroup_id = files.files_id
      LEFT JOIN schedule ON committeegroup.group_id = schedule.group_id

    WHERE committeegroup.member_id  ='$my_id'   and status_presentation=''  ";

               ?>




          <table class="display datatable table table-stripped" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Group Code</th>
                <th>Owner Project</th>
                <th>Title</th>
                <th>Advisor</th>
                <th>Committee</th>
                <th>Status</th>
                <th>Options</th>



              </tr>
            </thead>
            <?php
     if($result = $db->query($strSQL)){
             while($objResult = $result->fetch_object()){
            ?>

            <tbody>
              <tr>
                <td class="text-left"><?php echo $objResult->group_number; ?></td>
                <td class="text-left"><?php echo get_member_list($objResult->group_id); ?></td>
                <td class="text-left"><?php echo get_topic($objResult->group_id); ?></td>
                <td class="text-left"><?php echo get_advisor($objResult->group_id); ?></td>
                <td class="text-left"><?php echo get_committee($objResult->group_id); ?></td>

                <td class="text-left"><?php echo $objResult->schedule_status; ?></td>



                <td><a href="committee/check_pass_present.php?id=<?php echo $objResult->group_id; ?>" title="Pass"
                    onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i class="fa fa-check"
                      aria-hidden="true"></i> </a>

                <td><a href="?page=status_presentation&id=<?php echo $objResult->group_id;?>"><i class="fa fa-edit"
                      title="View"></i></a>

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




