<?php

if(isset($_GET['id'])){
                require '../menu/connect.php';
	$id = $_GET['id'];
	$sql = "UPDATE files SET committeegroup_id = 'Pass' , pf ='3' WHERE files_id = '$id'";
	if($db->query($sql)){
		$db->close();
		header("Location: ../index.php?page=committee_request&success=1");
	}else{
		echo $db->error;
		$db->close();
	}
}

?>