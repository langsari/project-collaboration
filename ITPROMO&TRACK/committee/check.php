

<?php
session_start();


 include("../menu/connect.php");


	$status_presentation = $_POST['status_presentation'];
	$committeegroup_id = $_POST['committeegroup_id'];
	$pf = $_POST['pf'];
 	$advisergroup_id = $_POST['advisergroup_id'];
 	$files_id = $_POST['files_id'];


	$sql = "UPDATE files SET status_presentation = '$status_presentation' , pf='3' WHERE files_id = '$files_id'";


	if($rs = $db->query($sql)){
		$db->close();
		header("Location: ../index.php?page=committee_request");
	}else{
		echo $db->error;
		$db->close();
	}

