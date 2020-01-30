<?php
session_start();
if(isset($_POST['announcement_topic']) && isset($_POST['admin_fullname'])){
	$announcement_topic = $_POST['announcement_topic'];
	$announcement_date = $_POST['announcement_date'];
	$announcement_detail = $_POST['announcement_detail'];
		$admin_id = $_SESSION['id'];


require '../menu/connect.php';

	$sql = "UPDATE announcement SET announcement_date = '$announcement_date', announcement_topic = '$announcement_topic', announcement_detail = '$announcement_detail', admin_id = '$admin_id'";
	if($db->query($sql)){
		$db->close();
		header("Location: ../index.php?page=add_announcement");
	}else{
		echo $db->error;
		$db->close();
	}
}

?>