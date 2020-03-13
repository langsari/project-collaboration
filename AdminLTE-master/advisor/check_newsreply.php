<?php
session_start();



include("../menu/function.php");
require '../menu/connect.php';

$news_topic=$_POST['news_topic'];
$news_detail=$_POST['news_detail'];
$member_id=$_POST['member_id'];
$parent_comment_id=$_POST['parent_comment_id'];


  $sql = "INSERT INTO news_topic (news_id,news_topic, news_detail, member_id,parent_comment_id) VALUES ('$news_id','$news_topic','$news_detail','$member_id','$parent_comment_id')";

	if($rs = $db->query($sql)){
		$db->close();
		header("Location:add_general_topic.php");
	}else{
		echo $db->error;
		$db->close();
	}





?>

