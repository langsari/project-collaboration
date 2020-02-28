<?php


if(empty($submit))
{


include("../menu/function.php");
require '../menu/connect.php';

$schedule_id=$_POST['schedule_id'];

$schedule_date=$_POST['schedule_date'];
$schedule_status=$_POST['schedule_status'];
$schedule_room=$_POST['schedule_room'];
$schedule_time=$_POST['schedule_time'];




$sql = "UPDATE  schedule SET schedule_id = '$schedule_id', schedule_status = '$schedule_status'
 ,schedule_date  = '$schedule_date',
schedule_room = '$schedule_room',
schedule_time='$schedule_time'
WHERE schedule_id = '$schedule_id'";


 //ตรงนี้ if ,while สังเกตดีๆน่ะ ต้องมา ใช้ ของตัวเอง ระบบของตัวเองใช้ ยังไง ก็ ใช้ ตามนั้น  

if($db->query($sql)){
		$db->close();

			echo "<script>alert('Edit Success');window.location = \"create_schedule_proposal.php\";</script>";


	}else{
		echo $db->error;
		$db->close();
	}
}else{
	echo "Function is not executed!";
}



	




?>