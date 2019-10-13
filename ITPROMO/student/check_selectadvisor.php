<?php
session_start();



include("../menu/function.php");
require '../db/ConnectDB.php';

 $advisergroup_id=$_POST[''];
$advisergroup_topic=$_POST['advisergroup_topic'];
$member_id=$_POST['member_id'];
$group_id=$_POST['group_id'];

  $sql = "INSERT INTO advisergroup (advisergroup_topic, member_id,group_id) VALUES ('$advisergroup_topic','$member_id','$group_id')";

	if($rs = $db->query($sql)){
		$db->close();
		header("Location: ../index.php?page=infor_group");
	}else{
		echo $db->error;
		$db->close();
	}





?>

