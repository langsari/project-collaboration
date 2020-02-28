<?php


                require '../menu/connect.php';

$rows = array();

$sql = "SELECT member_id, member_fullname FROM member WHERE member_pos != 'Student' AND admin_id != '0'";
if($rs = $db->query($sql)){
	while($row = $rs->fetch_object()){
		$rows[] = $row;
	}
	echo json_encode($rows);
	$db->close();
}else{
	echo $db->error;
	$db->close();
}

?>