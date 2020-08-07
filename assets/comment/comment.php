<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Comments App - AngularJS</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="comments-app" ng-app="commentsApp" ng-controller="CommentsController as cmntCtrl">

  
  <!-- From -->
  <div class="comment-form">
    <!-- Comment Avatar -->
    <div class="comment-avatar">
         <img src="../../dist/img/user1.png" >  
    </div>

    <form method="post" action="student/check_chat.php" class="form" name="form" ng-submit="form.$valid && cmntCtrl.addComment()" >


      <div class="form-row">
        <textarea
                  class="input"
                 name="chat_massage" id="chat_massage"
                  placeholder="Add comment..." class="form-control"
                  required></textarea>
      </div>

   <div class="col-md-9">
                <select class="form-control" name="member_id" hidden="">

                  <?php
                include '../menu/connect.php';
                $strSQL = "SELECT member_id, member_fullname FROM member WHERE member_id ='".$_SESSION['id']."'";
                if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){
                    echo "<option value='".$objResult->member_id."'>".$objResult->member_fullname."</option>";
                  }
                }else{
                }
                ?>
                </select>

              </div>

                   <input type="hidden" name="chat_id" id="chat_id"  />

      <div class="form-row">
        <input type="submit" value="Add Comment">
      </div>
    </form>
  </div>
