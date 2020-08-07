<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itpromo_track";

$db = mysqli_connect($servername, $username, $password, $dbname);

if (!$db) {
    die("Connetion failed:" . mysqli_connect_error('Could not connected to the DB'));
}

$pf = $_POST['pf'];
$form_mark = $_POST['form_mark'];

$sql = "INSERT INTO  form (pf,form_mark)values('$pf','$form_mark')";

if ($rs = $db->query($sql)) {
    $db->close();

    echo "<script>alert('Information has been saved' )</script>";

    echo "<script>window.open('PF_setting.php','_self')</script>";
} else {
    echo $db->error;
    $db->close();
}
