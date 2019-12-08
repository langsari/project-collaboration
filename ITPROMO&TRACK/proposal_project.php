

<script type="text/javascript">
  function edit_ps(id){
    $.ajax({
      url: 'get_proposal_project.php',
      data: ({id: id}),
      type: 'POST',
      dataType: 'JSON',
      success: function(data){
        $.each(data, function(i, o){
          $('#topic_topic').val(o.topic_topic);
          $('#topic_abstrack').val(o.topic_abstrack);
     $('#topic_keyword').val(o.topic_keyword);

          $('#topic_fieldstudy').val(o.topic_fieldstudy);
            $('#topic_years').val(o.topic_years);
          $('#status').val(o.status);
            $('#advisergroup_id').val(o.advisergroup_id);
          $('#Student_name').val(o.Student_name);
           $('#member_idcard').val(o.member_idcard);
            $('#adviser').val(o.adviser);
          $('#position').val(o.position);


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




  function confirm_deleteps(){
    var x = confirm("Please confirm to delete!");
    if(x){
      return true;
    }else{
      return false;
    }
  }


</script>



<body>
  
<div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
 
                                   <h6 class="card-title text-bold">All Final Projects Proposal</h6></b>
   <?php

                  //   require 'menu/function.php';



$strSQL = "SELECT advisergroup.*,  topic_project.advisergroup_id, advisergroup.advisergroup_status,advisergroup.advisergroup_topic,advisergroup.group_id,topic_project.Student_name,topic_project.member_idcard,topic_project.topic_abstrack,topic_project.topic_keyword ,topic_project.topic_years,topic_project.topic_fieldstudy,topic_project.status FROM advisergroup

          LEFT JOIN topic_project ON advisergroup.advisergroup_id = topic_project.advisergroup_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id

        
        WHERE advisergroup.group_id ";


              ?>


      <table class="display datatable table table-stripped" cellspacing="0" width="100%">
          <thead>
             <tr>
                        <th>No</th>   
                        <th>ID</th>
                        <th>Name</th>
                      <th>Topic</th>
                      <th>Abstrack</th>
                      <th>Keyword</th>
                      <th>Field </th>
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
                     <td class="text-center"><?php echo $objResult->advisergroup_id; ?></td>
                     <td class="text-center"><?php echo $objResult->member_idcard; ?></td>
                     <td class="text-center"><?php echo $objResult->Student_name; ?></td>
                    <td class="text-center"><?php echo $objResult->advisergroup_topic; ?></td>
  <td><a href="#" name="view" value="view" id="<?php echo $objResult->advisergroup_id; ?>" class=" view_data"><?php echo $objResult->topic_abstrack; ?></a></td>


                     <td class="text-center"><?php echo $objResult->topic_keyword ?></td>
                <td class="text-center"><?php echo fieldstudy($objResult->topic_fieldstudy); ?></td>
                 <td class="text-center"><?php echo status($objResult->status); ?></td>

                    
                           <td>            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editPS" onclick="edit_ps(<?php echo $objResult->advisergroup_id; ?>)"><i class="fa fa-edit"></i></button>
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
        <form class="form-horizontal" method="post" action="admin/sql_editprojectschedule.php">

                      <legend class="text-bold">Basic Inputs</legend>
                                    <fieldset class="content-group">
                                         <form action="#">
                                            <div class="form-group row margin-top-10">
                                                <div class="col-md-2">
                                       <label class="control-label col-form-label">Student Name</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="member_idcard" id="member_idcard"  >
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
                                                    <label class="control-label col-form-label">Advisor</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="adviser" id="adviser" disabled="">
                                                </div>
                                            </div>



                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label">Keyword</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control"  name="topic_keyword" id="topic_keyword"disabled="">
                                                </div>
                                            </div>



                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label">Field of study</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="topic_fieldstudy" id="topic_fieldstudy" >
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
                                                    <label class="control-label col-form-label">Status</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="status" id="status" disabled="">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label">Placeholder</label>
                                                </div>
                                                <div class="col-md-10">
              <textarea class="form-control" rows="10" name="topic_abstrack" id="topic_abstrack"  required></textarea>
                                                </div>
                                            </div>
                         <input type="hidden" name="topic_id" id="topic_id">
                                        </form>
                                    </fieldset>

                         

          


   

            <!-- /PAGE CONTENT -->