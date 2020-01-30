<script type="text/javascript">
  function confirm_removecommittee() {
    var x = confirm("Are you sure?");
    if (x) {
      return true;
    } else {
      return false;
    }
  }



  //Add committeee function
  function add_committee(group_id) {
    $('#group_id3').val(group_id);

    $.ajax({
      url: 'admin/get_committee.php',
      dataType: 'JSON',
      success: function (data) {
        $('#select_committee').html(null);
        var rows = "<option value='no'>- Select Committee -</option>";
        $.each(data, function (i, o) {
          rows += "<option value='" + o.member_id + "'>" + o.member_fullname + "</option>";
        });
        $('#select_committee').append(rows);
      },
      error: function (request, error) {
        console.log(error);
        console.log(arguments);
      }
    });
  }
</script>
<!-- PAGE CONTENT -->
<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-block">
          <h6 class="card-title text-bold">Default Datatable</h6>
          <div class="box-body">
            <div class="table-responsive">
              <table class="display datatable table table-stripped" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th class="text-center" style="width: 50px;">No</th>
                    <th class="text-center" style="width: 50px;">Project</th>
                    <th class="text-left">Members</th>
                    <th class="text-left">Project Topic</th>
                    <th class="text-left">Advisor</th>
                    <th class="text-left">Committee</th>
                    <th class="text-center" style="width: 240px;"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php

 $sql = "SELECT advisergroup.*,  files.files_status,files.pf,files.files_id,files.files_filename_proposal,files.by_officer,advisergroup.group_id,partnergroup.group_number,partnergroup.group_id FROM advisergroup

           LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        WHERE advisergroup.group_id AND files.by_officer = 'Approve' 
               ";

              if($rs = $db->query($sql)){
                while($row = $rs->fetch_object()){
              ?>
                  <tr>
                    <td class="text-left"><?php echo $row->files_id; ?></td>
                    <td class="text-left"><?php echo $row->group_number; ?></td>
                    <td><?php echo get_member_list($row->group_id); ?></td>
                    <td class="text-left"><?php echo get_topic($row->group_id); ?></td>
                    <td class="text-left"><?php echo get_advisor($row->group_id); ?></td>

                    <td class="text-left"><span
                        class="badge badge-danger"><?php echo get_committee($row->group_id); ?></span> </td>

                    <td class="text-left">

                      <button type="button" class="btn btn-info btn-xs"
                        onclick="add_committee('<?php echo $row->group_id; ?>')" data-toggle="modal"
                        data-target="#add_committee"><i class="fa fa-user-plus"></i> Add Committee</button>
                    </td>
                  </tr>
                  <?php
                }
                $db->close();
              }else{
                echo $db->error;
                $db->close();
              }
              ?>
                </tbody>
              </table>
            </div>
          </div>
        </div><!-- /.box (box) -->
        </section>
      </div>
      </section><!-- /.content -->




      <!-- add committee section -->
      <!-- Modal -->
      <div class="modal fade" id="add_committee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                  aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user-plus"></i> Add Committee</h4>
            </div>
            <div class="modal-body">
              <form class="form" method="post" action="admin/check_committee.php">
                <label>Committee</label>
                <select class="form-control" id="select_committee" name="committee">
                  <!-- jQuery Ajax will render HTML here -->
                </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i
                  class="glyphicon glyphicon-remove"></i> Close</button>
              <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Save</button>
            </div>
            <input type="hidden" name="group_id" id="group_id3">
            </form>
          </div>
        </div>
      </div>