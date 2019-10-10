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
  </style>
</head>
<body>
<div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
 
                                   <h6 class="card-title text-bold"><b>All Final Projects Proposal</h6></b>
     <?php
 
  $strSQL = "SELECT * FROM topic_project ";
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
                      <th>Field</th>
                      <th>Status</th>


                 </tr>
               </thead>
               <?php
     if($objQuery = $db->query($strSQL)){
       while($objResult = mysqli_fetch_array($objQuery)) {
            ?>

           <tbody>
            <tr>
                   <td><?php echo $objResult["topic_id"];?></td>            
                    <td><?php echo $objResult["id_student"];?></td>
                   <td><?php echo $objResult["fullname"];?></td>
                      <td><?php echo $objResult["topic_topic"];?></td>
                      <td><a href="?page=proposal_project&topic_id=<?php echo $objResult["topic_id"];?>" data-toggle="modal" data-target="#addmember" style="margin-bottom: 10px;"><?php echo $objResult["topic_abstrack"];?></td>
                      <td><?php echo $objResult["topic_keyword"];?></td>
                      <td><?php echo $objResult["topic_fieldstudy"];?></td>
                      <td><?php echo $objResult["status"];?></td>
                      
          
                    
                  




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
<div class="modal fade" id="addmember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i> Detail</h4>
      </div>
      <div class="modal-body">
         
             <?php

  $strSQL = "SELECT * FROM topic_project WHERE topic_id ";
?>  <?php
     if($objQuery = $db->query($strSQL)){
       while($objResult = mysqli_fetch_array($objQuery)) {
            ?>
                           
                 
                                               
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">ID  Student </label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                                <input type="text" class="form-control"   value="<?php echo $objResult["id"]; ?>" >
                                                    </div>
                                                </div>

   
                                            
                                           

                                        <?php
                 }
               }
                   ?>


                                    </form>
                                </div>


</body>

</html>