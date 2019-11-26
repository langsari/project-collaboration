

<?php
session_start();
$admin_id = $_SESSION['id'];

                require '../menu/connect.php';


$id = $_GET['id'];

$sql = "UPDATE member SET admin_id = '$admin_id' WHERE member_id = '$id'";

if($db->query($sql)){
	$db->close();
		header("Location: ../index.php?page=accept_member");

}else{
	echo $db->error;
	$db->close();
}




?>