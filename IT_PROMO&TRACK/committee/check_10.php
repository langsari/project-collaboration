<?php
session_start();
$member_id = $_SESSION['id'];

if(isset($_GET['id'])){
                require '../menu/connect.php';
  $id = $_GET['id'];
  
  $status_project=$_POST['status_project'];

  $comment_project=$_POST['comment_project'];

  $sql = "UPDATE committeegroup SET status_project = '$status_project',comment_project='$comment_project'   WHERE group_id = '$id' and  member_id= '$member_id'";
  if($db->query($sql)){
    $db->close();
    header("Location: ../index.php?page=committee_request&success=1");
  }else{
    echo $db->error;
    $db->close();
  }
}

?>

