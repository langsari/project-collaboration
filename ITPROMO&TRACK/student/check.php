<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );
 
 //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
    //สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
    $date1 = date("Ymd_His");
    //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
    $numrand = (mt_rand());


$advisergroup_id = get_ag_id(get_group_id());

$p_img1 = (isset($_POST['p_img1']) ? $_POST['p_img1'] : '');

$upload=$_FILES['p_img1'];
    if($upload <> '') { 
 
    //โฟลเดอร์ที่เก็บไฟล์
    $path="../pimg/";
    //ตัวขื่อกับนามสกุลภาพออกจากกัน
    $type = strrchr($_FILES['p_img1']['name'],".");
    //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
    $newname ='img1'.$numrand.$date1.$type;
 
    $path_copy=$path.$newname;
    $path_link="../pimg/".$newname;
    //คัดลอกไฟล์ไปยังโฟลเดอร์
    move_uploaded_file($_FILES['p_img1']['tmp_name'],$path_copy);  
        
    }
 

 
    
        $sql = "INSERT INTO files (fileupload,advisergroup_id) 
        VALUES('$newname','$advisergroup_id')";
        
 


        $result = mysqli_query($db, $sql) or die ("Error in query: $sql " . mysqli_error());
    
    mysqli_close($db);
    // javascript แสดงการ upload file
    
    if($result){
    echo "<script type='text/javascript'>";
    echo "alert('Upload File Succesfuly');";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to upload again');";
    echo "</script>";
}
?>