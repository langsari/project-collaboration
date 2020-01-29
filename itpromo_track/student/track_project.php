      <link rel="stylesheet" href="assets/css/style.css">

              <div class="content">
               <form action="student/check_files.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">

        
                      <div  class="f1">
             
             <div class="f1-steps">
                                <div class="f1-progress">
                                    <div class="f1-progress-line" data-now-value="2" data-number-of-steps="13" style="width: 2%;"></div>
                                </div>

                                <div class="f1-step active">
                                    <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                    <p>1</p>
                                </div>

                                <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                                    <p>2</p>
                                </div>
                                <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-question"></i></div>
                                    <p>3</p>
                                </div>
                                <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                                    <p>4</p>
                                </div>
                                  <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-check"></i></div>
                                    <p>5</p>
                                </div>

                                          <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-edit"></i></div>
                                    <p>6</p>
                                </div>
     <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-edit"></i></div>
                                    <p>7</p>
                                </div>

     <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-edit"></i></div>
                                    <p>8</p>
                                </div>

     <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-edit"></i></div>
                                    <p>9</p>
                                </div>

     <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-edit"></i></div>
                                    <p>10</p>
                                </div>


     <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-edit"></i></div>
                                    <p>11</p>
                                </div>

                                     <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-edit"></i></div>
                                    <p>12</p>
                                </div>

                                     <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-edit"></i></div>
                                    <p>13</p>
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
        <script src="assets/js/scripts.js"></script>
   




   
    </body>

</html>