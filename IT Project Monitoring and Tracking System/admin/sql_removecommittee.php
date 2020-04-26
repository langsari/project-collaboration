<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require '../menu/connect.php';
    $sql = "DELETE FROM committeegroup WHERE committeegroup_id = '$id'";

    if ($db->query($sql)) {
        $db->close();
        header("Location: ../admin/choose_committee.php");
    } else {
        echo $db->error;
        $db->close();
    }
}
