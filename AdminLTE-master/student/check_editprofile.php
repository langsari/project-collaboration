<?php


if(empty($submit))
{


include("../menu/function.php");
require '../menu/connect.php';


		$member_id=$_POST['member_id'];
	$member_idcard=$_POST['member_idcard'];
$member_phone=$_POST['member_phone'];
$member_email=$_POST['member_email'];
$member_name_prefix=$_POST['member_name_prefix'];
$member_firstname=$_POST['member_firstname'];
$member_lastname=$_POST['member_lastname'];
$member_faculty=$_POST['member_faculty'];
$member_major=$_POST['member_major'];

$member_years=$_POST['member_years'];
$member_birthday=$_POST['member_birthday'];
$member_gender=$_POST['member_gender'];
$member_faculty=$_POST['member_faculty'];
$member_pos=$_POST['member_pos'];


$member_password=$_POST['member_password'];
$member_address=$_POST['member_address'];


$sql = "UPDATE  member SET member_id = '$member_id', member_idcard = '$member_idcard'
,member_phone = '$member_phone', 
member_email = '$member_email' ,
member_name_prefix  = '$member_name_prefix' ,
member_firstname  = '$member_firstname',
member_lastname = '$member_lastname', 
member_faculty = '$member_faculty' ,
member_major  = '$member_major' ,
member_years  = '$member_years',
member_birthday = '$member_birthday', 
member_gender = '$member_gender' ,
member_pos  = '$member_pos' ,
member_password  = '$member_password',
member_address = '$member_address'


WHERE member_id = '$member_id'";


if($db->query($sql)){
		$db->close();

			echo "<script>alert('Edit Success');window.location = \"my_profile.php\";</script>";


	}else{
		echo $db->error;
		$db->close();
	}
}else{
	echo "Function is not executed!";
}



	




?>