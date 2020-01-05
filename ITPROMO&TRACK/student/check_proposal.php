


<?php
session_start();


 include("../menu/connect.php");
 require '../menu/function.php';
 
	$topic_id = $_POST['topic_id'];
$group_number=$_POST['group_number'];
$topic_abstrack=$_POST['topic_abstrack'];
$topic_keyword=$_POST['topic_keyword'];
$topic_topic=$_POST['topic_topic'];
$topic_fieldstudy=$_POST['topic_fieldstudy'];
$topic_years=$_POST['topic_years'];
$adviser=$_POST['adviser'];
$position=$_POST['position'];
$advisergroup_id = get_ag_id(get_group_id());
$Owner = get_member_list(get_group_id());
 
 	$sql = "UPDATE topic_project SET 
	group_number = '$group_number',
	topic_abstrack ='$topic_abstrack',
	topic_keyword = '$topic_keyword',
	topic_fieldstudy ='$topic_fieldstudy',
	topic_years = '$topic_years',
	adviser ='$adviser',
    topic_topic = '$topic_topic',
	advisergroup_id ='$advisergroup_id',
	position = '$position',
  	Owner ='$Owner'
	WHERE topic_id = '$topic_id'";

	if($rs = $db->query($sql)){
		$db->close();
		header("Location: ../index.php?page=create_proposal&success=1");
	}else{
		echo $db->error;
		$db->close();
	}



?>
