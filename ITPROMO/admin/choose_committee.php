<script type="text/javascript">

function confirm_removecommittee(){
  var x = confirm("Are you sure?");
  if(x){
    return true;
  }else{
    return false;
  }
}

function choose_advisor(g_id){

  $('#group_id').val(g_id);

  $.ajax({
    url: 'admin/json_getadvisor.php',
    dataType: 'JSON',
    success: function(data){
      $('#select_advisor').html(null);
       var rows = "<option value='no'>- Select Advisor -</option>";
      $.each(data, function(i, o){
        rows += "<option value='"+o.mb_id+"'>"+o.mb_name+"</option>";
      });
      $('#select_advisor').append(rows);
    },
    error :function(request, error){
        console.log(error);
        console.log(arguments);
    }
  });
}

//Change advisor
function change_advisor(g_id){
  //get current advisor
  $.ajax({
    url: 'admin/json_currentadvisor.php',
    data: ({id: g_id}),
    type: 'POST',
    success: function(data){
      $('#current_advisor').val(data);
    },
    error: function(request, error){
      console.log(error);
      console.log(arguments);
    }
  });


  //Get advisor list section
  $('#group_id2').val(g_id);

  $.ajax({
    url: 'admin/json_getadvisor.php',
    dataType: 'JSON',
    success: function(data){
      $('#select_advisor2').html(null);
       var rows = "<option value='no'>- Select Advisor -</option>";
      $.each(data, function(i, o){
        rows += "<option value='"+o.mb_id+"'>"+o.mb_name+"</option>";
      });
      $('#select_advisor2').append(rows);
    },
    error :function(request, error){
        console.log(error);
        console.log(arguments);
    }
  });
}

//Add committeee function
function add_committee(g_id){
  $('#group_id3').val(g_id);

  $.ajax({
    url: 'admin/json_getadvisor.php',
    dataType: 'JSON',
    success: function(data){
      $('#select_committee').html(null);
       var rows = "<option value='no'>- Select Committee -</option>";
      $.each(data, function(i, o){
        rows += "<option value='"+o.mb_id+"'>"+o.mb_name+"</option>";
      });
      $('#select_committee').append(rows);
    },
    error :function(request, error){
        console.log(error);
        console.log(arguments);
    }
  });
}
</script>

<ul class="breadcrumb">
 <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
  <li class="active">Add Schedule Proposal</li>
</ul>

<div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
        <div class="box-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center" style="width: 50px;">#</th>
                  <th class="text-left">Members</th>
                  <th class="text-left">Advisor</th>
                  <th class="text-left">Committee</th>
                  <th class="text-center" style="width: 240px;"></th>
                </tr>
              </thead>
              <tbody>
              <?php
                                   require 'menu/function.php';

              $sql = "SELECT * FROM partnergroup";
              if($rs = $db->query($sql)){
                while($row = $rs->fetch_object()){
              ?>
                <tr>
                  <td class="text-center"><?php echo $row->group_number; ?></td>
                  <td class="text-left"><?php echo get_member_list($row->group_id); ?></td>
                  <td class="text-left"><?php echo get_advisor($row->group_id); ?></td>
              
                
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
<!-- Modal -->
<div class="modal fade" id="choose_advisor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user-plus"></i> Choose Advisor</h4>
      </div>
      <div class="modal-body">
        <form class="form" method="post" action="admin/sql_chooseadvisor.php">
          <label>Advisor</label>
          <select class="form-control" id="select_advisor" name="advisor">
            <!-- jQuery Ajax will render HTML here -->
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
          <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Save</button>
        </div>
        <input type="hidden" name="group_id" id="group_id">
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="change_advisor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user-times"></i> Change Advisor</h4>
      </div>
      <div class="modal-body">
        <form class="form" method="post" action="admin/sql_changeadvisor.php">
          <label>Current Advisor</label>
          <input type="text" id="current_advisor" class="form-control" readonly>
          <label>Change To</label>
          <select class="form-control" id="select_advisor2" name="advisor">
            <!-- jQuery Ajax will render HTML here -->
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
          <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Save</button>
        </div>
        <input type="hidden" name="group_id" id="group_id2">
      </form>
    </div>
  </div>
</div>


<!-- add committee section -->
<!-- Modal -->
<div class="modal fade" id="add_committee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user-plus"></i> Add Committee</h4>
      </div>
      <div class="modal-body">
        <form class="form" method="post" action="admin/sql_addcommittee.php">
          <label>Committee</label>
          <select class="form-control" id="select_committee" name="committee">
            <!-- jQuery Ajax will render HTML here -->
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
          <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Save</button>
        </div>
        <input type="hidden" name="group_id" id="group_id3">
      </form>
    </div>
  </div>
</div>