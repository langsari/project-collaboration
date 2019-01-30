<?php
$servername = "localhost";
$username = "root" ;
$password = "";
$dbname = "itpromo";

$conn = mysqli_connect($servername,$username,$password,$dbname);
//echo"HOW Welcome ";


if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}

?>
