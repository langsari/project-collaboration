<?php
session_start();



include("../menu/function.php");
require '../menu/connect.php';

 $news_id=$_POST['news_id'];
$news_topic=$_POST['news_topic'];
$news_detail=$_POST['news_detail'];
$news_date=$_POST['news_date'];
$member_id=$_POST['member_id'];

  $sql = "INSERT INTO news_topic (news_topic, news_detail, news_date, member_id) VALUES ('$news_topic','$news_detail','$news_date','$member_id')";

	if($rs = $db->query($sql)){
		$db->close();
		header("Location:add_general_topic.php");
	}else{
		echo $db->error;
		$db->close();
	}





?>

