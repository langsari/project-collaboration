

<?php


if(isset($_GET['id'])){
                require '../menu/connect.php';
  $id = $_GET['id'];
  $sql = "UPDATE committeegroup SET status_presentation = 'No' WHERE committeegroup_id = '$id'";
  if($db->query($sql)){
    $db->close();
    header("Location:committee_request.php");
  }else{
    echo $db->error;
    $db->close();
  }
  
}

?>