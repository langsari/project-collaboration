


<script type="text/javascript">
  function edit_ps(id){
    $.ajax({
      url: 'get_track.php',
      data: ({id: id}),
      type: 'POST',
      dataType: 'JSON',
      success: function(data){
        $.each(data, function(i, o){
        $('#advisergroup_status').val(o.advisergroup_status);
            $('#files_status').val(o.files_status);
            $('#advisergroup_id').val(o.advisergroup_id);
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


  function confirm_deleteps(){
    var x = confirm("Please confirm to delete!");
    if(x){
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
 
                                   <h5 class="mt-3">All Final Project Topics</h5>
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
        <td class="text-center"><?php echo $objResult->advisergroup_topic; ?></td>
                     <td class="text-center"><?php echo get_member_list($objResult->group_id); ?></td>

                  
                  
         

                           <td><button type="button" class="btn btn-success btn-xs"  data-toggle="modal" data-target="#editPS" onclick="edit_ps(<?php echo $objResult->advisergroup_id; ?>)"><i class="fa fa-edit">View Track</i></button>
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>


      <div class="modal-body">
        <form class="form-horizontal" method="post" action="advisor/check_status.php">

                      <legend class="text-bold">Basic Inputs</legend>
                                    <fieldset class="content-group">
                                         <form action="#">
                                            <div class="form-group row margin-top-10">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label">Topic and Advisor</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="advisergroup_status" id="advisergroup_status">
                                                </div>
                                            </div>

                                        
                                                  <div class="form-group row">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label">3 chapter</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="files_status" id="files_status" disabled="">
                                                </div>
                                            </div>


         <input type="hidden" name="advisergroup_id" id="advisergroup_id">

           <input type="hidden" name="files_id" id="files_id">
 

                          <button ype="submit" class="btn btn-primary btn-lg btn-block">Create</button>

                      
                          
                        </div>
                        
                                        </form>
                                    </fieldset>

                         

          


   

            <!-- /PAGE CONTENT -->