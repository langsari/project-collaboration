<?php
session_start();
include("../menu/function.php");
require '../menu/connect.php';



if(isset($_POST['files_filename_proposal'])){
	$files_filename_proposal = $_POST['files_filename_proposal'];
	  	$advisergroup_id = get_ag_id(get_group_id());
	

	$sql = "INSERT INTO files (files_filename_proposal, advisergroup_id) VALUES ('$files_filename_proposal', '$advisergroup_id')";

	if($db->query($sql)){
		$db->close();
		header("Location: ../index.php?page=track_project&success=1");
	}else{
		echo $db->error;
		$db->close();
	}
}else{
	echo "Function is not executed!";
}

?>


