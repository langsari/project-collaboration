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
$member_idcard=$_POST['member_idcard'];
$group_id=$_POST['group_id'];
$Student_name=$_POST['Student_name'];


  $sql = "INSERT INTO topic_project (topic_abstrack, topic_keyword, topic_fieldstudy, topic_years,status,member_idcard,group_id,topic_topic,Student_name) VALUES ('$topic_abstrack','$topic_keyword','$topic_fieldstudy','$topic_years','$status','$member_idcard','$group_id','$topic_topic','$Student_name')";

	if($rs = $db->query($sql)){
		$db->close();
		header("Location: ../index.php?page=create_proposal");
	}else{
		echo $db->error;
		$db->close();
	}
?>


