<?php


if(empty($submit))
{


include("../menu/function.php");
require '../menu/connect.php';

$announcement_id=$_POST['announcement_id'];

$announcement_topic=$_POST['announcement_topic'];
$announcement_detail=$_POST['announcement_detail'];
$announcement_date=$_POST['announcement_date'];



$sql = "UPDATE  announcement SET announcement_id = '$announcement_id', announcement_topic = '$announcement_topic'
 ,announcement_detail  = '$announcement_detail',
announcement_date = '$announcement_date'
WHERE announcement_id = '$announcement_id'";


 //ตรงนี้ if ,while สังเกตดีๆน่ะ ต้องมา ใช้ ของตัวเอง ระบบของตัวเองใช้ ยังไง ก็ ใช้ ตามนั้น  

if($db->query($sql)){
		$db->close();

			echo "<script>alert('Edit Success');window.location = \"add_announcement.php\";</script>";


	}else{
		echo $db->error;
		$db->close();
	}
}else{
	echo "Function is not executed!";
}



	




?>