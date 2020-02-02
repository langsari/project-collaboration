<?php
session_start();
$member_id = $_SESSION['id'];

if(isset($_GET['id'])){
                require '../menu/connect.php';
  $id = $_GET['id'];
  
  $status_presentation=$_POST['status_presentation'];

  $comment=$_POST['comment'];

  $sql = "UPDATE committeegroup SET status_presentation = '$status_presentation',comment='$comment'   WHERE group_id = '$id' and  member_id= '$member_id'";
  if($db->query($sql)){
    $db->close();
    header("Location: ../index.php?page=committee_request&success=1");
  }else{
    echo $db->error;
    $db->close();
  }
}

?>

