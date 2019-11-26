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
  <li class="active">Edit Profile</li>
</ul>

   <!-- PAGE CONTENT -->
            <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itpromo&track";

   $id = null;
   
   if(isset($_GET["id"]))
   {
       $lect_ID = $_GET["id"];
   }
  
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "itpromo";

   $conn = mysqli_connect($servername,$username,$password,$dbname);
   $sql ="SELECT *FROM member WHERE member_id = '".$_GET["id"]."'";
$query = mysqli_query($conn,$sql);

   $Result=mysqli_fetch_array($query,MYSQLI_ASSOC);
  
   ?> 

                <div class="content">
                    <div class="row">
                        <div class="col-md-8 ">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Edit</h5>
                                    <form action="#" class="form-horizontal">
                                        <div class="form-group row margin-top-30">

                                            <div class="col-md-3">
                                                <label class="control-label col-form-label">ID card</label>
                                            </div>

                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="member_idcard" id="member_idcard"  value="<?php echo $Result["member_idcard"]; ?>" >
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class="control-label col-form-label">Fullname</label>
                                            </div>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="member_fullname" id="member_fullname"  value="<?php echo $Result["member_fullname"]; ?>" >                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class="control-label col-form-label">Phone</label>
                                            </div>
                                            <div class="col-md-9">
                                      <input type="text" class="form-control" name="member_phone" id="member_phone"  value="<?php echo $Result["member_phone"]; ?>" >                                            </div>
                                        </div>


                                         <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class="control-label col-form-label">Gender</label>
                                            </div>
                                            <div class="col-md-9">
                                     <input type="text" class="form-control" name="member_gender" id="member_gender"  value="<?php echo $Result["member_gender"]; ?>" >                                            </div>
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
        
                                                       <input type="text" class="form-control" name="member_email" id="member_email"  value="<?php echo $Result["member_email"]; ?>" >
                                                </div>
                                            </div>
                                        </div>

                                     
                                        <div class="pull-right">
                                            <button type="reset" class="btn btn-secondary">
                                                Reset
                                                <i class="fa fa-refresh position-right"></i>
                                            </button>

                                            <button type="submit" class="btn btn-primary">
                                                Submit
                                                <i class="fa fa-arrow-right position-right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                   