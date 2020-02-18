<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">

                    <h5 class="mt-3">Recent Users</h5>
                    <?php
require 'menu/connect.php';

$my_id = $_SESSION['id'];




$strSQL = "SELECT advisergroup.*,  advisergroup.advisergroup_topic,advisergroup.advisergroup_id FROM advisergroup
LEFT JOIN member ON advisergroup.member_id = member.member_id

WHERE advisergroup.member_id='$my_id'
 ORDER BY advisergroup.advisergroup_id";

              ?>


                    <table class="display datatable table table-stripped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-left">Group</th>
                                <th class="text-left">Topic</th>
                                <th class="text-left">ID-Student</th>



                            </tr>
                        </thead>
                        <?php
     
              if($rs = $db->query($strSQL)){
                while($row = $rs->fetch_object()){
              ?>

                        <tbody>
                            <tr>
                                <td class="text-left"><?php echo get_groupcode($row->group_id); ?></td>
                                <td class="text-left"><?php echo $row->advisergroup_topic; ?></td>
                                <td class="text-left"><?php echo get_member_list($row->group_id); ?></td>



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