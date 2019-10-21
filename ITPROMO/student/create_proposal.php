   <!-- PAGE CONTENT -->



  
<?php
                     require 'menu/function.php';

$my_id = $_SESSION['id'];
$my_group_id = get_group_id($my_id);
     $strSQL = "SELECT  advisergroup.advisergroup_topic, advisergroup.member_id,advisergroup.group_id,member.member_idcard
                           FROM advisergroup,member 
                     WHERE advisergroup.advisergroup_id = '$my_group_id' AND member.member_id = '$my_id'";

     if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){
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
                                       <input type="text" class="form-control" name="member_id"  value="<?php echo $objResult->member_idcard; ?>"  >
                                                    </div>
                                                </div>
                                       <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">Fullname </label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                        <input type="text" class="form-control"   value="<?php echo $_SESSION['name'];?>"   >
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">Topic</label>
                                                    </div>
                                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo $objResult->advisergroup_topic; ?>"  >
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
                                        <input type="text" class="form-control" id="topic_keyword" name="topic_keyword" placeholder="Keyword" autocomplete="off" required aria-describedby="basic-addon1">
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


  <?php

$my_id = $_SESSION['id'];

$my_group_id = get_group_id($my_id);

          $sql = "SELECT advisergroup.*, partnergroup.group_number,member.member_fullname FROM advisergroup
          LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id

        WHERE advisergroup.advisergroup_id = '$my_group_id'";
              if($rs = $db->query($sql)){
                while($row = $rs->fetch_object()){
              ?>
             
       <div class="form-group row">
        <div class="col-md-3">
        <label class="control-label col-form-label">Advisor </label>
     </div>
       <div class="col-md-9"> 
       <input type="text"    class="form-control"  name="advisergroup_id"
                                         value="<?php echo $row->member_fullname; ?>"  >
                                                    </div>
                                                </div>
 <?php
                }
              }else{
              }
              ?>




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


               <?php
                 }
               }
                   ?>


                                    </form>
                                </div>


</body>

</html>