<?php
session_start();
require '../menu/connect.php';
include('../menu/function.php');

if (isset($_GET['id']))
 {
	$main_id=$_GET['id'];

$conn = new mysqli("localhost","root","","itpromo_track");

$sql="UPDATE notify SET status=1 WHERE id='$main_id' ";


$sql="select * from notify ORDER BY id DESC limit 5";
$result=mysqli_query($conn, $sql);

$response='';
while($row=mysqli_fetch_array($result)) {
	$response = $response . "<div class='notification-item'>" .
	"<div class='notification-subject'>". $row["subject"] . "</div>" . 
	"<div class='notification-comment'>" . $row["comment"]  . "</div>" .
	"</div>";
}
if(!empty($response)) {
	print $response;
}

}
?>

