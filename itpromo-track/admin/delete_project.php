<?php

include ("../menu/connect.php");

extract($_GET);
$topic_id = $id;
$sql="delete from topic_project where topic_id = '$topic_id'";


	if($db->query($sql)){
		$db->close();

			echo "<script>alert('Delete Success');window.location = \"view_all_project.php\";</script>";


	}else{
		echo $db->error;
		$db->close();
	}




?>
