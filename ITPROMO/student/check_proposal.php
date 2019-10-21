<?php
session_start();




require '../db/ConnectDB.php';

 $topic_id=$_POST['topic_id'];
$topic_abstrack=$_POST['topic_abstrack'];
$topic_keyword=$_POST['topic_keyword'];
$topic_topic=$_POST['topic_topic'];
$topic_fieldstudy=$_POST['topic_fieldstudy'];
$topic_years=$_POST['topic_years'];
$status=$_POST['status'];
$member_id=$_POST['member_id'];
$group_id=$_POST['group_id'];

  $sql = "INSERT INTO topic_project (topic_abstrack, topic_keyword, topic_fieldstudy, topic_years,status,member_id,group_id,topic_topic) VALUES ('$topic_abstrack','$topic_keyword','$topic_fieldstudy','$topic_years','$status','$member_id','$group_id','$topic_topic')";

	if($rs = $db->query($sql)){
		$db->close();
		header("Location: ../index.php?page=create_proposal");
	}else{
		echo $db->error;
		$db->close();
	}
?>


