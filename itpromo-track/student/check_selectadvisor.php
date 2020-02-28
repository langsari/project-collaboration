<?php
include("../menu/function.php");
require '../menu/connect.php';


$member_id=$_POST['member_id'];
 $advisergroup_topic = $_POST['advisergroup_topic'];
  $group_id = $_POST['group_id'];
  $advisergroup_id = $_POST['advisergroup_id'];
$admin_id = $_POST['admin_id'];


 if(never_request_advisor($group_id)){

    $sql = "INSERT INTO advisergroup (member_id, group_id,advisergroup_topic,admin_id) VALUES ('$member_id', '$group_id','$advisergroup_topic','$admin_id')";
    if($db->query($sql)){
      $db->close();
      header("Location: infor_group.php");
    }else{
      echo $db->error;
      $db->close();
    }
  }else{


 $sql = "UPDATE advisergroup SET member_id = '$member_id', advisergroup_status = 'Waiting' WHERE advisergroup_id = '$advisergroup_id'";
    if($db->query($sql)){
      $db->close();
      header("Location: infor_group.php");
    }else{
      echo $db->error;
      $db->close();
    }
  
}
?>


