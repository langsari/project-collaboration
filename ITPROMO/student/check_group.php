

<?php

if(isset($_GET['id'])){
	session_start();
	
require '../db/ConnectDB.php';

	$group_id = $_GET['id'];
	$member_id = $_SESSION['id'];

	$sql = "UPDATE member SET group_id = '$group_id' WHERE member_id = '$member_id'";
	if($db->query($sql)){
		$db->close();
		header("Location: ../index.php?page=infor_group");
	}else{
		echo $db->error;
		$db->close();
	}
}else{
	echo "Function is not Executed!";
}

?>

