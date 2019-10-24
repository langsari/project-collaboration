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
  <li class="active">Create Proposal</li>
</ul>
   <!-- PAGE CONTENT -->
<?php
                     require 'menu/function.php';

$my_id = $_SESSION['id'];
$my_group_id = get_group_id($my_id);

     $strSQL = "SELECT  advisergroup.advisergroup_topic, advisergroup.member_id,advisergroup.group_id,member.member_idcard, topic_project.topic_id, topic_project.topic_abstrack,topic_project.topic_keyword,topic_project.topic_fieldstudy,topic_project.topic_years
   FROM advisergroup,member,topic_project
    WHERE advisergroup.advisergroup_id = '$my_group_id' AND member.member_id = '$my_id'
   AND topic_project.member_idcard = member.member_idcard    ";

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
                                       <input type="text" class="form-control" name="member_idcard"  value="<?php echo $objResult->member_idcard; ?>"  >
                                                    </div>
                                                </div>
                                       <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">Fullname </label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                        <input type="text" class="form-control"   name="Student_name"  value="<?php echo $_SESSION['name'];?>"   >
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">Topic</label>
                                                    </div>
                                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="topic_topic" value="<?php echo $objResult->advisergroup_topic; ?>"  >
                                                    </div>
                                                </div>


   <!-- PAGE CONTENT 

<?php

   

//$strSQL = "SELECT  topic_id, topic_abstrack,topic_keyword,topic_fieldstudy,topic_years
  // FROM topic_project,member
    //WHERE topic_project.member_idcard = member.member_idcard ='".$_SESSION['id']."'"; 


     //if($result = $db->query($strSQL)){
       ///           while($objResult = $result->fetch_object()){
            ?>-->
<div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">Abstarck</label>
                                                    </div>
                              
                                                   
                                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="topic_abstrack" name="topic_abstrack" placeholder="topic_abstrack" autocomplete="off" required aria-describedby="basic-addon1"value="<?php echo $objResult->topic_abstrack; ?>">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">Keyword</label>
                                                    </div>
                                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="topic_keyword" name="topic_keyword" placeholder="Keyword" autocomplete="off" required aria-describedby="basic-addon1"value="<?php echo $objResult->topic_keyword; ?>">
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
                                        <input type="DATE" class="form-control" id="topic_years" name="topic_years"placeholder="Years" autocomplete="off" required aria-describedby="basic-addon1"value="<?php echo $objResult->topic_years; ?>">
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
       <input type="text"    class="form-control"  name="group_id" 
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