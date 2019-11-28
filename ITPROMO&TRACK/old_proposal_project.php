

              <div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
 



                                    <h6 class="card-title text-bold">Default Datatable</h6>
     <?php
                      require 'menu/function.php';

  $strSQL = "SELECT * FROM topic_project ";
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
                      <th>Field</th>
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
                <td class="text-center"><?php echo $objResult->member_idcard; ?></td>
                <td class="text-center"><?php echo $objResult->Student_name; ?></td>
                <td class="text-center"><?php echo $objResult->topic_topic; ?></td>
  <td><a href="#" name="view" value="view" id="<?php echo $objResult->topic_id; ?>" class=" view_data"><?php echo $objResult->topic_abstrack; ?></a></td>
                <td class="text-center"><?php echo $objResult->topic_keyword; ?></td>
                <td class="text-center"><?php echo fieldstudy($objResult->topic_fieldstudy); ?></td>
                <td class="text-center"><?php echo status($objResult->status); ?></td>
       <td><input type="button" name="view" value="view" id="<?php echo $objResult->topic_id; ?>" class="btn btn-info btn-xs view_data" /></td>  


                    
                  




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

      
  

   </html>  
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
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  

 </script>
