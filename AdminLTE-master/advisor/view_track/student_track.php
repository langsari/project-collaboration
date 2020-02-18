<script type="text/javascript">
  function edit_ps(id) {
    $.ajax({
      url: 'advisor/get_track.php',
      data: ({
        id: id
      }),
      type: 'POST',
      dataType: 'JSON',
      success: function (data) {
        $.each(data, function (i, o) {


          $('#advisergroup_status').val(o.advisergroup_status);
          $('#files_status').val(o.files_status);
          $('#advisergroup_id').val(o.advisergroup_id);
          $('#by_officer').val(o.by_officer);

          $('#files_id').val(o.files_id);
        });
      },
      error: function (request, error) {
        console.log(error);
        console.log(arguments);
        alert("Network Error!");
      }
    });
  }




  function confirm_deleteps() {
    var x = confirm("Please confirm to delete!");
    if (x) {
      return true;
    } else {
      return false;
    }
  }
</script>


<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-block">

          <h5 class="mt-3">All Tracking Project</h5>

          <?php

                  //   require 'menu/function.php';



$my_id = $_SESSION['id'];





      $strSQL = "SELECT advisergroup.*,  advisergroup.advisergroup_id,files.files_id,files.files_filename_proposal,files.advisergroup_id,advisergroup.advisergroup_topic FROM advisergroup

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id

        WHERE advisergroup.member_id = '$my_id'   ";


              ?>


          <table class="display datatable table table-stripped" cellspacing="0" width="100%">
            <thead>
              <tr>
              <th>#</th>
                <th>Title project</th>
                <th>Student</th>
                <th>Status</th>
                <th></th>


              </tr>
            </thead>
            <?php
     if($result = $db->query($strSQL)){
             while($objResult = $result->fetch_object()){
            ?>

            <tbody>
              <tr>
              <td class="text-center"><?php echo $objResult->group_id; ?></td>
                <td class="text-center"><?php echo $objResult->advisergroup_topic; ?></td>
                <td class="text-center"><?php echo get_member_list($objResult->group_id); ?></td>


                <td><a href="?page=pf1&id=<?php echo $objResult->advisergroup_id;?>"><i class="fa fa-edit"
                      title="View">View Track</i></a>

                </td>





              </tr>


              <?php
    }
               }
                   ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>




<link rel="stylesheet" href="asset/css/style.css">

<!-- Modal -->


<div class="modal fade" id="editPS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>


      <div class="modal-body">
        <form method="post" action="student/check_files.php">
          <div class="col-sm-8 col-sm-offset-1 
                    col-md-11 col-md-offset-4 
                    col-lg-15 col-lg-offset-5 form-box">
            <div class="f1">
              <div class="f1-steps">
                <div class="f1-progress">
                  <div class="f1-progress-line" data-now-value="12.5" data-number-of-steps="4" style="width: 12.5%; ">
                  </div>
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
                            <td>Select Topic and Advisor</td>
                            <td> <input type="text" class="form-control" name="advisergroup_status"
                                id="advisergroup_status" disabled="">

                            </td>
                          </tr>


                          <tr>


                            <td> 3 chapter of Proposal
                            </td>
                            <td> <input type="text" class="form-control" name="files_status" id="files_status"
                                disabled=""> </td>

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
                  <button type="button" class="btn btn-next">Next</button>
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
                      <td> <input type="text" class="form-control" name="by_officer" id="by_officer" disabled=""> </td>

                    </tr>

                  </tbody>
                </table>



                <div class="f1-buttons">
                  <button type="button" class="btn btn-previous">Previous</button>
                  <button type="button" class="btn btn-next">Next</button>
                </div>
              </fieldset>




              <fieldset>
                <h4>Security question:</h4>
                <div class="form-group">
                  <label class="sr-only" for="f1-question">Question</label>
                  <input type="text" name="f1-question" placeholder="Question..." class="f1-question form-control"
                    id="f1-question">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="f1-answer">Answer</label>
                  <input type="text" name="f1-answer" placeholder="Answer..." class="f1-answer form-control"
                    id="f1-answer">
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
                  <input type="text" name="f1-facebook" placeholder="Facebook..." class="f1-facebook form-control"
                    id="f1-facebook">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="f1-twitter">Twitter</label>
                  <input type="text" name="f1-twitter" placeholder="Twitter..." class="f1-twitter form-control"
                    id="f1-twitter">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="f1-google-plus">Google plus</label>
                  <input type="text" name="f1-google-plus" placeholder="Google plus..."
                    class="f1-google-plus form-control" id="f1-google-plus">
                </div>
                <div class="f1-buttons">
                  <button type="button" class="btn btn-previous">Previous</button>
                  <button type="submit" class="btn btn-submit">Submit</button>
                </div>
              </fieldset>






            </div>



          </div>

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