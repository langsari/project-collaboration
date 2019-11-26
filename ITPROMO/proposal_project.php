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

                     require 'menu/function.php';



          $strSQL = "SELECT advisergroup.*, partnergroup.group_number,member.member_fullname,member.member_idcard  FROM advisergroup
          LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id

        LEFT JOIN member ON advisergroup.group_id = member.member_id

        WHERE advisergroup.advisergroup_id ";


              ?>


      <table class="display datatable table table-stripped" cellspacing="0" width="100%">
          <thead bgcolor="gray">
              </br>
             <tr>
                        <th>No</th>   
                        <th>ID</th>
                        <th>Name</th>
                      <th>Topic</th>
                      <th>Abstrack</th>
                      <th>Keyword</th>
                      <th>Field of Study</th>
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
                     <td class="text-center"><?php echo $objResult->member_fullname; ?></td>
                    <td class="text-center"><?php echo $objResult->advisergroup_topic; ?></td>
  <td><a href="#" name="view" value="view" id="<?php echo $objResult->advisergroup_id; ?>" class=" view_data"><?php echo $objResult->project_abstrack; ?></a></td>


                     <td class="text-center"><?php echo $objResult->project_keyword ?></td>
                <td class="text-center"><?php echo fieldstudy($objResult->project_fieldstudy); ?></td>
                 <td class="text-center"><?php echo status($objResult->project_status); ?></td>
                 <td><input type="button" name="view" value="view" id="<?php echo $objResult->advisergroup_id; ?>" class="btn btn-info btn-xs view_data" /></td>  

                    
                  




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
           var employee_ids = $(this).attr("id");  
           if(employee_ids != '')  
           {  
                $.ajax({  
                     url:"select1.php",  
                     method:"POST",  
                     data:{employee_ids:employee_ids},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  

 </script>