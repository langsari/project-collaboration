 <!DOCTYPE html>
 <html>
 <head>
   <title></title>

 <script src='https://kit.fontawesome.com/a076d05399.js'></script>
 <style>
    h6{
      font-family:initial;
      font-size: 25px;
      color: green;
    }
    #more {display: none;}
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

 <ul class="breadcrumb">
 <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
  <li class="active">All Member</li>
</ul>


         <!-- PAGE CONTENT -->
                <div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">

 <button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#addproposal" style="margin-bottom: 10px;">

            <i class="glyphicon glyphicon-plus"></i>Add New Proposal
          </button>


                                    <h6 class="card-title text-bold">Default Datatable</h6>


     <?php
//require 'menu/function.php';

 $strSQL = "SELECT * FROM topic_project";
  
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
                      <th>Field study</th>
                       <th>Years</th>
                       <th>By</th>
                       <th>Advisor</th>
                       <th>Stutus</th>
                       <th>#</th>

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
                     <td class="text-center"><?php echo $objResult->topic_abstrack; ?></td>
                     <td class="text-center"><?php echo $objResult->topic_keyword ?></td>
                   <td class="text-center"><?php echo fieldstudy($objResult->topic_fieldstudy); ?></td>
                   <td class="text-center"><?php echo $objResult->topic_years; ?></td>
                    <td class="text-center"><?php echo $objResult->position; ?></td>
                        <td class="text-center"><?php echo $objResult->adviser; ?></td>
                 <td class="text-center"><?php echo status($objResult->status); ?></td>

                    <td>
                  <a href="delete/check_delete.php?id=<?php echo $objResult->topic_id;?>" title="Confirm" onclick="return confirm('<?php echo $objResult->topic_topic;?>')"> <i class="fa fa-eye" aria-hidden="true"></i></a>
     
                     <a href="delete/check_delete.php?id=<?php echo$objResult->topic_id;?>" title="Confirm" onclick="return confirm('<?php echo  $objResult->topic_topic;?>')"> <i class="fa fa-edit" aria-hidden="true"></i>
           
                     <a href="delete/check_delete.php?id=<?php echo $objResult->topic_id;?>" title="Confirm" onclick="return confirm('<?php echo $objResult->topic_topic;?>')"> <i class="fa fa-trash" aria-hidden="true"></i>
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
           
            <!-- /PAGE CONTENT -->
         <div class="box-body">
            <!-- Modal -->
<div class="modal fade" id="addproposal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i>  Add New Proposal</h4>
      </div>
      <div class="modal-body">
         
       <form id="add" name="add" method ="post" action ="admin/check_proposal.php" onsubmit="return checkForm()" >
                  


                  <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">ID  Student </label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                        <input type="text" class="form-control" id="member_idcard" name="member_idcard"placeholder="ID Student" autocomplete="off" required aria-describedby="basic-addon1">
                                                    </div>
                                                </div>

   
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">Fullname </label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                        <input type="text" class="form-control" id="Student_name" name="Student_name"placeholder="Name of Student" autocomplete="off" required aria-describedby="basic-addon1">
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">Topic</label>
                                                    </div>
                                                    <div class="col-md-9">
                     
                                        <input type="text" class="form-control" id="topic_topic" name="topic_topic"placeholder="Topic" autocomplete="off" required aria-describedby="basic-addon1">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">Abstarck</label>
                                                    </div>
                                                    <div class="col-md-9">
    <textarea rows="14" class="form-control" id="topic_abstrack" name="topic_abstrack" placeholder="Abstarck"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">Keyword</label>
                                                    </div>
                                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="topic_keyword" name="topic_keyword"placeholder="Keyword" autocomplete="off" required aria-describedby="basic-addon1">
                                                    </div>
                                                </div>

 <div class="form-group row">           
       <div class="col-md-3">
             <label class="control-label col-form-label">Filed of Study</label>
           </div>
             <div class="col-md-9">
                                    <select class="form-control" name="topic_fieldstudy" id="topic_fieldstudy">

        
              <option value="no"> Select Filed</option>
               <option value="1">Software Engineering</option>
                 <option value="2">Computer Multimedia</option>
                   <option value="3">Computer Networking</option>
              </select>
      
            </div>
          </div>


                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">Years</label>
                                                    </div>
                                                    <div class="col-md-9">
                                        <input type="DATE" class="form-control" id="topic_years" name="topic_years"placeholder="Years" autocomplete="off" required aria-describedby="basic-addon1">
                                                    </div>
                                                </div>


 <div class="form-group row">           
       <div class="col-md-3">
             <label class="control-label col-form-label">Lecturer</label>
           </div>
             <div class="col-md-9">
             <select class="form-control" name="adviser">
              <option value="no">- Select Lecturer -</option>
                <?php
                include '../menu/connect.php';
                $strSQL = "SELECT member_id, member_fullname FROM member WHERE member_pos ='1'";
                if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){
                    echo "<option value='".$objResult->member_id."'>".$objResult->member_fullname."</option>";
                  }
                }else{
                }
                ?>
              </select>
      
            </div>
          </div>

                                              
 
          
 <div class="form-group ">           
       <div class="col-md-3">
             <label class="control-label col-form-label">Proposal status</label>
           </div>
             <div class="col-md-9">
             <select class="form-control" name="status" >
                <option value="1">Proposal Appoved</option> 
                <option value="2"> Proposal Not Appoved</option>
            
              </select>
      
            </div>
          </div>

             <input type="text" class="form-control" id="position" name="position" value="1" hidden="">

               <button type="submit" class="btn btn-primary btn-lg btn-block">Create</button>

                                                    </div>
                                                </div>
                                            </div>
                                    </form>
                                </div>


</body>

</html>