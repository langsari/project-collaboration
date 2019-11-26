  
              <div class="content">
  
     <?php
 //  require 'menu/function.php';



 

            $g_id = get_group_id();
              $ag_id = get_ag_id($g_id);

             

    $strSQL = "SELECT advisergroup.*,  advisergroup.advisergroup_status,files.files_status,files.files_filename FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id

        WHERE advisergroup.advisergroup_id = '$ag_id'";
                     


     if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){
            ?>

                
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                      <form action="student/check_files.php" method="post" class="f1">


                        <div class="f1-steps">
                          <div class="f1-progress">
                              <div class="f1-progress-line" data-now-value="12.5" data-number-of-steps="4" style="width: 12.5%;"></div>
                          </div>
                          <div class="f1-step active">
                            <div class="f1-step-icon">PF01</div>
                            <p>FormPF01</p>
                          </div>
                          <div class="f1-step">
                        <div class="f1-step-icon">PF02</div>
                              <p>FormPF02</p>
                          </div>
                          <div class="f1-step">
                   <div class="f1-step-icon">PF03</div>
                             <p>FormPF03</p>
                          </div>
                            <div class="f1-step">
                 <div class="f1-step-icon">PF04</div>
                             <p>FormPF04</p>
                          </div>
                

                        </div>
                        
                        <fieldset>
                            <h4>Adviser Proposal Project Approval Letter</h4>
                    
                       <div class="row">
                            <div class="card">
                                <div class="card-block">
                                    <table class="table">
                                        <thead class="thead-default">
                                            <tr>
                                                <th>To do list</th>
                                                <th>Status</th>
                                       
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                             <td>Select Topic</td>
                          <td> <input type="checkbox" name="file"   id="file" value="">
                            <?php echo status_for_advisor($objResult->advisergroup_status); ?>
                            
                          </td>

                                            </tr>
                                            <tr>
                                                 <td>Select Advisor</td>
                                                 <td> <input type="checkbox" name="file"   id="file"   >
                                       <?php echo status_for_advisor($objResult->advisergroup_status); ?>
                                                 </td>
                                            </tr>
                            
                     <tr>


                                                <td> 3 chapter of Proposal  


 <form method="post" action="student/check_files.php">

          <input class="form-control" type="file" name="files_filename" id="files_filename" placeholder="Group Number">

                
                 
             


                  <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Save</button>
            

      


                                              </td>
   <td> <input type="checkbox" name="file"   id="file"> <?php echo status_to_text($objResult->files_status); ?></td>
                                                   <tr>
                                            </tr>

                                            </tr>

                                        </tbody>
                                    </table>
                
          
             
                 <?php
                 }


               }
                   ?>        


                



       
    </body>

</html>