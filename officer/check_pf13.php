<?php

if (isset($_GET['id'])) {
    require '../menu/connect.php';
    $id = $_GET['id'];
    $sql = "UPDATE files SET by_officer13 = 'Pass', pf ='13' WHERE files_id = '$id'";
    if ($db->query($sql)) {
        $db->close();
        header("Location: officer_request.php");
    } else {
        echo $db->error;
        $db->close();
    }
}
