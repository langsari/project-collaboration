<?php
$success = "0";
if(isset($_GET['success'])){
  $success = $_GET['success'];
}
?>





              <div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
                                    <h6 class="card-title text-bold">Default Datatable</h6>                         
     <?php
 
        
 $strSQL  = "SELECT * FROM news_topic WHERE member_id='".$_SESSION['id']."'";
                      

  ?>



       <table class="display datatable table table-stripped" cellspacing="0" width="100%">
          <thead>
             <tr>
                     <th>#</th>                     
                      <th>Topic</th>
                      <th>Detail</th>
                      <th>Date</th>
                      <th>By</th>

                 </tr>
               </thead>
               <?php
     if($objQuery = $db->query($strSQL)){
       while($objResult = mysqli_fetch_array($objQuery)) {
            ?>

           <tbody>
            <tr>
                      <td><?php echo $objResult["news_id"];?></td>
                      <td><?php echo $objResult["news_topic"];?></td>
                      <td><?php echo $objResult["news_detail"];?></td>
                      <td><?php echo $objResult["news_date"];?></td>
                      <td><?php echo $_SESSION['name'];?></td>
                      <td></td>
   
                      
          
                    
                  




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



  <div class="box-body">
          <?php if($success == 1): ?>
          <div class="alert alert-success" role="alert">
            <i class="glyphicon glyphicon-ok"></i> Your topic already send to your Advisor. Please wait till He/She accept it!
          </div>
          <?php endif; ?>

      

  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addmember" style="margin-bottom: 10px;">
            <i class="glyphicon glyphicon-plus"></i> Create New Topic
          </button>

     <div class="modal fade" id="addmember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i>                                     <h4 class="card-title text-bold">Add Topic</h4>                         

      </div>
      <div class="modal-body">
            <form id="add" name="add" method ="post" action ="advisor/check_newstopic.php" onsubmit="return checkForm()" >
                            <div class="user-details">
                                <div class="form-group">
                                    <div class="input-group">
                                      
                                        <input type="text" class="form-control" placeholder="Topic" aria-describedby="basic-addon1" id="news_topic" name="news_topic" autocomplete="off" required>
                                    </div>
                                </div>

                                
                                                     <div class="form-group">
            <div class="col-sm-5">
           Begin Date:   <input type="date" name="news_date" id="news_date" class="form-control" required>
        </div>    




 <div class="form-group ">           
       <div class="col-md-3">
             <label class="control-label col-form-label">Lecturer</label>
           </div>
             <div class="col-md-9">
             <select class="form-control" name="member_id">
            
                <?php
                include '../db/ConnectDB.php';
                $strSQL = "SELECT member_id, member_fullname FROM member WHERE member_id ='".$_SESSION['id']."'";
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

 <div class="form-group">
              <label class="col-md-3 control-label">Project Detail</label>
  <div class="col-md-13">          
    <textarea rows="10" width="40" class="form-control" id="news_detail" name="news_detail" placeholder="Project Description"></textarea>
                <script>
                  CKEDITOR.replace( 'news_detail' );
                </script>
              </div>
            </div>
             

               <button type="submit" class="btn btn-primary btn-lg btn-block">Create</button>
                            
                            

      </div>
    </div>
  </div>               
      </div>
    </div>
  </div>
</div>
</form>





          </form>
        </div>
      </div><!-- /.box (box) -->
    </section>
 
