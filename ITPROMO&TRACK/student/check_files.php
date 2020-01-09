<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
	session_start();
include("../menu/function.php");
require '../menu/connect.php';
  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$advisergroup_id = get_ag_id(get_group_id());
$Owner = get_member_list1(get_group_id());


$files_filename_proposal = $_REQUEST['files_filename_proposal']; //รับค่าไฟล์จากฟอร์ม		
$date = date("d-m-Y"); //กำหนดวันที่และเวลา
//เพิ่มไฟล์
$upload=$_FILES['files_filename_proposal'];
if($upload <> '') {   //not select file
//โฟลเดอร์ที่จะ upload file เข้าไป 
$path="fileupload/";  

//เอาชื่อไฟล์ที่มีอักขระแปลกๆออก
	$remove_these = array(' ','`','"','\'','\\','/','_');
	$newname = str_replace($remove_these, '', $_FILES['files_filename_proposal']['name']);
 
	//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
	$newname = time().'-'.$newname;
$path_copy=$path.$newname;
$path_link="fileupload/".$newname;

//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
move_uploaded_file($_FILES['files_filename_proposal']['tmp_name'],$path_copy);  	
	}
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile
	
$sql = "INSERT INTO files (files_filename_proposal,advisergroup_id,Owner) 
		VALUES('$newname','$advisergroup_id','$Owner')";
		
		$result = mysqli_query($db, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($cdbon);
	// javascript แสดงการ upload file
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Upload File Succesfuly');";
	header("Location: ../index.php?page=track_project&success=1");
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to upload again');";
	echo "</script>";
}
?>