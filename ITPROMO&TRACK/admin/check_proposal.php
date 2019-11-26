<?php
session_start();



                require '../menu/connect.php';

$topic_topic=$_POST['topic_topic'];
$topic_abstrack=$_POST['topic_abstrack'];
$topic_keyword=$_POST['topic_keyword'];
$topic_fieldstudy=$_POST['topic_fieldstudy'];
$topic_years=$_POST['topic_years'];
$member_idcard=$_POST['member_idcard'];
$Student_name=$_POST['Student_name'];
$adviser=$_POST['adviser'];
$status=$_POST['status'];
$position=$_POST['position'];




  $sql = "INSERT INTO topic_project (topic_topic, topic_abstrack, topic_keyword,topic_fieldstudy,topic_years,member_idcard,adviser,status,Student_name,position) VALUES ('$topic_topic','$topic_abstrack','$topic_keyword','$topic_fieldstudy','$topic_years','$member_idcard','$adviser','$status','$Student_name','$position')";

	if($rs = $db->query($sql)){
		$db->close();
		header("Location: ../index.php?page=add_proposal");
	}else{
		echo $db->error;
		$db->close();
	}





?>

