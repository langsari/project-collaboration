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

          $sql = "SELECT advisergroup.*, partnergroup.group_number,member.member_fullname,member.member_idcard  FROM advisergroup
          LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id

        WHERE advisergroup.advisergroup_id = '$my_group_id'";



              if($rs = $db->query($sql)){
                while($row = $rs->fetch_object()){




              ?>

              
     <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-block">
               <form id="add" name="add" method ="post" action ="student/check_add.php?id=<?php echo $_SESSION["id"];?>" onsubmit="return checkForm()" >

                <form action="student/check_add.php?id=<?php echo $_GET["id"];?>"name="fromEdit" method="post"onsubmit="return checkForm()">

                  <?php
 $strSQL = "SELECT * FROM member  WHERE member_id='".$_SESSION['id']."'";      
        ?>
        <?php
     if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){

?>
                    <legend class="text-bold margin-top-40">Add proposal</legend>

      <!--
                <button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#addmember" style="margin-bottom: 10px;">

            <i class="glyphicon glyphicon-plus"></i>Add Proposal
          </button>


 Form show Proposal-->
  


  <!-- Modal  Popoup-->

  

                                            <div class="col-md-6">
                                                <div class="form-group row margin-top-10">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">ID Student</label>
                                                    </div>
                                                    <div class="col-md-9 ">
                                          <?php echo $objResult->member_idcard; ?>   
                                                    </div>
                                                </div>

              
                                       <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">Fullname </label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                       <?php echo $_SESSION['name'];?>
                                                    </div>
                                                </div>
             


                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">Topic</label>
                                                    </div>
                                                    <div class="col-md-9">
                                       <?php echo $row->advisergroup_topic; ?>
                                                    </div>
                                                </div>

                                 
   
<td><div align="center"> <input type="hidden" name="advisergroup_id" value="<?php echo $row->advisergroup_id; ?>" /></div></td></tr>


                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">Abstarck</label>
                                                    </div>
                                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="project_abstrack" name="project_abstrack"  value="<?php echo $row->project_abstrack; ?>"  style="width: 600px; height: 100px" >
                                                    </div>
                                                </div>
                                                


                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">Keyword</label>
                                                    </div>
                                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="project_keyword" name="project_keyword" value="<?php echo $row->project_keyword; ?>"    autocomplete="off" required aria-describedby="basic-addon1" >
                                                    </div>
                                                </div>

                                            <div class="form-group row">           
                                                 <div class="col-md-3">
                                          <label class="control-label col-form-label">Filed of Study</label>
                                             </div>
                                         <div class="col-md-9">
                                       <select class="form-control" name="project_fieldstudy" id="project_fieldstudy">

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
                                        <input type="DATE" class="form-control" id="project_years" name="project_years"  autocomplete="off" required aria-describedby="basic-addon1" value="<?php echo $row->project_years; ?>" >
                                                    </div>
                                                </div>
  
                                     <div class="form-group row">
                                                <div class="col-md-3">
                                                        <label class="control-label col-form-label">Advisor </label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                             <?php echo $row->member_fullname; ?>
                                                    </div>
                                                </div>

 
 <div class="form-group row">           
       <div class="col-md-3">
             <label class="control-label col-form-label">Status Project</label>
           </div>
             <div class="col-md-9">
             <select class="form-control" name="project_status" name="project_status" value=" <?php echo $row->project_status; ?>">
                <option value="1">Proposal Appoved</option> 
                <option value="2"> Proposal Not Appoved</option>
                 <option value="3">Done</option>
              </select>
      
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


 <?php
                 }


               }
                   ?>

