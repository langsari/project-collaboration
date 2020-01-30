      <link rel="stylesheet" href="assets/css/style.css">

              <div class="content">
               <form action="student/check_files.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">

        
                      <div  class="f1">
                        <div class="f1-steps">
                          <div class="f1-progress">
                              <div class="f1-progress-line" data-now-value="12.5" data-number-of-steps="6" style="width: 16.5%; " ></div>
                          </div>
                          <div class="f1-step active ">
                            <div class="f1-step-icon">PF01</div>
                            <p>FormPF01</p>
                          </div>
                          <div class="f1-step ">
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
                                  <div class="f1-step">
                 <div class="f1-step-icon">PF05</div>
                             <p>FormPF05</p>
                          </div>
                
                  <div class="f1-step">
                 <div class="f1-step-icon">PF06</div>
                             <p>FormPF06</p>
                          </div>

                        </div>
<?php

            $g_id = get_group_id();
              $ag_id = get_ag_id($g_id);
    $strSQL = "SELECT advisergroup.*,  advisergroup.advisergroup_status,files.files_status,files.files_filename_proposal,files.by_officer,files.Owner,files.advisergroup_id,files.pf FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
          LEFT JOIN committeegroup ON advisergroup.group_id = committeegroup.group_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.advisergroup_id = '$ag_id'  ";             


       
     if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){
            ?> 
                                     <fieldset>
                            <h4>Adviser Proposal Project Approval Letter 
</h4>



                            <div class="card">
                                <div class="card-block">
                              <div class="row">
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
                          <td> 
                            <span class="badge badge-success"> <?php echo $objResult->advisergroup_status; ?></span>
                          </td>
                          </tr>
                          <tr>
                           <td>Select Advisor</td>
                            <td> 
                             <span class="badge badge-success"> <?php echo $objResult->advisergroup_status; ?></span>
                                                 </td>
                             </tr>

                               <td> 3 chapter of Proposal  

        <input type="file" name="files_filename_proposal" id="files_filename_proposal"  required="required"/>

    <input type="submit" name="button" id="button" value="Upload" /></td>

                </td>

   <td> <span class="badge badge-success"> <?php echo $objResult->files_status; ?></span><p><font color='red'> *For Advisor</font></td>
       
<td><a href="student/download.php?pdf=<?php echo $objResult->files_filename_proposal ;?>"><i class="fa fa-download"></i></a></td>


                                            </tr>
                                        </tbody>
                                    </table>
                                   </div>

                         
                        

                         
                  <div class="button" align="right"> 
                                    <button> <a href ="?page=pf02"  type="button"   class="btn btn-next">Next</button></a>
                                </div>
                         
                            </fieldset>

                 <?php
                 } }
                   ?>

   
     

                    </div>



                </div>
                   
              </form>
 


 
 <?php
include("student/chat.php");
 ?>


 <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="asset/js/scripts.js"></script>
   




   
    </body>

</html>