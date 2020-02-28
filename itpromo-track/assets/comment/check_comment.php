<?php
session_start();
include("../menu/function.php");
require '../menu/connect.php';



if(isset($_POST['chat_massage'])){
	$chat_massage = $_POST['chat_massage'];
	  	$advisergroup_id = get_ag_id(get_group_id());
$chat_date_time = $_POST['chat_date_time'];
$member_id = $_POST['member_id'];


	$sql = "INSERT INTO chat (chat_massage, advisergroup_id,chat_date_time,member_id) VALUES ('$chat_massage', '$advisergroup_id','$chat_date_time','$member_id')";

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

