<?php

if(isset($_GET['id'])){
                require '../menu/connect.php';
	$id = $_GET['id'];
	$sql = "UPDATE advisergroup SET advisergroup_status = '1' WHERE advisergroup_id = '$id'";
	if($db->query($sql)){
		$db->close();
		header("Location: ../index.php?page=advisor_request");
	}else{
		echo $db->error;
		$db->close();
	}
}

?>