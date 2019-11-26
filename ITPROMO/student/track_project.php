
        <link rel="stylesheet" href="asset/css/style.css">
  
              <div class="content">
   
                 


                
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                      <form role="form" action="" method="post" class="f1">

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


                            <?php
                 //    require 'menu/function.php';

$my_id = $_SESSION['id'];

$my_group_id = get_group_id($my_id);

          $sql = "SELECT advisergroup.*, partnergroup.group_number,member.member_fullname FROM advisergroup
          LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id

        WHERE advisergroup.advisergroup_id = '$my_group_id'";



              if($rs = $db->query($sql)){
                while($row = $rs->fetch_object()){
              ?>

                        
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
                            <?php echo status_for_advisor($row->advisergroup_status); ?>
                            
                          </td>
                                            </tr>
                                            <tr>
                                                <td>Select Advisor</td>
                                                 <td> <input type="checkbox" name="file"   id="file"   >
                                       <?php echo status_for_advisor($row->advisergroup_status); ?>
                                                 </td>
                                            </tr>


 <?php
                 }


               }
                   ?>

                              <tr>
              <form class="form-inline" method="post" enctype="multipart/form-data" action="student/check_files.php" style="padding: 30px;">


                                                <td>Upload 3 chapter of Proposal  

                    <input class="form-control" type="file" name="file_num" id="file_num" placeholder="Group Number">


      



                                              </td>


                                                  <td> <input type="checkbox" name="file"   id="file"></td>
                                                   <tr>
                                                <td>Dowloand </td>
                                            </tr>

                                            </tr>

                                        </tbody>
                                    </table>

                                    <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
                                </div>
                            </div>
                        </div>

                         
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>
                            

                            <fieldset>
                                <h4>Set up your account:</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-email">Email</label>
                                    <input type="text" name="f1-email" placeholder="Email..." class="f1-email form-control" id="f1-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Password</label>
                                    <input type="password" name="f1-password" placeholder="Password..." class="f1-password form-control" id="f1-password">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-repeat-password">Repeat password</label>
                                    <input type="password" name="f1-repeat-password" placeholder="Repeat password..." 
                                                        class="f1-repeat-password form-control" id="f1-repeat-password">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>
                            
                            <fieldset>
                                <h4>Security question:</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-question">Question</label>
                                    <input type="text" name="f1-question" placeholder="Question..." class="f1-question form-control" id="f1-question">
                                </div>  
                                <div class="form-group">
                                    <label class="sr-only" for="f1-answer">Answer</label>
                                    <input type="text" name="f1-answer" placeholder="Answer..." class="f1-answer form-control" id="f1-answer">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>Social media profiles:</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-facebook">Facebook</label>
                                    <input type="text" name="f1-facebook" placeholder="Facebook..." class="f1-facebook form-control" id="f1-facebook">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-twitter">Twitter</label>
                                    <input type="text" name="f1-twitter" placeholder="Twitter..." class="f1-twitter form-control" id="f1-twitter">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-google-plus">Google plus</label>
                                    <input type="text" name="f1-google-plus" placeholder="Google plus..." class="f1-google-plus form-control" id="f1-google-plus">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" class="btn btn-submit">Submit</button>
                                </div>
                            </fieldset>
                      
                      </form>
                    </div>
                </div>
                    
            </div>
        </div>
 
 <script src="asset/js/jquery-1.11.1.min.js"></script>
        <script src="asset/js/jquery.backstretch.min.js"></script>
        <script src="asset/js/retina-1.1.0.min.js"></script>
        <script src="asset/js/scripts.js"></script>
   


   
    </body>

</html>