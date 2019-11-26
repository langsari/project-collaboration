<?php
session_start();
include("../menu/function.php");
require '../menu/connect.php';



if(isset($_POST['files_filename'])){
	$files_filename = $_POST['files_filename'];
	  $member_id = get_group_id($_SESSION['id']);

	$advisergroup_id = get_ag_id();


	$sql = "INSERT INTO files (files_filename, advisergroup_id,member_id) VALUES ('$files_filename', '$advisergroup_id','$member_id')";

	if($db->query($sql)){
		$db->close();
		header("Location: ../index.php?page=track&success=1");
	}else{
		echo $db->error;
		$db->close();
	}
}else{
	echo "Function is not executed!";
}

?>