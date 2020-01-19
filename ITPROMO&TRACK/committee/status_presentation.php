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
  <li class="active">My profile</li>
</ul>

   <!-- PAGE CONTENT -->


    <?php

$id = $_GET['id'];


        $strSQL = "SELECT advisergroup.*, partnergroup.group_number,partnergroup.group_id,advisergroup.advisergroup_status,files.files_status,files.member_id,files.committeegroup_id,files.status_presentation,files.files_id FROM advisergroup
              LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id
          LEFT JOIN committeegroup ON advisergroup.group_id = committeegroup.group_id

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.group_id  ='".$_GET['id']."'";  



   
        ?>
        <?php
     if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){
            ?>
                <div class="content">
                    <div class="row">
                        <div class="col-md-10 ">
                            <div class="card">
                                <div class="card-block"> 


<form action="student/check_editprofile.php?id=<?php echo $_GET["id"];?>"name="fromEdit" method="post"onsubmit="return checkForm()">

           

                                        <div class="form-group row margin-top-30">
 
                                            <div class="col-md-3">
                                                <label class="control-label col-form-label">ID card</label>
                                            </div>

                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="member_idcard" id="member_idcard"  value="<?php echo $objResult->group_number; ?>" >
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class="control-label col-form-label">Fullname</label>
                                            </div>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="member_fullname" id="member_fullname"  value="<?php echo get_member_list($objResult->group_id); ?>" >                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class="control-label col-form-label">Phone</label>
                                            </div>
                                            <div class="col-md-9">
                                      <input type="text" class="form-control" name="member_phone" id="member_phone"  value="<?php echo get_topic($objResult->group_id); ?>" >                                            </div>
                                        </div>


                                         <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class="control-label col-form-label">Gender</label>
                                            </div>
                                            <div class="col-md-9">
                                     <input type="text" class="form-control" name="member_gender" id="member_gender"  value="<?php echo get_advisor($objResult->group_id); ?>" >                                            </div>
                                        </div>


                                     <input type="hidden" name="member_id" value="<?php echo $objResult->member_id;?>"/>

                                        <div class="pull-right">
                                                            <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Save</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                       <?php
                 }
               }
                   ?>