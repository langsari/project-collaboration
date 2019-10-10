<?php
//Function to get group member


	$rows = "";
	require 'connection.php';
	$sql = "SELECT mb_name, mb_stid FROM tb_member WHERE g_id = '$group_id'";
	if($rs = $db->query($sql)){
		if($rs->num_rows > 0){
			while($row = $rs->fetch_object()){
				$rows .= "<p>".$row->mb_stid." ".$row->mb_name."</p>";
			}
		}else{
			$rows = "<i class='text-danger'>- No students join this group yet -</i>";
		}
		echo $rows;
		$db->close();
	}else{
		return $db->error;
		$db->close();
	}

?>