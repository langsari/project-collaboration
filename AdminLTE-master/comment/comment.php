
   <link rel="stylesheet" href="../../assets/comment/style.css">

   <div class="comments-app"  ng-controller="CommentsController as cmntCtrl">

  
  <!-- From -->
  <div class="comment-form">
    <!-- Comment Avatar -->
    <div class="comment-avatar">
         <img src="../../dist/img/user1.png" >  
    </div>

    <form method="post" action="check_comment.php" class="form" name="form" ng-submit="form.$valid && cmntCtrl.addComment()" >

      <div class="form-row">
        <textarea
                  class="input"
                 name="com_content" id="com_content"
                  placeholder="Add comment..." class="form-control"
                  required></textarea>

             
      </div>

 <div class="col-md-9">
                <select class="form-control" name="member_id" hidden="">

                  <?php
                include '../menu/connect.php';
                $strSQL = "SELECT  member_fullname FROM member WHERE member_id ='".$_SESSION['id']."'";
                if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){
                    echo "<option value='".$objResult->member_fullname."'</option>";
                  }
                }else{
                }
                ?>
                </select>

              </div>
     <input type="hidden" name="advisergroup_id" id="advisergroup_id"  />

     
      <div class="form-row">
        <input type="submit" value="Add Comment">
      </div>
    </form>
  </div>



  <?php
            $g_id = get_group_id();
              $ag_id = get_ag_id($g_id);
              

    $strSQL = "SELECT advisergroup.*, partnergroup.group_number,partnergroup.group_id,advisergroup.member_id,advisergroup.group_id,comment.com_content,comment.com_date,comment.member_id,member.member_fullname FROM advisergroup
          LEFT JOIN comment ON advisergroup.advisergroup_id = comment.advisergroup_id

          LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id



        LEFT JOIN member ON advisergroup.member_id = member.member_id 
        WHERE advisergroup.advisergroup_id = '$ag_id'";                 
     if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){


   ?>



   <!-- Comment - Dummy -->
    <div class="comment">
      <!-- Comment Avatar -->
      <div class="comment-avatar">
         <img src="../../dist/img/user1.png" >  
      </div>

      <!-- Comment Box -->
      <div class="comment-box">
                <div class="comment-text"><b><?php echo $objResult->member_id;?></b></div>

        <div class="comment-text"><?php echo $objResult->com_content;?></div>
        <div class="comment-footer">
          <div class="comment-info">
            <span class="comment-author">
                 Share by
            </span>
            <span class="comment-date"><?php echo $objResult->com_date;?></span>
          </div>

          <div class="comment-actions">
            <a href="#">Reply</a>
          </div>
     
        </div>
      </div>
    </div>      <?php
                 }
               }
                   ?>
  </div>
</div>
