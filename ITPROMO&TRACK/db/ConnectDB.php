
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


$get_data = $mysqli->query("SELECT advisergroup_id as name, (files_status + member_id) as y FROM `files` ");
	
	while($data = $get_data->fetch_assoc()){
		
		$result[] = $data;
	}
		
	echo $json = json_encode( $result, JSON_NUMERIC_CHECK);

?>





