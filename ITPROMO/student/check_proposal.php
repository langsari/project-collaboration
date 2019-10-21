<?php
session_start();




require '../db/ConnectDB.php';

 $topic_id=$_POST['topic_id'];
$topic_abstrack=$_POST['topic_abstrack'];
$topic_keyword=$_POST['topic_keyword'];
$topic_fieldstudy=$_POST['topic_fieldstudy'];
$topic_years=$_POST['topic_years'];
$status=$_POST['status'];
$member_id=$_POST['member_id'];
$advisorgroup_id=$_POST['advisorgroup_id'];

  $sql = "INSERT INTO topic_project (topic_abstrack, topic_keyword, topic_fieldstudy, topic_years,status,member_id,advisorgroup_id) VALUES ('$topic_abstrack','$topic_keyword','$topic_fieldstudy','$topic_years','$status','$member_id','$advisorgroup_id')";

	if($rs = $db->query($sql)){
		$db->close();
		header("Location: ../index.php?page=create_proposal");
	}else{
		echo $db->error;
		$db->close();
	}
?>


