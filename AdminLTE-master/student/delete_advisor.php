<?php

include ("../menu/connect.php");

extract($_GET);
$advisergroup_id = $id;

$sql="delete from advisergroup where advisergroup_id = '$advisergroup_id'";


	if($db->query($sql)){
		$db->close();

			echo "<script>alert('Delete Success');window.location = \"infor_group.php\";</script>";


	}else{
		echo $db->error;
		$db->close();
	}




?>
