<?php

if(isset($_GET['id'])){
                require '../menu/connect.php';
	$id = $_GET['id'];
	$sql = "UPDATE files SET by_advisor06 = 'Pass', pf ='6', by_advisor07 ='Waiting'  WHERE files_id = '$id'";
	if($db->query($sql)){ 
		$db->close();
		header("Location:advisor_request.php");
	}else{
		echo $db->error;
		$db->close();
	}
}

?>