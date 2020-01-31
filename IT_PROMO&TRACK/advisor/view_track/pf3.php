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
          <p>FormPF01</p>
        </div>
        <div class="f1-step active ">
          <div class="f1-step-icon">PF02</div>
          <p>FormPF02</p>
        </div>
        <div class="f1-step active">
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

$strSQL = "SELECT advisergroup.*,  files.by_officer,files.Owner,files.advisergroup_id,files.pf,files.status_advisor  FROM advisergroup
    LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
    LEFT JOIN committeegroup ON advisergroup.group_id = committeegroup.group_id

  LEFT JOIN member ON advisergroup.member_id = member.member_id
  WHERE advisergroup.advisergroup_id = '$id'";    


 
if($result = $db->query($strSQL)){
            while($objResult = $result->fetch_object()){
      ?>

      <fieldset>
        <h4>Project Proposal Revision Sheet
        </h4>
        <div class="card">
          <div class="card-block">
            <div class="row">
              <table class="table">
                <thead class="thead-default">
                  <tr>
                    <th>To do list</th>
                    <th>Status of Revision </br>
                      <font color='red'> *For Advisor</font>
                    </th>
                    <th>Status of Proposal Revision </br>
                      <font color='red'> *For Committee</font>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Proposal Revisoin
                    </td>
                    <td>
                      <font color='succes'> <?php echo $objResult->status_advisor; ?> </font> <span>
                        <?php echo get_advisor($objResult->group_id); ?></span>
                    </td>
                    <td>


                      <span><?php echo get_status_committee($objResult->group_id); ?></span>
                      <p>

                        <font color='red'> *For Committee</font>
                    </td>
                  </tr>

                </tbody>
              </table>

            </div>

            <div class="button" align="right">

              <button> <a href="?page=pf2&id=<?php echo $objResult->advisergroup_id;?>" type="button" class="btn previous">Previous</button></a>
              <button> <a href="?page=pf4&id=<?php echo $objResult->advisergroup_id;?>" type="button" class="btn next">Next</button></a>
            </div>
      </fieldset>
      <?php
           } }
             ?>






    </div>



</div>

</form>






<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-block">

          <h6 class="card-title text-bold">Comments For Committee</h6></b>
          <?php
 $id = $_GET['id'];
        


$strSQL = "SELECT  member.member_fullname,committeegroup.comment FROM committeegroup
    LEFT JOIN member ON committeegroup.member_id = member.member_id
    WHERE committeegroup.group_id = '$id'";

if($result = $db->query($strSQL)){
            while($objResult = $result->fetch_object()){

?>







          <table class="display datatable table table-stripped" cellspacing="0" width="100%">

            <tbody>

              <td>

                </br><b>



                  <h5> &nbsp;&nbsp;<span class="badge badge-primary"> <?php echo $objResult->member_fullname;?>
                  </h5></span> </br>


                  <h6> &nbsp;&nbsp; <font color='green'> <?php echo $objResult->comment;?> </h6></br></font>




                  <div class="col-md-12" align="right">

                  </div>

              </td>

              <?php
           }
         }
             ?>
            </tbody>
          </table>

          <script src="asset/js/jquery-1.11.1.min.js"></script>
          <script src="asset/js/jquery.backstretch.min.js"></script>
          <script src="asset/js/retina-1.1.0.min.js"></script>
          <script src="asset/js/scripts.js"></script>






          </body>

          </html>