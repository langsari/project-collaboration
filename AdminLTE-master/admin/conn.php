<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","itpromo_track");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>