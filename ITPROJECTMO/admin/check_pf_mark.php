<?php
$servername = "localhost";
$username = "itproject";
$password = "qydenygeq";
$dbname = "projects_itproject";

$db = mysqli_connect($servername, $username, $password, $dbname);

if (!$db) {
    die("Connetion failed:" . mysqli_connect_error('Could not connected to the DB'));
}

$pf1 = $_POST['pf1'];
$pf2 = $_POST['pf2'];
$pf3 = $_POST['pf3'];
$pf4 = $_POST['pf4'];
$pf5 = $_POST['pf5'];
$pf6 = $_POST['pf6'];
$pf7 = $_POST['pf7'];
$pf8 = $_POST['pf8'];
$pf9 = $_POST['pf9'];
$pf10 = $_POST['pf10'];
$pf11 = $_POST['pf11'];
$pf12 = $_POST['pf12'];
$pf13 = $_POST['pf13'];

$sql = "INSERT INTO  pf_mark (pf1,pf2,pf3,pf4,pf5,pf6,pf7,pf8,pf9,pf10,pf11,pf12,pf13)values('$pf1','$pf2','$pf3','$pf4','$pf5','$pf6','$pf7','$pf8','$pf9','$pf10','$pf11','$pf12','$pf13')";

if ($rs = $db->query($sql)) {
    $db->close();

    echo "<script>alert('Information has been saved' )</script>";

    echo "<script>window.open('PF_mark.php','_self')</script>";
} else {
    echo $db->error;
    $db->close();
}
