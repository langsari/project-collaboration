<?php
if(isset($_POST['id'])){
	$rows = array();
	$id = $_POST['id'];
require 'menu/connect.php';


  

        $sql = "SELECT advisergroup.*,  advisergroup.advisergroup_status,files.files_status,files.files_filename_proposal,files.member_id FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.advisergroup_id = '$id'";  


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