      <link rel="stylesheet" href="assets/css/style.css">

      <div class="content">
        <form>


          <div class="f1">

            <div class="f1-steps">
              <div class="f1-progress">
                <div class="f1-progress-line" data-now-value="5" data-number-of-steps="13" style="width: 5%;"></div>
              </div>

              <div class="f1-step active ">
                <div class="f1-step-icon">PF01</div>
                <p>PF01</p>
              </div>
              <div class="f1-step active">
                <div class="f1-step-icon">PF02</div>
                <p>PF02</p>
              </div>
              <div class="f1-step active">
                <div class="f1-step-icon">PF03</div>
                <p>PF03</p>
              </div>
              <div class="f1-step active">
                <div class="f1-step-icon">PF04</div>
                <p>PF04</p>
              </div>
              <div class="f1-step active">
                <div class="f1-step-icon">PF05</div>
                <p>PF05</p>
              </div>
              <div class="f1-step active">
                <div class="f1-step-icon">PF06</div>
                <p>PF06</p>
              </div>
              <div class="f1-step active">
                <div class="f1-step-icon">PF07</div>
                <p>PF07</p>
              </div>
              <div class="f1-step active">
                <div class="f1-step-icon">PF08</div>
                <p>PF08</p>
              </div>
              <div class="f1-step active">
                <div class="f1-step-icon">PF09</div>
                <p>PF09</p>
              </div>
              <div class="f1-step active">
                <div class="f1-step-icon">PF10</div>
                <p>PF10</p>
              </div>
              <div class="f1-step active ">
                <div class="f1-step-icon">PF11</div>
                <p>PF11</p>
              </div>

              <div class="f1-step active">
                <div class="f1-step-icon">PF12</div>
                <p>PF12</p>
              </div>
              <div class="f1-step active">
                <div class="f1-step-icon">PF13</div>
                <p>PF13</p>
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
              <h4>Signed Form and Stamped (PF13)
              </br><small class="text-muted">By officer</small>
              </h4>
              <div class="card">
                <div class="card-block">
                  <div class="row">
                    <table class="table">
                      <thead class="thead-default">
                        <tr>
                          <th>To do list</th>
                          <th><font color='red'> *Sige by Officer</font></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Submit the completed project document and relate resource to officer 
                          </br> 1). Project Book (already in Printed and Booked)
                          </br> 2). Softcopy Program/Application and Project Book (in Flash disk, DVD or CD form)
                          </br> 3). Project Poster in soft and hard copy
                          </br> 4). Project Vinyl in soft and hard copy
                          </br> 5). Journal / Seminar
                          </br> 6). PF10, PF11 and PF12
                          <td>
                            Staus
                            <span class="badge badge-success" required> <?php echo $objResult->by_officer; ?> </span>
                          </td>
                        </tr>

                      </tbody>
                    </table>

                  </div>
                
                  <div class="button" align="right">

                    <button> <a href="?page=pf12" type="button" class="previous">&laquo; Previous</button></a>
                  </div>
            </fieldset>
            <?php
                 } }
                   ?>

                  <h7><font color='red'> Note*** 
                      </br>  As Students,I have already submitted the completed project document and relate resource
                      </br>  As Officer,I have already received the completed project document and relate resource </font>
                  </h7






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