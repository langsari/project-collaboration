<?php
require '../db/ConnectDB.php';

$strSQL = "UPDATE member SET ";
$strSQL .="member_idcard = '".$_POST['member_idcard']."' ";
$strSQL .=",member_username = '".$_POST["member_username"]."' ";
$strSQL .=",member_fullname = '".$_POST["member_fullname"]."' ";
$strSQL .=",member_phone = '".$_POST["member_phone"]."' ";
$strSQL .=",member_email = '".$_POST["member_email"]."' ";
$strSQL .=",member_pos = '".$_POST["member_pos"]."' ";
$strSQL .=",member_gender = '".$_POST["member_gender"]."' ";




$strSQL .="WHERE member_id = '".$_POST["member_id"]."' ";

if($db->query($strSQL)){
		$db->close();
		header("Location: ../index.php?page=my_profile&id=".$id."&success=1");
	}else{
		echo $db->error;
		$db->close();
	}
?>
 

</body>

</html>

