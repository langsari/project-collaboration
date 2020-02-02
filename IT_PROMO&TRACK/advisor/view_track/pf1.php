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
        <div class="f1-step">
          <div class="f1-step-icon">PF07</div>
          <p>FormPF07</p>
        </div>
        <div class="f1-step">
          <div class="f1-step-icon">PF08</div>
          <p>FormPF08</p>
        </div>
        <div class="f1-step">
          <div class="f1-step-icon">PF09</div>
          <p>FormPF09</p>
        </div>
        <div class="f1-step">
          <div class="f1-step-icon">PF10</div>
          <p>FormPF10</p>
        </div>
        <div class="f1-step">
          <div class="f1-step-icon">PF11</div>
          <p>FormPF11</p>
        </div>

        <div class="f1-step">
          <div class="f1-step-icon">PF12</div>
          <p>FormPF12</p>
        </div>
        <div class="f1-step">
          <div class="f1-step-icon">PF13</div>
          <p>FormPF13</p>
        </div>


      </div>
      <?php

$id = $_GET['id'];
$sql = "SELECT advisergroup.*,  advisergroup.advisergroup_status,files.files_status,files.files_filename_proposal,files.by_officer FROM advisergroup
LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
LEFT JOIN member ON advisergroup.member_id = member.member_id
WHERE advisergroup.advisergroup_id = '$id'";  



        
if($result = $db->query($sql)){
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

                  <tr>


                    <!--get Project Owner  -->

                    <td class="form-control" name="Owner" hidden="">
                      <?php echo get_member_list1($objResult->group_id); ?></td>


                    <!--get Topic   -->

                    <td> 3 chapter of Proposal

                      <input type="file" name="files_filename_proposal" id="files_filename_proposal"
                        required="required" />

                    <td bgcolor="#EDEDED"><input type="submit" name="button" id="button" value="Upload" /></td>


                    </td>
                    <td> <span class="badge badge-success"> <?php echo $objResult->files_status; ?></span>
                      <p>
                        <font color='red'> *For Advisor</font>
                    </td>


                    <td><a href="student/download.php?pdf=<?php echo $objResult->files_filename_proposal ;?>"><i
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
        </div>



        <div class="f1-buttons">
          <button> <a href="?page=pf2&id=<?php echo $objResult->advisergroup_id;?>" type="button"
              class="btn btn-next">Next</button></a>
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