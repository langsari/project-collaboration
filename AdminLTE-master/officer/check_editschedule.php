<?php

if(isset($_POST['id'])){
	$rows = array();
	$id = $_POST['id'];
                require '../menu/connect.php';
	$sql = "SELECT * FROM schedule WHERE schedule_id = '$id'";
	if($rs = $db->query($sql)){
		while($row = $rs->fetch_object()){
			$rows[] = $row;
		}
		$db->close();
		echo json_encode($rows);
	}else{
		echo $db->error;
		$db->close();
	}
}

?>