<?php
session_start();
$member_id = $_SESSION['id'];

if(isset($_GET['id'])){
                require '../menu/connect.php';
  $id = $_GET['id'];
  

  $status_project=$_POST['status_project'];

  $sql = "UPDATE committeegroup SET status_project = 'Pass'   WHERE group_id = '$id' and  member_id= '$member_id'";
  if($db->query($sql)){
    $db->close();
    header("Location:committee_request.php");
  }else{
    echo $db->error;
    $db->close();
  }
}

?>

