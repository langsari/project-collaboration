<?php

require '../db/ConnectDB.php';
if(isset($_POST['group_number'])){
	$group_number = $_POST['group_number'];
	$sql = "INSERT INTO partnergroup (group_number) VALUES ('$group_number')";
	if($db->query($sql)){}else{ echo $db->error; }
	$db->close();
	header("Location: ../index.php?page=infor_group");
}else{
	echo "Function Not Executed!";
}

?>