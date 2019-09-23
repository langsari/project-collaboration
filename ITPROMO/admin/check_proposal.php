<?php
session_start();



require '../db/ConnectDB.php';

 $id=$_POST['id'];
$topic_topic=$_POST['topic_topic'];
$topic_abstrack=$_POST['topic_abstrack'];
$topic_keyword=$_POST['topic_keyword'];
$topic_fieldstudy=$_POST['topic_fieldstudy'];
$topic_years=$_POST['topic_years'];
$writer=$_POST['writer'];
$advisor=$_POST['advisor'];
$status=$_POST['status'];



  $sql = "INSERT INTO topic_project (id, topic_topic, topic_abstrack, topic_keyword,topic_fieldstudy,topic_years,writer,advisor,status) VALUES ('$id','$topic_topic','$topic_abstrack','$topic_keyword','$topic_fieldstudy','$topic_years','$writer','$advisor','$status')";

	if($rs = $db->query($sql)){
		$db->close();
		header("Location: ../index.php?page=add_proposal");
	}else{
		echo $db->error;
		$db->close();
	}





?>

