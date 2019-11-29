<style>
    ul.breadcrumb {
      background-color: #eee;
      text-align: right;
      padding: 10px 16px;
    }
    ul.breadcrumb li {
     display: inline;
    }  
    ul.breadcrumb li+li:before {
      padding: 8px;
      content: ">>\00a0";
}
  </style>


 <ul class="breadcrumb">
 <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
  <li class="active">View schedule project</li>
</ul>

<div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
                                  <h5>Round 2 Project Presentation of semester 2/2018</h5></br>
                                     <table class="table">
                                        <thead class="thead-default">
                                                              
                                          <th>No</th>
                                          <th>Student ID</th>
                                          <th>Student Name</th>
                                          <th>Project Tile</th>
                                          <th>Advisor I</th>
                                          <th>Advisor II</th>
                                          <th>Field of student</th>
                                          <th>Committe I</th>
                                          <th>Committe II</th>
                                          <th>Committe III</th>
                                          <th>Exam Date</th>
                                          <th>Exam Time</th>
                                          <th>Room</th>
                                        </thead>
                                        <tbody>



     <?php
 
  $strSQL = "SELECT * FROM schedule  WHERE schedule_round ='2'";
        ?>
       
               <?php
     if($objQuery = $db->query($strSQL)){
       while($objResult = mysqli_fetch_array($objQuery)) {
            ?>
           <tbody>
            <tr>
                      <td><?php echo $objResult["schedule_id"];?></td>
                      <td><?php echo $objResult["schedule_round"];?></td>
                      <td><?php echo $objResult["schedule_years"];?></td>
                      <td><?php echo $objResult["schedule_time"];?></td>
                       <td><?php echo $objResult["schedule_date"];?></td>
                      <td><?php echo $objResult["member_id"];?></td>
                       <td><?php echo $objResult["advisergroup_id"];?></td>


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