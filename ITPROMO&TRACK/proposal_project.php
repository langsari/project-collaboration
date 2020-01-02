

<script type="text/javascript">
  function edit_ps(id){
    $.ajax({
      url: 'get_proposal_project.php',
      data: ({id: id}),
      type: 'POST',
      dataType: 'JSON',
      success: function(data){
        $.each(data, function(i, o){
              $('#Owner').val(o.Owner);
          $('#topic_topic').val(o.topic_topic);
          $('#topic_abstrack').val(o.topic_abstrack);
     $('#topic_keyword').val(o.topic_keyword);
          $('#topic_fieldstudy').val(o.topic_fieldstudy);
            $('#topic_years').val(o.topic_years);
          $('#status').val(o.status);
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


  function confirm_deleteps(){
    var x = confirm("Please confirm to delete!");
    if(x){
      return true;
    }else{
      return false;
    }
  }


</script>
<style>
    ul.breadcrumb {
      background-color: #eee;
      text-align: right;
      padding: 10px 16px;
    }
    ul.breadcrumb li {
     display: inline;
    }  
    ul.breadcrumb li+li:before {
      padding: 8px;
      content: ">>\00a0";
}
    
  </style>



<body>
   <ul class="breadcrumb">
 <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
  <li class="active">All Project Topics</li>
</ul>
  
<div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
 
                                   <h5 class="mt-3">All Final Project Topics</h5>
   <?php

                  //   require 'menu/function.php';


 $strSQL = "SELECT * FROM topic_project  ";



              ?>


      <table class="display datatable table table-stripped" cellspacing="0" width="100%">
          <thead>
             <tr>
                        <th>No</th>   
                           <th>Group Code</th>
                            <th>Owner Project</th>
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
                     <td class="text-center"><?php echo $objResult->topic_id; ?></td>
                     <td class="text-center"><?php echo $objResult->group_number; ?></td>

                     <td class="text-center"><?php echo substr($objResult->Owner, 0, 50); ?></td>
                    <td class="text-center"><?php echo $objResult->topic_topic; ?></td>

                     <td class="text-center"><?php echo substr($objResult->topic_abstrack, 0, 50); ?></td>


                     <td class="text-center"><?php echo $objResult->topic_keyword; ?></td>
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