<div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
  <button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#addmember" style="margin-bottom: 10px;">

            <i class="glyphicon glyphicon-plus"></i>Add Proposal
          </button>



                                    <h6 class="card-title text-bold">Default Datatable</h6>
     <?php
 
  $strSQL = "SELECT * FROM topic_project WHERE position='".$_SESSION['id']."'";
        ?>
   
       <table class="display datatable table table-stripped" cellspacing="0" width="100%">
          <thead>
             <tr>
                        <th>ID</th>
                      <th>Name</th>
                      <th>Topic</th>
                      <th>Abstrack</th>
                      <th>Keyword</th>
                      <th>Field</th>
                      <th>years</th>
                      <th>position</th>
                      <th>advisor</th>
                      <th>Status</th>


                 </tr>
               </thead>
               <?php
     if($objQuery = $db->query($strSQL)){
       while($objResult = mysqli_fetch_array($objQuery)) {
            ?>

           <tbody>
            <tr>
                    <td><?php echo $objResult["id_student"];?></td>
                   <td><?php echo $objResult["fullname"];?></td>
                      <td><?php echo $objResult["topic_topic"];?></td>
                      <td><?php echo $objResult["topic_abstrack"];?></td>
                      <td><?php echo $objResult["topic_keyword"];?></td>
                      <td><?php echo $objResult["topic_fieldstudy"];?></td>
                      <td><?php echo $objResult["topic_years"];?></td>
                       <td><?php echo $objResult["position"];?></td>
                      <td><?php echo $objResult["advisor"];?></td>
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

          <!-- Modal 
 <div class="content">
                          

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-block">
               <form id="add" name="add" method ="post" action ="admin/check_proposal.php" onsubmit="return checkForm()" >

                                    <legend class="text-bold margin-top-40">Add proposal</legend>
                                    <form action="#" class="form-horizontal">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row margin-top-10">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">ID Card Student</label>
                                                    </div>
                                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="id" name="id"placeholder="ID Student" autocomplete="off" required aria-describedby="basic-addon1">
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
             <label class="control-label col-form-label">Writter</label>
           </div>
             <div class="col-md-9">
                                    <select class="form-control" name="writer" id="writer">

        
              <option value="no"> Select</option>
               <option value="1">Admin</option>
                 <option value="2">Student</option>
                  
              </select>
      
            </div>
          </div>

 <div class="form-group row">           
       <div class="col-md-3">
             <label class="control-label col-form-label">Proposal status</label>
           </div>
             <div class="col-md-9">
             <select class="form-control" name="status" name="status">
                <option value="1">Proposal Appoved</option> 
                <option value="2"> Proposal Not Appoved</option>
            
              </select>
      
            </div>
          </div>



                                                    </div>
                                                </div>
                                            </div>
                                           

                                       
                                                     <button type="submit" class="btn btn-primary btn-lg btn-block">Create</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
-->


          <!-- Modal -->
<div class="modal fade" id="addmember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i> New Member</h4>
      </div>
      <div class="modal-body">
         
       <form id="add" name="add" method ="post" action ="admin/check_proposal.php" onsubmit="return checkForm()" >
                           
                 
                                               
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">ID  Student </label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                        <input type="text" class="form-control" id="id_student" name="id_student"placeholder="ID Student" autocomplete="off" required aria-describedby="basic-addon1">
                                                    </div>
                                                </div>

   
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">Fullname </label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                        <input type="text" class="form-control" id="fullname" name="fullname"placeholder="fullname" autocomplete="off" required aria-describedby="basic-addon1">
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
             <select class="form-control" name="advisor">
              <option value="no">- Select Lecturer -</option>
                <?php
                include '../db/ConnectDB.php';
                $strSQL = "SELECT member_id, member_fullname FROM member WHERE member_pos ='1'";
                if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){
                    echo "<option value='".$objResult->member_id."'>".$objResult->member_fullname."</option>";
                  }
                  $db->close();
                }else{
                  echo $db->error;
                  $db->close();
                }
                ?>
              </select>
      
            </div>
          </div>

 <div class="form-group row">           
       <div class="col-md-3">
             <label class="control-label col-form-label">Writter</label>
           </div>
             <div class="col-md-9">
                                    <select class="form-control" name="position" id="position">


               <option value="1">Admin</option>
      
                  
              </select>
      
            </div>
          </div>

 <div class="form-group ">           
       <div class="col-md-3">
             <label class="control-label col-form-label">Proposal status</label>
           </div>
             <div class="col-md-9">
             <select class="form-control" name="status" name="status">
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


</body>

</html>