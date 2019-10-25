<?php
session_start();



require '../db/ConnectDB.php';

 $schedule_id=$_POST['schedule_id'];
 $schedule_round=$_POST['schedule_round'];
$schedule_type=$_POST['schedule_type'];
$schedule_years=$_POST['schedule_years'];
$schedule_time=$_POST['schedule_time'];
$schedule_date=$_POST['schedule_date'];
$member_id=$_POST['member_id'];
$admin_id=$_POST['admin_id'];
$advisergroup_id=$_POST['advisergroup_id'];



  $sql = "INSERT INTO schedule (schedule_id,schedule_round, schedule_type, schedule_years, schedule_time,schedule_date,member_id,admin_id,advisergroup_id) VALUES ('$schedule_id','$schedule_round','$schedule_type','$schedule_years','$schedule_time','$schedule_date','$member_id','$admin_id','$advisergroup_id')";

	if($rs = $db->query($sql)){
		$db->close();
		header("Location: ../index.php?page=add_schedule_project");
	}else{
		echo $db->error;
		$db->close();
	}





?>