<?php

if(isset($_POST['committee']) && isset($_POST['group_id'])){
                require '../menu/connect.php';

	$committee = $_POST['committee'];
	$group = $_POST['group_id'];
	$status_presentation ='Waiting';
		$status_project ='Waiting';

	


	$sql = "INSERT INTO committeegroup (member_id, group_id,status_presentation,status_project) VALUES ('$committee', '$group','$status_presentation','$status_project')";
	if($db->query($sql)){
		$db->close();
		header("Location: ../admin/choose_committee.php");
	}else{
		echo $db->error;
		$db->close();
	}

}

?>