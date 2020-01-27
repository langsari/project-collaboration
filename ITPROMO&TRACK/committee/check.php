

<?php




session_start();
 include("../menu/connect.php");


  $files_id = $_POST['files_id'];
$files_filename_proposal=$_POST['files_filename_proposal'];
$files_status=$_POST['files_status'];
$by_officer=$_POST['by_officer'];
$pf='3';
$status_presentation=$_POST['status_presentation'];
$committeegroup_id=$_POST['committeegroup_id'];
 	$advisergroup_id = $_POST['advisergroup_id'];
 	 	$Owner = $_POST['Owner'];



    $sql = "INSERT INTO files (files_filename_proposal,advisergroup_id,files_status,by_officer,Owner,pf,status_presentation,committeegroup_id) VALUES('$files_filename_proposal','$advisergroup_id','$files_status','$by_officer','$Owner','$pf','$status_presentation', '$committeegroup_id'
    )";


 


  if($rs = $db->query($sql)){
    $db->close();
    header("Location: ../index.php?page=committee_request&success=1");
  }else{
    echo $db->error;
    $db->close();
  }




?>