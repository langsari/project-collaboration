
<?php
$success = "0";
if(isset($_GET['success'])){
  $success = $_GET['success'];
}
?>


<?php
 
        
 $strSQL  = "SELECT * FROM news_topic WHERE member_id='".$_SESSION['id']."'";
                      

  ?>

  
 <div class="content">


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-block">
               <form id="add" name="add" method ="post" action ="student/check_proposal.php" onsubmit="return checkForm()" >


                                    <legend class="text-bold margin-top-40">Add proposal</legend>
                                    <form action="#" class="form-horizontal">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row margin-top-10">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">ID Card Student</label>
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
             <label class="control-label col-form-label">Advisor</label>
           </div>
             <div class="col-md-9">

   <select class="form-control" name="advisor">
              <option value="no">- Select advisor -</option>
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


        
                                    </form>
                                </div>


</body>

</html>