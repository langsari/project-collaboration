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
    ul.breadcrumb{
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
    <li class="active">Create Proposal</li>  
  </ul>

  <!-- PAGE CONTENT -->
  <?php
  // require 'menu/function.php';
  $my_id = $_SESSION['id'];
  $my_group_id = get_group_id($my_id);


  //Initialise Value to variable

      $strSQL="SELECT advisergroup.*,advisergroup.advisergroup_id, advisergroup.advisergroup_status,advisergroup.advisergroup_topic,advisergroup.group_id, member.member_id,member.member_fullname,member.member_idcard ,topic_project.topic_abstrack,topic_project.topic_keyword ,topic_project.topic_years,topic_project.topic_fieldstudy,partnergroup.group_id,partnergroup.group_number
        FROM advisergroup
        LEFT JOIN topic_project ON advisergroup.advisergroup_id = topic_project.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id
        WHERE advisergroup.group_id = '$my_group_id' AND partnergroup.group_id= '$my_group_id'";

      if ($result = $db->query($strSQL)) {
          while ($objResult = $result->fetch_object()) {

        ?>

          <div class="content">

            <div class="row">

              <div class="col-md-12">

                <div class="card">

                  <div class="card-block">

                    <form id="add" name="add" method ="post" action ="student/check_proposal.php" onsubmit="return checkForm()">
                      <legend class="text-bold margin-top-40">Add proposal</legend>

                      <form action="#" class="form-horizontal">

                        <?php

                        $strSQL="SELECT * FROM member  WHERE member_id='".$_SESSION['id']."'";

                        ?>

                        <?php

                        if ($result = $db->query($strSQL)) {
                          while ($row = $result->fetch_object()) {
                        ?>

                        <?php
                        $sql ="SELECT * FROM member WHERE group_id = '$my_group_id'";

                        if ($rs = $db->query($sql)) {

                          if ($rs->num_rows > 0) {
                            while ($ro = $rs->fetch_object()) {

                              
                            }
                          }
                        }
                        ?>

                        

                        <div class="row">

                          <div class="col-md-6">
<!--get ID studnet   -->
                            <div class="form-group row margin-top-10">

                              <div class="col-md-3">
                                <label class="control-label col-form-label">ID Card Student
                                </label>

                              </div>
                              
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="member_idcard"  value="<?php echo $row->member_idcard; ?>">
                                
                              </div>
                            </div>


<!--get studnet name   -->
                            <div class="form-group row">
                              <div class="col-md-3">
                                <label class="control-label col-form-label">Fullname</label>
                                
                              </div>
                              <div class="col-md-9">
                                <input type="text" class="form-control"   name="Student_name"  value="<?php echo $_SESSION['name'];?>">
                                
                              </div>
                            </div>
<!--get ID Project  -->
                            <div class="form-group row">
                              <div class="col-md-3">
                                <label class="control-label col-form-label">ID Project</label>
                                
                              </div>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="group_number"  value="<?php echo $objResult->group_number; ?>">
                                
                              </div>
                            </div>

<!--get Project Owner  -->
                            <div class="form-group row">
                              <div class="col-md-3">
                                <label class="control-label col-form-label">Project Owner</label>
                                
                              </div>
                              <div class="col-md-9">
                                
                                <td class="form-control" name="Owner"><?php echo get_member_list($row->group_id); ?></td>
                                
                              </div>
                            </div>
<!--get Topic   -->

                            <div class="form-group row">
                              <div class="col-md-3">
                                <label class="control-label col-form-label">Topic</label>
                                
                              </div>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="topic_topic" value="<?php echo $objResult->advisergroup_topic; ?>">
                                
                              </div>
                          
                            </div>
<!--get project Abstarck   -->

                            <div class="form-group row">
                              <div class="col-md-3">
                                <label class="control-label col-form-label">Abstarck</label>
                                
                              </div>
                              <div class="col-md-9">
                                <input type="text" class="form-control" id="topic_abstrack" name="topic_abstrack" value="<?php echo $objResult->topic_abstrack; ?>"  autocomplete="off" required aria-describedby="basic-addon1" >
                              </div>
                              
                            </div>
<!--get project Keyword  -->      

                             <div class="form-group row">
                              <div class="col-md-3">
                                <label class="control-label col-form-label">Keyword </label>
                                
                              </div>
                              <div class="col-md-9">
                                <input type="text" class="form-control" id="topic_keyword" name="topic_keyword" value="<?php echo $objResult->topic_keyword; ?>"  autocomplete="off" required aria-describedby="basic-addon1">
                                
                              </div>
                               
                             </div>
<!--get project Filed of Study -->

                             <div class="form-group row">
                               <div class="col-md-3">
                                <label class="control-label col-form-label">Filed of Study</label>
                               </div>
                               <div class="col-md-9">
                                <select class="form-control" name="topic_fieldstudy" id="topic_fieldstudy" value="<?php echo $objResult->topic_fieldstudy; ?>" >
                                  <option value="no"> Select Filed</option>
                                  <option value="Software Engineering">Software Engineering</option>
                                  <option value="Computer Multimedia">Computer Multimedia</option>
                                  <option value="Computer Networking">Computer Networking</option>
                                  
                                </section>
                                 
                               </div>

                             </div>

<!--get project Years -->

                             <div class="form-group row">
                              <div class="col-md-3">
                                <label class="control-label col-form-label">Years</label>
                                
                              </div>
                              <div class="col-md-9">
                                <input type="DATE" class="form-control" id="topic_years" name="topic_years" value="<?php echo $objResult->topic_years; ?>"   autocomplete="off" required aria-describedby="basic-addon1" >
                                
                              </div>
                               
                             </div>
<!--get project Advisors -->

                             <div class="form-group row">
                              <div class="col-md-3">
                                <label class="control-label col-form-label">Advisor </label>
                                
                              </div>
                              <div class="col-md-9">
                                <input type="text"    class="form-control"  name="adviser" 
                                         value="<?php echo get_advisor($objResult->group_id); ?>">
                                
                              </div>
                               
                             </div>
<!--get project Proposal status -->
                      
                             <div class="form-group row">
                              <div class="col-md-3">
                                <label class="control-label col-form-label">Proposal status</label>
                                
                              </div>
                              <div class="col-md-9">
                                <select class="form-control" name="status" name="status" value="<?php echo $objResult->status; ?>"   >
                                 <option value="Proposal Approve">Proposal Appoved</option> 
                                 <option value="Proposal not Approve"> Proposal Not Appoved</option>
            
                                </select>
                                
                              </div>
                               
                             </div>
                            
                          </div>

                          <input type="text" class="form-control" id="position" name="position" value="2" hidden="">

                          <button ype="submit" class="btn btn-primary btn-lg btn-block">Create</button>

                      
                          
                        </div>
                        
                      </form>
                      
                    </form>
                    
                  </div>
                  
                </div>
                
              </div>
              
            </div>
            
          </div>
            
<?php
  }
  }
?>

<?php
    }
    }
?>

</body>
</html>