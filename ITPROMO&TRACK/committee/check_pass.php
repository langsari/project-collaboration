<?php
session_start();
$committeegroup_id = $_SESSION['id'];
require '../db/ConnectDB.php';

$id = $_GET['id'];




$sql = "UPDATE files SET status_presentation = 'Pass' , pf ='3', committeegroup_id='$committeegroup_id' WHERE advisergroup_id = '$id'";





if($db->query($sql)){
	$db->close();
		header("Location: ../index.php?page=committee_request");

}else{
	echo $db->error;
	$db->close();

}
?>