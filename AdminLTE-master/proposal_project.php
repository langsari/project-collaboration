
 <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>All Project Topics</h3>
              </div> 



  <div class="title_right">
                  <div class="input-group">
                  
                  </div>
                </div>
              </div>
            
            <div class="clearfix"></div>
                <div class="x_panel">
                  <div class="x_title">
                  
 
                                   <h5 class="mt-3">All Final Project Topics</h5>
   <?php

                  //   require 'menu/function.php';


 $strSQL = "SELECT * FROM topic_project  ";



              ?>

  <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
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
                     <td class="text-left"><?php echo $objResult->topic_id; ?></td>
                     <td class="text-left"><?php echo $objResult->group_number; ?></td>

                     <td class="text-left"><?php echo substr($objResult->Owner, 0, 50); ?></td>
                    <td class="text-left"><?php echo $objResult->topic_topic; ?></td>

                     <td class="text-left"><?php echo substr($objResult->topic_abstrack, 0, 30); ?></td>


                     <td class="text-left"><?php echo $objResult->topic_keyword; ?></td>
                <td class="text-left"><?php echo fieldstudy($objResult->topic_fieldstudy); ?></td>
           <td class="text-left"><?php echo get_status_project($objResult->status); ?></td>

                    
             <td>            <button type="button" class="btn btn-primary btn-xs  view_data" name="view" value="view" id="<?php echo $objResult->topic_id; ?>"><i class="fa fa-eye"></i></button>
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
              </div>
  
  

          


   

            <!-- /PAGE CONTENT --></html>  

 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title"> Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 
      
 <script>  
    
      $(document).on('click', '.view_data', function(){  
           var id = $(this).attr("id");  
           if(id != '')  
           {  
                $.ajax({  
                     url:"get_proposal_project.php",  
                     type:"POST",  
                     data:{id:id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  

 </script>

