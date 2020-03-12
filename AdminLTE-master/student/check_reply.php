<?php
session_start();
 require '../menu/connect.php';




$parent_comment_id=$_POST['parent_comment_id'];
$announcement_detail=$_POST['announcement_detail'];
$announcement_topic=$_POST['announcement_topic'];
$announcement_date=$_POST['announcement_date'];
$writer=$_POST['writer'];

$sql = "INSERT INTO announcement(parent_comment_id,announcement_topic,announcement_detail,announcement_date,writer) VALUES ('$announcement_topic','$announcement_detail','$announcement_date','$writer','$parent_comment_id')";

	if($rs = $db->query($sql)){
		$db->close();
		header("Location: /reply_annouce.php");
	}else{
		echo $db->error;
		$db->close();
	}





?>

