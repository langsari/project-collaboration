<?php
session_start();



                require '../menu/connect.php';

 $schedule_topic=$_POST['schedule_topic'];
$schedule_type=$_POST['schedule_type'];
$schedule_time=$_POST['schedule_time'];
$schedule_date=$_POST['schedule_date'];
$schedule_status=$_POST['schedule_status'];
$member_id=$_POST['member_id'];
$group_id=$_POST['group_id'];
$schedule_room=$_POST['schedule_room'];

  $sql = "INSERT INTO schedule (schedule_topic, schedule_type,schedule_time,schedule_date,schedule_status,member_id,group_id,schedule_room) VALUES ('$schedule_topic','$schedule_type','$schedule_time','$schedule_date','$schedule_status','$member_id','$group_id','$schedule_room')";

	if($rs = $db->query($sql)){
		$db->close();
		header("Location: ../index.php?page=add_schedule_proposal");
	}else{
		echo $db->error;
		$db->close();
	}





?>