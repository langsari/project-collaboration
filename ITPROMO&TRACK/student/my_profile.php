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
   
  $strSQL = "SELECT * FROM member  WHERE member_id='".$_SESSION['id']."'";      
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
                                                <input type="text" class="form-control" name="member_idcard" id="member_idcard"  value="<?php echo $objResult->member_idcard; ?>" >
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class="control-label col-form-label">Fullname</label>
                                            </div>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="member_fullname" id="member_fullname"  value="<?php echo $objResult->member_fullname; ?>" >                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class="control-label col-form-label">Phone</label>
                                            </div>
                                            <div class="col-md-9">
                                      <input type="text" class="form-control" name="member_phone" id="member_phone"  value="<?php echo $objResult->member_phone; ?>" >                                            </div>
                                        </div>


                                         <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class="control-label col-form-label">Gender</label>
                                            </div>
                                            <div class="col-md-9">
                                     <input type="text" class="form-control" name="member_gender" id="member_gender"  value="<?php echo gender($objResult->member_gender); ?>" >                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class="control-label col-form-label">Email Address</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                      <i class="fa fa-user"></i>
                                                    </span>
        
                                                       <input type="text" class="form-control" name="member_email" id="member_email"  value="<?php echo $objResult->member_email; ?>" >
                                                </div>
                                            </div>
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