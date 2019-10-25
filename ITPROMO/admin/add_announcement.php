

<!DOCTYPE html>
<html>
<head>
  <title>Add Announcement</title>
 <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <style>
    h6{
      font-family:initial;
      font-size: 25px;
    }
    #header{
      background-color:#e7e7e7;
      color: black;
      text-align: center;
      padding: 4px;
    }
   
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

</head>
<body>



 
 <ul class="breadcrumb">
 <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
  <li class="active">Add Announcements</li>
</ul>



                              
<div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                  <div id="header">
                                      <h6 class="card-title text-bold">Announcements</h6>
                                  </div>
                                <div class="card-block">


  <button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#addmember" style="margin-bottom: 20px; border-radius: 12px; font-size: 14px; ">

            <i class="fa fa-plus-square"></i> New Announcement
          </button>


          <!-- Modal -->
<div class="modal fade" id="addmember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i> Add New Annoucement</h4>
      </div>
      <div class="modal-body">
         
       <form id="add" name="add" method ="post" action ="admin/check_add_announcement.php" onsubmit="return checkForm()" >
                  

          


            <div class="form-group row">
                    <div class="col-md-3">
                         <label class="control-label col-form-label">Topic</label>
                    </div>
                     <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Topic" aria-describedby="basic-addon1" id="announcement_topic" name="announcement_topic" autocomplete="off" required>
               </div>
                   </div>
                  
 

                                     
                                     
                    <div class="form-group row">
                    <div class="col-md-3">
                         <label class="control-label col-form-label">     Begin Date: </label>
                    </div>
                     <div class="col-md-9">
        <input type="date" name="announcement_date" id="announcement_date" class="form-control" required>
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

                     <div class="form-group row">
                    <div class="col-md-3">
                         <label class="control-label col-form-label">Detail</label>
                    </div>
                     <div class="col-md-9">
 <textarea rows="10" width="40" class="form-control" id="announcement_detail" name="announcement_detail" placeholder="Project Description"></textarea>
                <script>
                  CKEDITOR.replace( 'announcement_detail' );
                </script>               </div>
                   </div>

                                              


               <button type="submit" class="btn btn-primary btn-lg btn-block">Create</button>

                                                    </div>
                                                </div>
                                            </div>
                                    </form>
                                </div>


  <!--show all announcement -->


 
     <?php
 


  $strSQL = "SELECT  announcement.announcement_topic,  announcement.announcement_id, announcement.announcement_detail,announcement.announcement_date,admin.admin_fullname
                           FROM announcement,admin 
                           WHERE announcement.admin_id=admin.admin_id
                           ORDER BY announcement.announcement_id";

        ?>
       <table class="display datatable table table-stripped" cellspacing="0" width="100%">
          <thead>
             <tr>
                      <th>No</th>                     
                      <th>Topic</th>
                      <th>Detail</th>
                      <th>Date</th>
                      <th>By</th>
                       <th>Option</th>

                     
                 </tr>
               </thead>
                <?php
     if($result = $db->query($strSQL)){
             while($objResult = $result->fetch_object()){
            ?>

           <tbody>
            <tr>
                  <td class="text-center"><?php echo $objResult->announcement_id; ?></td>
                  <td class="text-center"><?php echo $objResult->announcement_topic; ?></td>
                    <td class="text-center"><?php echo $objResult->announcement_detail; ?></td>
                     <td class="text-center"><?php echo $objResult->announcement_date; ?></td>
                     <td class="text-center"><?php echo $objResult->admin_fullname ?></td>
                



 <td>
                  <a href="delete/check_delete.php?id=<?php echo $objResult->topic_id;?>" title="Confirm" onclick="return confirm('<?php echo $objResult->topic_topic;?>')"> <i class="fa fa-eye" aria-hidden="true"></i></a>
     
                     <a href="delete/check_delete.php?id=<?php echo$objResult->topic_id;?>" title="Confirm" onclick="return confirm('<?php echo  $objResult->topic_topic;?>')"> <i class="fa fa-edit" aria-hidden="true"></i>
           
                     <a href="delete/check_delete.php?id=<?php echo $objResult->topic_id;?>" title="Confirm" onclick="return confirm('<?php echo $objResult->topic_topic;?>')"> <i class="fa fa-trash" aria-hidden="true"></i>
                      </td>
                    </tr>

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