<?php

if(isset($_POST['id'])){
	$rows = array();
	$id = $_POST['id'];

require 'menu/connect.php';



	  $sql = "SELECT  announcement.announcement_id,announcement.announcement_topic, announcement.announcement_detail,announcement.announcement_date,admin.admin_fullname
                           FROM announcement,admin 
                           WHERE announcement.admin_id=admin.admin_id
                           ORDER BY announcement.announcement_id = '$id'";

	$sql = "SELECT  announcement.announcement_id,announcement.announcement_topic, announcement.announcement_detail,announcement.announcement_date,admin.admin_fullname
                           FROM announcement,admin 
                           WHERE announcement.admin_id=admin.admin_id
                           ORDER BY announcement.announcement_id='$id'";


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


