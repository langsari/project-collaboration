<style>
thead {color:green;}

</style>
<div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
                                  <h5>Round 1 Proposal Presentation of semester 2/2018</h5></br>
                                     <table class="table">
                                        <thead class="thead-default">
                      <th>No</th>
                      <th>Group</th>
                      <th>Name</th>
                      <th>Title Project</th>
                      <th>Status Presentaiton</th>
                      <th>Advisor</th>
                       <th>Committee</th>
                       <th>Date</th>
                       <th>Time</th>
                       <th>Room</th>
                                        </thead>
                                        <tbody>



     <?php
  $strSQL = "SELECT schedule.*, partnergroup.group_id,partnergroup.group_number,member.member_fullname FROM schedule
      LEFT JOIN partnergroup ON schedule.group_id = partnergroup.group_id
      LEFT JOIN member ON schedule.member_id = member.member_id
      WHERE   schedule.schedule_type ='1' ";
        ?>
             <?php
     if($result = $db->query($strSQL)){
             while($objResult = $result->fetch_object()){
            ?>
           <tbody>
            <tr>
                        <td class="text-center"><?php echo $objResult->schedule_id; ?></td>
                        <td class="text-center"> <?php echo $objResult->group_number; ?></td>
                  <td class="text-center"><?php echo get_member_list($objResult->group_id); ?></td>
                  <td class="text-center"><?php echo get_topic($objResult->group_id); ?></td>
                    <td class="text-center"><?php echo $objResult->schedule_status ?></td>
                    <td class="text-center"><?php echo get_advisor($objResult->group_id); ?></td>
                     <td class="text-center"><?php echo get_committee($objResult->group_id); ?></td>
                     <td class="text-center"><?php echo $objResult->schedule_date ?></td>
                       <td class="text-center"><?php echo $objResult->schedule_time; ?></td>
                     <td class="text-center"><?php echo $objResult->schedule_room ?></td>
                    
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

</body>

</html>