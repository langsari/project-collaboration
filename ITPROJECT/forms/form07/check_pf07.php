<?php
session_start();
require '../../menu/connect.php';
include '../../menu/function.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $by_advisor07 = 'Waiting';

    $sql = "UPDATE files SET by_advisor07 = 'Waiting' WHERE files_id = '$id'";
    if ($db->query($sql)) {
        $db->close();
    header("Location:pf07.php");
    } else {
        echo $db->error;
        $db->close();
    }
}
