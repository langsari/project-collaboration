<?php
session_start();
 require '../menu/connect.php';
$announcement_topic=$_POST['announcement_topic'];
$announcement_detail=$_POST['announcement_detail'];
$admin_id=$_POST['admin_id'];

  $sql = "INSERT INTO announcement(announcement_topic,announcement_detail, admin_id) VALUES ('$announcement_topic','$announcement_detail','$admin_id')";

	if($rs = $db->query($sql)){
		$db->close();
		header("Location: ../admin/add_announcement.php");
	}else{
		echo $db->error;
		$db->close();
	}





?>

