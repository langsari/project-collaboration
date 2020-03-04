
<?php

if (empty($submit)) {
  session_start();
  $member_id = $_SESSION['id'];


if(isset($_GET['id'])){
                require '../menu/connect.php';
  $id = $_GET['id'];
  $comment=$_POST['comment'];

  $comment_file=$_POST['comment_file'];
 $advisergroup_id=$_POST['advisergroup_id'];
  $sql = "UPDATE committeegroup SET comment='$comment' ,advisergroup_id='$advisergroup_id'  WHERE group_id = '$id' and  member_id= '$member_id'";



        $result = mysqli_query($db, $sql) or die ("Error in query: $sql " . mysqli_error());


  
  mysqli_close($cdbon);
  // javascript แสดงการ upload file
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Upload File Succesfuly');";
  header("Location:committee_request.php");
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('committee_request.php');";
  echo "</script>";
}

}


if ($_FILES["comment_file"]["name"] != "") {

  if (move_uploaded_file(
    $_FILES["comment_file"]["tmp_name"],
    "fileupload/" . $_FILES["comment_file"]["name"]
  )) {

    //*** Delete Old File ***//

    $sql = "UPDATE committeegroup ";
    $sql .= " SET comment_file = '" . $_FILES["comment_file"]["name"] . "' WHERE committeegroup_id = '$committeegroup_id'";


  $result = mysqli_query($db, $sql) or die ("Error in query: $sql " . mysqli_error());


  
  mysqli_close($cdbon);
  // javascript แสดงการ upload file
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Upload File Succesfuly');";
  header("Location:committee_request.php");
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('committee_request.php');";
  echo "</script>";
}
  }
}
}

?>