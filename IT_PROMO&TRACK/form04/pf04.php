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
        <div class="f1-step active">
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

      $g_id = get_group_id();
        $ag_id = get_ag_id($g_id);
$strSQL = "SELECT advisergroup.*,  files.by_officer,files.Owner,files.advisergroup_id,files.pf,files.status_advisor  FROM advisergroup
    LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
    LEFT JOIN committeegroup ON advisergroup.group_id = committeegroup.group_id

  LEFT JOIN member ON advisergroup.member_id = member.member_id
  WHERE advisergroup.advisergroup_id = '$ag_id' ";             


 
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
                    <th>
                      <font color='red'> *Approval by Advisor</font>
                    </th>
                    <th>
                      <font color='red'> *Approval by Committee</font>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Project Proposal Approval
                    </td>
                    <td>
                      <font color='succes'> <?php echo $objResult->status_advisor; ?> </font> <span>
                        <?php echo get_advisor($objResult->group_id); ?></span>
                    </td>
                    <td>


                      <span><?php echo get_status_committee($objResult->group_id); ?></span>
                      <p>

                    </td>
                  </tr>

                </tbody>
              </table>

            </div>

            <div class="button" align="right">

              <button> <a href="?page=pf03" type="button" class="btn previous">Previous</button></a>
              <button> <a href="?page=pf05" type="button" class="btn next">Next</button></a>
            </div>
      </fieldset>
      <?php
           } }
             ?>






    </div>



</div>

</form>







          <script src="asset/js/jquery-1.11.1.min.js"></script>
          <script src="asset/js/jquery.backstretch.min.js"></script>
          <script src="asset/js/retina-1.1.0.min.js"></script>
          <script src="asset/js/scripts.js"></script>






          </body>

          </html>