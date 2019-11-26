
<?php
$servername = "localhost";
$username = "root" ;
$password = "";
$dbname = "itpromo_track";

$db = mysqli_connect($servername,$username,$password,$dbname);


if($db->connect_error){
	die("Connection failed: ".$db->connect_error);
}

$db->set_charset("utf8");
?>





