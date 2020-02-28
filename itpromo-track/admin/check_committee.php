<?php

if(isset($_POST['committee']) && isset($_POST['group_id'])){
                require '../menu/connect.php';

	$committee = $_POST['committee'];
	$group = $_POST['group_id'];

	$sql = "INSERT INTO committeegroup (member_id, group_id) VALUES ('$committee', '$group')";
	if($db->query($sql)){
		$db->close();
		header("Location: ../admin/choose_committee.php");
	}else{
		echo $db->error;
		$db->close();
	}

}

?>