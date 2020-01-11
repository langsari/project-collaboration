<!DOCTYPE html>
<html>
<head>
  <title></title>

  <style>
    h6{
      font-family:initial;
      font-size: 25px;
      color: green;
    }
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
</head>
<body>
  
<ul class="breadcrumb">
  <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
  <li class="active">Final Projects Proposal</li>
</ul>

<div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
 
                                   <h6 class="card-title text-bold">All Final Projects Proposal</h6></b>
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
  <td class="text-center"><?php echo get_status_project($objResult->status); ?></td>

                    
                           <td>           <td><input type="button" name="view" value="view" id="<?php echo $objResult->advisergroup_id; ?>" class="btn btn-info btn-xs view_data" /></td>  

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
           var id = $(this).attr("id");  
           if(id != '')  
           {  
                $.ajax({  
                     url:"select1.php",  
                     method:"POST",  
                     data:{id:id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  

 </script>