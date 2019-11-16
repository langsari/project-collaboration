


<?php
require '../db/ConnectDB.php';

$strSQL = "UPDATE advisergroup SET ";
$strSQL .="advisergroup_id = '".$_POST['advisergroup_id']."' ";
$strSQL .=",project_abstrack = '".$_POST['project_abstrack']."' ";
$strSQL .=",project_keyword = '".$_POST["project_keyword"]."' ";
$strSQL .=",project_fieldstudy = '".$_POST["project_fieldstudy"]."' ";
$strSQL .=",project_years = '".$_POST["project_years"]."' ";
$strSQL .=",project_status = '".$_POST["project_status"]."' ";





$strSQL .="WHERE advisergroup_id = '".$_POST["advisergroup_id"]."' ";

if($db->query($strSQL)){
		$db->close();
		header("Location: ../index.php?page=create_proposal&id=".$id."&success=1");
	}else{
		echo $db->error;
		$db->close();
	}
?>
 

</body>

</html>

