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

              <div class="f1-step ">
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
          LEFT JOIN committeegroup ON advisergroup.group_id = committeegroup.group_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.advisergroup_id = '$ag_id'  ";             


       
     if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){
            ?>

            <fieldset>
              <h4>Project Approval
              </h4>
              <div class="card">
                <div class="card-block">
                  <div class="row">
                    <table class="table">
                      <thead class="thead-default">
                        <tr>
                          <th>To do list</th>
                          <th>
                            <font color='red'> Status</font>
                          </th>
                          <!--     <th><font color='red'> *Sign by Advisor</font></th>
                          <th><font color='red'> *Sign by Committee</font></th>
                          <th><font color='red'> * Sign by Head of Department</font></th>
                          <th><font color='red'> * Sign by Dean of Faculty</font></th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Project approve sign by
                            </br> 1). Advisor
                            </br> 1). Committee
                            </br> 1). Head, Department of Information Technology
                            </br> 1). Dean, Faculty of Science and Technology
                          </td>
                          <td>
                          </br>
                            <span class="badge badge-success" required> </span>
                          </br><span class="badge badge-success" required> </span>
                          </br><span class="badge badge-success" required> </span>
                          </br><span class="badge badge-success" required> </span>



                          </td>
                        </tr>

                      </tbody>
                    </table>

                  </div>


                  <div class="button" align="right">

                    <button> <a href="?page=pf10" type="button" class="previous">&laquo; Previous</button></a>
                    <button> <a href="?page=pf12" type="button" class="next">Next &raquo;</button></a>
                  </div>
            </fieldset>
            <?php
                 } }
                   ?>

            <h7>
              <font color='red'> Note***
                </br> student </font>
            </h7>






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