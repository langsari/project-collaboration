<?php

if(isset($_GET['id'])){
                require '../menu/connect.php';
	$id = $_GET['id'];
	$sql = "UPDATE files SET by_advisor12 = 'Pass', pf ='12' ,by_officer13='Waiting'  WHERE files_id = '$id'";
	if($db->query($sql)){
		$db->close();
		header("Location:advisor_request.php");
	}else{
		echo $db->error;
		$db->close();
	}
}

?>