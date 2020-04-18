<?php

if(isset($_GET['id'])){
                require '../menu/connect.php';
	$id = $_GET['id'];
	$sql = "UPDATE files SET by_officer05 = 'Pass', pf ='5', by_advisor06='Waiting' WHERE files_id = '$id'";
	if($db->query($sql)){
		$db->close();
		header("Location:  officer_request.php");
	}else{
		echo $db->error;
		$db->close();
	}
}

?>