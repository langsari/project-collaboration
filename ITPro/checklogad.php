<?php
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	}
include('Conectdb.php');
$am_username = $_POST['am_username'];
$am_password = $_POST['am_password'];

$sql = "SELECT * FROM admin where am_username='$am_username' and am_password='$am_password'";
$qry = $conn->query($sql);
 
if ($qry->fetch_array() > 0) 
{
	$_SESSION['am_username'] = $am_username;
	header('location:homeadmin.php');
	exit();
}	
else
{
header("location:loginadmin.php?Username_or_Password_not_match");	exit();
}
?>