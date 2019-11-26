


<?php
session_start();


 include("../menu/connect.php");
require '../menu/function.php';

$topic_abstrack=$_POST['topic_abstrack'];
$topic_keyword=$_POST['topic_keyword'];
$topic_topic=$_POST['topic_topic'];
$topic_fieldstudy=$_POST['topic_fieldstudy'];
$topic_years=$_POST['topic_years'];
$status=$_POST['status'];
$member_idcard=$_POST['member_idcard'];
$adviser=$_POST['adviser'];
$Student_name=$_POST['Student_name'];
$position=$_POST['position'];
$advisergroup_id = get_ag_id(get_group_id());


	  $sql = "INSERT INTO topic_project (topic_abstrack, topic_keyword,topic_fieldstudy, topic_years,status,member_idcard,adviser,topic_topic,Student_name,advisergroup_id,position) VALUES ('$topic_abstrack','$topic_keyword','$topic_fieldstudy','$topic_years','$status','$member_idcard','$adviser','$topic_topic','$Student_name','$advisergroup_id','$position')";


	if($rs = $db->query($sql)){
		$db->close();
		header("Location: ../index.php?page=create_proposal&success=1");
	}else{
		echo $db->error;
		$db->close();
	}



?>
