<?php

include ("../menu/connect.php");

extract($_GET);
$member_id = $id;
$sql="delete from member where member_id = '$member_id'";


	if($db->query($sql)){
		$db->close();

			echo "<script>alert('Delete Success');window.location = \"all_member.php\";</script>";


	}else{
		echo $db->error;
		$db->close();
	}




?>
