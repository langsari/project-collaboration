<script type="text/javascript">
  function get_lastest_group_number(){
    $.ajax({
      url: 'admin/json_getlastgroupnumber.php',
      success: function(data){
        $('#group_number').val(parseInt(data)+1);
      },
      error :function(request, error){
        console.log(error);
        console.log(arguments);
      }
    });
  }
  function confirm_joingroup(){
  var text = confirm("Please confirm to join this group");
  if(text == true){
    return true;
  }else{
    return false;
  }
}
</script>

           <div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
  <button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#create_group" style="margin-bottom: 13px;">
   <i class="glyphicon glyphicon-plus"></i>Join Partner
  </button>
        </div>
        <div class="box-body">
   
          <!-- Modal -->
<div class="modal fade" id="create_group" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i>Join your partner</h4>
      </div>
      <div class="modal-body">
                    <form class="form" method="post" action="student/check_newgroup.php">
                    <label>Group Number</label>
                    <input class="form-control" type="number" name="group_number" id="group_number" placeholder="Group Number">
                </div>
                   <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
                  <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Save</button>
                </div>
                 



             
                </form>
              </div>
            </div>
          </div>



          <div class="table-resposive">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center" style="width: 50px;">#</th>
                  <th>Group Member</th>
                  <th class="text-center" style="width: 100px;"></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
              <?php
               include("function/get_group_member.php");
              $sql = "SELECT * FROM partnergroup";
              if($rs = $db->query($sql)){
                while($row = $rs->fetch_object()){
              ?>
                <tr>
                  <td class="text-center"><?php echo $row->group_number; ?></td>

                    <td align="center"><font color="red"><?php $row["group_id"]; include('function/get_group_member.php');  ?></font> </td>


                  <td class="text-center">
                    <a href="student/check_join.php?id=<?php echo $row->group_id; ?>" class="btn btn-primary btn-xs" onclick="return confirm_joingroup()"><i class="glyphicon glyphicon-plus-sign"></i> Join this Group</a>
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

  
  <button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#selectadvisor" style="margin-bottom: 13px;">
   <i class="glyphicon glyphicon-plus"></i>Advisor
  </button>
