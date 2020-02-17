      <link rel="stylesheet" href="assets/css/style.css">

      <div class="content">
        <form action="form01/check_pf1.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">


          <div class="f1">

            <div class="f1-steps">
              <div class="f1-progress">
                <div class="f1-progress-line" data-now-value="5" data-number-of-steps="13" style="width: 5%;"></div>
              </div>

              <div class="f1-step active ">
                <div class="f1-step-icon">PF01</div>
                <p>PF01</p>
              </div>
              <div class="f1-step ">
                <div class="f1-step-icon">PF02</div>
                <p>PF02</p>
              </div>
              <div class="f1-step">
                <div class="f1-step-icon">PF03</div>
                <p>PF03</p>
              </div>
              <div class="f1-step">
                <div class="f1-step-icon">PF04</div>
                <p>PF04</p>
              </div>
              <div class="f1-step">
                <div class="f1-step-icon">PF05</div>
                <p>PF05</p>
              </div>
              <div class="f1-step">
                <div class="f1-step-icon">PF06</div>
                <p>PF06</p>
              </div>
              <div class="f1-step">
                <div class="f1-step-icon">PF07</div>
                <p>PF07</p>
              </div>
              <div class="f1-step">
                <div class="f1-step-icon">PF08</div>
                <p>PF08</p>
              </div>
              <div class="f1-step">
                <div class="f1-step-icon">PF09</div>
                <p>PF09</p>
              </div>
              <div class="f1-step">
                <div class="f1-step-icon">PF10</div>
                <p>PF10</p>
              </div>
              <div class="f1-step">
                <div class="f1-step-icon">PF11</div>
                <p>PF11</p>
              </div>

              <div class="f1-step">
                <div class="f1-step-icon">PF12</div>
                <p>PF12</p>
              </div>
              <div class="f1-step">
                <div class="f1-step-icon">PF13</div>
                <p>PF13</p>
              </div>


            </div>
            <?php

$g_id = get_group_id();
$ag_id = get_ag_id($g_id);
$strSQL = "SELECT advisergroup.*,  advisergroup.advisergroup_status,files.files_status,files.files_filename_proposal,files.by_officer,files.Owner,files.advisergroup_id,files.pf FROM advisergroup
LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id

LEFT JOIN member ON advisergroup.member_id = member.member_id
WHERE advisergroup.advisergroup_id = '$ag_id'  ";             


              
     if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){
            ?>
            <fieldset>
            </br>
              <h4>Proposal Project Approval Letter 
              </br><small class="text-muted">Approval Letter Agreed to Sign By Advisor</small>

              </h4>
                <div class="card">
                  <div class="card-block">
                    <table class="table">
                      <thead class="thead-default">
                        <tr>
                        <th>To do list</th>

                     
                          <th><font color='red'> Sign by advisor</font></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Proposal Topic Selection</td>
                          <td>
                            Status
                    <?php echo status_01($objResult->advisergroup_status); ?></span>
                  
                          </td>
                        </tr>
                        <tr>
                          <td>Select Advisor</td>
                          <td>
                            Status
                 <?php echo status_01($objResult->advisergroup_status); ?></span>
                  
                          </td>
                        </tr>

                        <tr>


                          <!--get Project Owner  -->

                          <td class="form-control" name="Owner" hidden="">
                            <?php echo get_member_list1($objResult->group_id); ?></td>


                          <!--get Topic   -->

                          <td class="hidden"> 3 chapter of Proposal

                            <input type="file" name="files_filename_proposal" id="files_filename_proposal"
                              required="required" />
                    

                              <?php
                              $x=($objResult->files_filename_proposal);
                              if ($x>0) {
                                $class="btn btn-warning disabled";
                                $button="btn disabled";
                              }else{
                                $class="btn btn-info";
                                $button="btn btn-primary";
                              }
                              ?>

                       <input class="<?php echo $class; ?>"  type="submit" name="button" id="button" value="Upload" />


                          </td>
                          <td>
                            Staus
                            <?php echo status_01_file($objResult->files_status); ?>
                          </td>


                          <td><a href="form01/download.php?pdf=<?php echo $objResult->files_filename_proposal ;?>"><i
                                class="fa fa-download"></i></a></td>

                        </tr>
                      </tbody>
                    </table>



                    <div class="progress">
                      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>

                  </div>
                </div>
              

              <h7><font color='red'>*** Note
              </br>  Student have to upload file of 3 chapter of Proposal
              </br>  Adviser, Waiting advisor Approve your proposal 
              </font>
                  </h7>
              <div class="f1-buttons">
                <button class="<?php echo $button; ?>"> <a href="?page=pf02" type="button" class="next">Next&raquo;</button></a>
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


      <script src="asset/js/jquery-1.11.1.min.js"></script>
      <script src="asset/js/jquery.backstretch.min.js"></script>
      <script src="asset/js/retina-1.1.0.min.js"></script>
      <script src="asset/js/scripts.js"></script>






      </body>

      </html>