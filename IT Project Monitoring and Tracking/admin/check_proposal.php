<?php
session_start();


 include "../menu/function.php";
    require '../menu/connect.php';


$topic_topic=$_POST['topic_topic'];
$topic_abstrack=$_POST['topic_abstrack'];
$topic_keyword=$_POST['topic_keyword'];
$topic_fieldstudy=$_POST['topic_fieldstudy'];
$topic_years=$_POST['topic_years'];
$Owner=$_POST['Owner'];
$adviser=$_POST['adviser'];
$status=$_POST['status'];
$position=$_POST['position'];
$group_number=$_POST['group_number'];




  $sql = "INSERT INTO topic_project (topic_topic,topic_abstrack, topic_keyword,topic_fieldstudy,topic_years,adviser,status,Owner,position,group_number) VALUES ('$topic_topic','$topic_abstrack','$topic_keyword','$topic_fieldstudy','$topic_years','$adviser','$status','$Owner','$position','$group_number')";

	if($rs = $db->query($sql)){
		$db->close();
		    header("Location: view_all_project.php");

	}else{
		echo $db->error;
		$db->close();
	}





?>

