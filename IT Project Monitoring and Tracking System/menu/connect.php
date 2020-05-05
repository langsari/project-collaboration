
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projects_itproject";

$db = mysqli_connect($servername, $username, $password, $dbname);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$db->set_charset("utf8");
?>





