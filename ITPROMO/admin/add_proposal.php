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
  <li class="active">Add Proposal</li>
</ul>


<div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">

  <button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#addproposal" style="margin-bottom: 10px;">

            <i class="glyphicon glyphicon-plus"></i>Add Schedule Proposal
          </button>


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
             <select class="form-control" name="group_id">
              <option value="no">- Select Lecturer -</option>
                <?php
                include '../db/ConnectDB.php';
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

                                              
  <div class="form-group row">           
       <div class="col-md-3">
             <label class="control-label col-form-label">BY</label>
           </div>
             <div class="col-md-9">
             <select class="form-control" name="admin_id">

                <?php
                include '../db/ConnectDB.php';
                $strSQL = "SELECT admin_id, admin_fullname FROM admin WHERE admin_id ='".$_SESSION['id']."'";
                if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){
                    echo "<option value='".$objResult->admin_id."'>".$objResult->admin_fullname."</option>";
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
               <button type="submit" class="btn btn-primary btn-lg btn-block">Create</button>

                                                    </div>
                                                </div>
                                            </div>
                                    </form>
                                </div>



 <h6 class="card-title text-bold">Schedule Proposal</h6>              

     <?php
                       require 'menu/function.php';

 $strSQL = "SELECT * FROM topic_project   ";



        ?>
       <table class="display datatable table table-stripped" cellspacing="0" width="100%">
          <thead>
             <tr>
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
                     
                     
                 </tr>
               </thead>
           <?php
     if($objQuery = $db->query($strSQL)){
       while($objResult = mysqli_fetch_array($objQuery)) {
            ?>

           <tbody>
            <tr>


                     

                   <td><?php echo $objResult["member_idcard"];?></td>
                      <td><?php echo $objResult["Student_name"];?></td>
                      <td><?php echo $objResult["topic_topic"];?></td>
                      <td><?php echo $objResult["topic_abstrack"];?></td>
                      <td><?php echo $objResult["topic_keyword"];?></td>
                       <td><?php echo $objResult["topic_fieldstudy"];?></td>
                      <td><?php echo $objResult["topic_years"];?></td>
                       <td><?php echo $_SESSION["name"];?></td>
                       <td><?php echo $objResult["group_id"];?></td>



                          <td>
                  <a href="delete/check_delete.php?id=<?php echo $objResult["news_id"];?>" title="Confirm" onclick="return confirm('<?php echo $objResult["news_topic"];?>')"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                     <a href="delete/check_delete.php?id=<?php echo $objResult["news_id"];?>" title="Confirm" onclick="return confirm('<?php echo $objResult["news_topic"];?>')"> <i class="fa fa-edit" aria-hidden="true"></i>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                     <a href="delete/check_delete.php?id=<?php echo $objResult["news_id"];?>" title="Confirm" onclick="return confirm('<?php echo $objResult["news_topic"];?>')"> <i class="fa fa-trash" aria-hidden="true"></i>
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

</body>

</html>