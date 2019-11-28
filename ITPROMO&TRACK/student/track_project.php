

        <style >
          
body {
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    color: #888;
    line-height: 30px;
    text-align: left;
}

strong { font-weight: 500; }

a, a:hover, a:focus {
    color: #f35b3f;
    text-decoration: none;
    -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
}

h1, h2 {
    margin-top: 10px;
    font-size: 38px;
    font-weight: 100;
    color: #555;
    line-height: 50px;
}

h3 {
    font-size: 22px;
    font-weight: 300;
    color: #555;
    line-height: 30px;
}

h4 {
    font-size: 18px;
    font-weight: 300;
    color: #555;
    line-height: 26px;
}

img { max-width: 50%; }

::-moz-selection { background: #f35b3f; color: #fff; text-shadow: none; }
::selection { background: #f35b3f; color: #fff; text-shadow: none; }







/***** Top content *****/

.top-content { padding: 40px 0 170px 0; }

.top-content .text { color: #fff; }
.top-content .text h1 { color: #fff; }
.top-content .description { margin: 20px 0 10px 0; }
.top-content .description p { opacity: 0.8; }
.top-content .description a { color: #fff; }
.top-content .description a:hover, 
.top-content .description a:focus { border-bottom: 1px dotted #fff; }

.form-box { padding-top: 40px; }

.f1 {
  padding: 25px; background: #fff;
  -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
}
.f1 h4 { margin-top: 0; margin-bottom: 5px; text-transform: uppercase; }

.f1-steps { overflow: hidden; position: relative; margin-top: 10px; }

.f1-progress { position: absolute; top: 24px; left: 0; width: 100%; height: 1px; background: #ddd; }
.f1-progress-line { position: absolute; top: 0; left: 0; height: 1px;  background: #f35b3f; }

.f1-step { position: relative; float: left; width: 25%; padding: 0 5px; }

.f1-step-icon {
  display: inline-block; width: 40px; height: 40px; margin-top: 4px; background: #ddd;
  font-size: 12px; color: #fff; line-height: 40px;
  -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%;
}
.f1-step.activated .f1-step-icon {
  background: #fff; border: 1px solid #f35b3f; color: #f35b3f; line-height: 38px;
}
.f1-step.active .f1-step-icon {
  width: 48px; height: 48px; margin-top: 0; background: #f35b3f; font-size: 22px; line-height: 48px;
}

.f1-step p { color: #ccc; }
.f1-step.activated p { color: #f35b3f; }
.f1-step.active p { color: #f35b3f; }

.f1 fieldset { display: none; text-align: left; }

.f1-buttons { text-align: right; }

.f1 .input-error { border-color: #f35b3f; }



        </style>
              <div class="content">
                 <form method="post" action="student/check_files.php">
                    <div class="col-sm-8 col-sm-offset-1 
                    col-md-11 col-md-offset-4 
                    col-lg-15 col-lg-offset-5 form-box">
                      <div  class="f1">
                        <div class="f1-steps">
                          <div class="f1-progress">
                              <div class="f1-progress-line" data-now-value="12.5" data-number-of-steps="4" style="width: 12.5%; " ></div>
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
                                  <div class="f1-step">
                 <div class="f1-step-icon">PF05</div>
                             <p>FormPF045</p>
                          </div>
                

                        </div>
 <?php
            $g_id = get_group_id();
              $ag_id = get_ag_id($g_id);

    $strSQL = "SELECT advisergroup.*,  advisergroup.advisergroup_status,files.files_status,files.files_filename_proposal,files.member_id FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.advisergroup_id = '$ag_id'";                 
     if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){
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
        <input class="form-control" type="file" name="files_filename_proposal" id="files_filename_proposal" placeholder="Group Number">
     <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Save</button>
                </td>
   <td> <input type="checkbox" name="file"   id="file"> <?php echo status_to_text($objResult->files_status); ?></td>
       
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
  <button type="button"   class="btn btn-next">Next</button>
                                </div>
                            </fieldset>
                            
                            <fieldset>
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
                            <?php echo  status_to_text1($objResult->member_id); ?>  
                          </td>
                           </tr>
                                           
                         </tbody>
                        </table>

                            
                    
                          <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>




                 <?php
                 } }
                   ?>


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