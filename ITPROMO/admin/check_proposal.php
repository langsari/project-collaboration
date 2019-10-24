<?php
session_start();



require '../db/ConnectDB.php';

$topic_topic=$_POST['topic_topic'];
$topic_abstrack=$_POST['topic_abstrack'];
$topic_keyword=$_POST['topic_keyword'];
$topic_fieldstudy=$_POST['topic_fieldstudy'];
$topic_years=$_POST['topic_years'];
$member_idcard=$_POST['member_idcard'];
$Student_name=$_POST['Student_name'];
$group_id=$_POST['group_id'];
$status=$_POST['status'];
$admin_id=$_POST['admin_id'];




  $sql = "INSERT INTO topic_project (topic_topic, topic_abstrack, topic_keyword,topic_fieldstudy,topic_years,member_idcard,group_id,status,Student_name,admin_id) VALUES ('$topic_topic','$topic_abstrack','$topic_keyword','$topic_fieldstudy','$topic_years','$member_idcard','$group_id','$status','$Student_name','$admin_id')";

	if($rs = $db->query($sql)){
		$db->close();
		header("Location: ../index.php?page=add_proposal");
	}else{
		echo $db->error;
		$db->close();
	}





?>

