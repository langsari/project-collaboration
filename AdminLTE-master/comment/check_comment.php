<?php
session_start();
include("../menu/function.php");
require '../menu/connect.php';



if(isset($_POST['com_content'])){
	$com_content = $_POST['com_content'];
	  	$advisergroup_id = get_ag_id(get_group_id());

$member_id = $_POST['member_id'];


	$sql = "INSERT INTO comment (com_content, advisergroup_id,member_id) VALUES ('$com_content', '$advisergroup_id','$member_id')";

	if($db->query($sql)){
		$db->close();

			echo "<script>alert('Send Comment');window.location = \"pf01.php\";</script>";


	}else{
		echo $db->error;
		$db->close();
	}
}else{
	echo "Function is not executed!";
}



?>

