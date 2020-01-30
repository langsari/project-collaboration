<script type="text/javascript">
  function edit_ps(id) {
    $.ajax({
      url: 'advisor/read_more.php',
      data: ({
        id: id
      }),
      type: 'POST',
      dataType: 'JSON',
      success: function (data) {
        $.each(data, function (i, o) {
          $('#Owner').val(o.Owner);
          $('#topic_topic').val(o.topic_topic);
          $('#topic_abstrack').val(o.topic_abstrack);
          $('#topic_keyword').val(o.topic_keyword);
          $('#topic_fieldstudy').val(o.topic_fieldstudy);
          $('#topic_years').val(o.topic_years);
          $('#advisergroup_id').val(o.advisergroup_id);
          $('#topic_id').val(o.topic_id);
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

          <h5 class="mt-3">All Final Project Topics</h5>
          <?php
                  //   require 'menu/function.php';
$my_id = $_SESSION['id'];
$strSQL = "SELECT advisergroup.*,  topic_project.topic_id,topic_project.Owner,topic_project.topic_topic,topic_project.advisergroup_id,advisergroup.group_id,topic_project.topic_years,topic_project.status,topic_project.group_number FROM advisergroup
          LEFT JOIN topic_project ON advisergroup.advisergroup_id = topic_project.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        
         WHERE advisergroup.member_id = '$my_id'";
              ?>


          <table class="display datatable table table-stripped" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Group Code</th>
                <th>Owner Project</th>
                <th>Topic</th>

                <th>Status</th>
                <th>View</th>



              </tr>
            </thead>
            <?php
     if($result = $db->query($strSQL)){
             while($objResult = $result->fetch_object()){
            ?>

            <tbody>
              <tr>
                <td class="text-left"><?php echo $objResult->topic_id; ?></td>
                <td class="text-left"><?php echo $objResult->group_number; ?></td>

                <td class="text-left"><?php echo substr($objResult->Owner, 0, 50); ?></td>
                <td class="text-left"><?php echo $objResult->topic_topic; ?></td>



                <td class="text-left"><?php echo get_status_project($objResult->status); ?></td>


                <td> <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editPS"
                    onclick="edit_ps(<?php echo $objResult->advisergroup_id; ?>)"><i class="fa fa-edit"></i></button>
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





<!-- Modal -->
<div class="modal fade" id="editPS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>


      <div class="modal-body">
        <form class="form-horizontal" method="post" action="advisor/check_status.php">

          <legend class="text-bold">Basic Inputs</legend>
          <fieldset class="content-group">
            <form action="#">
              <div class="form-group row margin-top-10">
                <div class="col-md-2">
                  <label class="control-label col-form-label">Owner</label>
                </div>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="Owner" id="Owner" disabled="">
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label col-form-label">Topic Project</label>
                </div>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="topic_topic" id="topic_topic" disabled="">
                </div>
              </div>




              <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label col-form-label">Keyword</label>
                </div>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="topic_keyword" id="topic_keyword" disabled="">
                </div>
              </div>



              <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label col-form-label">Field of study</label>
                </div>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="topic_fieldstudy" id="topic_fieldstudy">
                </div>
              </div>




              <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label col-form-label">Years</label>
                </div>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="topic_years" id="topic_years" disabled="">
                </div>
              </div>





              <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label col-form-label">Placeholder</label>
                </div>
                <div class="col-md-10">
                  <textarea class="form-control" rows="10" name="topic_abstrack" id="topic_abstrack"
                    required></textarea>
                </div>
              </div>

              <!--get project Proposal status -->

              <div class="form-group row">
                <div class="col-md-3">
                  <label class="control-label col-form-label">Proposal status</label>

                </div>
                <div class="col-md-9">
                  <select class="form-control" name="status" id="status">
                    <option value="1">Wait for the proposal Trail</option>
                    <option value="2">Revision Proposal</option>
                    <option value="3">OK</option>
                    <option value="4">Reject</option>
                    <option value="5">Cancel</option>
                    <option value="6">Graduate</option>
                    <option value="7">Not Pass</option>

                  </select>

                </div>

              </div>

      </div>




      <input type="hidden" name="advisergroup_id" id="advisergroup_id">

      <input type="hidden" name="topic_id" id="topic_id">


      <button ype="submit" class="btn btn-primary btn-lg btn-block">Create</button>



    </div>

    </form>
    </fieldset>




    </form>
  </div>
</div>
</div>
</div>




<!-- /PAGE CONTENT -->