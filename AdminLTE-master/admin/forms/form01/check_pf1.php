<?php
session_start();
require '../../menu/connect.php';
include('../../menu/function.php');



  
$advisergroup_id = get_ag_id(get_group_id());
$Owner = get_member_list1(get_group_id());
$files_status = 'Waiting';
$files_filename_proposal = $_REQUEST['files_filename_proposal']; //รับค่าไฟล์จากฟอร์ม   



  $_FILES['files_filename_proposal']['tmp_name'];
  if($_FILES['files_filename_proposal']['name'] != "")
  {
      
      copy($_FILES['files_filename_proposal']['tmp_name'],
        "../fileupload/".$_FILES['files_filename_proposal']['name']); 
       //warnning
  }
  $files_filename_proposal = $_FILES['files_filename_proposal']['name'];

  


  $sql = "INSERT INTO files (files_filename_proposal,advisergroup_id,Owner,files_status) 
    VALUES('$files_filename_proposal','$advisergroup_id','$Owner','$files_status')";
    
    $result = mysqli_query($db, $sql) or die ("Error in query: $sql " . mysqli_error());
  
  mysqli_close($cdbon);
  // javascript แสดงการ upload file
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Upload File Succesfuly');";
  header("Location:pf01.php");
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('pf01.php');";
  echo "</script>";
}
?>