<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
    session_start();
    $advisergroup_id = $_SESSION['id'];
include("../menu/function.php");
require '../menu/connect.php';
  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

  $id = $_GET['id'];
  $by_advisor08 = $_POST['by_advisor08'];
$files_filename_project = $_REQUEST['files_filename_project']; //รับค่าไฟล์จากฟอร์ม		

$date = date("d-m-Y"); //กำหนดวันที่และเวลา
//เพิ่มไฟล์
$upload=$_FILES['files_filename_project'];
if($upload <> '') {   //not select file
//โฟลเดอร์ที่จะ upload file เข้าไป 
$path="filesupload5ch/";  

//เอาชื่อไฟล์ที่มีอักขระแปลกๆออก
	$remove_these = array(' ','`','"','\'','\\','/','_');
	$newfiles = str_replace($remove_these, '', $_FILES['files_filename_project']['name']);
 
	//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
	$newfiles = time().'-'.$newfiles;
$path_copy=$path.$newfiles;
$path_link="filesupload5ch/".$newfiles;

//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
move_uploaded_file($_FILES['files_filename_project']['tmp_name'],$path_copy);  	
	}
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile
	

$sql = "UPDATE files SET files_filename_project='$newfiles' , by_advisor08 = 'Waiting' , pf ='8' WHERE advisergroup_id = '$id' ";
		
		$result = mysqli_query($db, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($cdbon);
	// javascript แสดงการ upload file
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Upload File Succesfuly');";
	header("Location: ../index.php?page=pf08&success=1");
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to upload again');";
	echo "</script>";
}
?>