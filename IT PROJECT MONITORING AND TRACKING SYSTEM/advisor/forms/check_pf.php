<?php
session_start();
require '../../menu/connect.php';
include '../../menu/function.php';

$id = $_GET['id'];

$sql = "SELECT pf FROM files
        WHERE advisergroup_id='$id' ";

if ($result = $db->query($sql)) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_object()) {

            $_SESSION['rank'] = $row->pf;
        }

        $result->free();

        if ($_SESSION['rank'] == "1") {

            header("Location: ../forms/form01/pf01.php?id=$id");
            exit();

        } else if ($_SESSION['rank'] == "2") {
            header("Location: ../forms/form02/pf02.php?id=$id");
            exit();
        } else if ($_SESSION['rank'] == "3") {

            header("Location: ../forms/form03/pf03.php?id=$id");
            exit();
        } else if ($_SESSION['rank'] == "4") {

            header("Location: ../forms/form04/pf04.php?id=$id");
            exit();
        } else if ($_SESSION['rank'] == "5") {

            header("Location: ../forms/form05/pf05.php?id=$id");
            exit();
        } else if ($_SESSION['rank'] == "6") {

            header("Location: ../forms/form06/pf06.php?id=$id");
            exit();
        } else if ($_SESSION['rank'] == "7") {

            header("Location: ../forms/form07/pf07.php?id=$id");
            exit();
        } else if ($_SESSION['rank'] == "8") {

            header("Location: ../forms/form08/pf08.php?id=$id");
            exit();
        } else if ($_SESSION['rank'] == "9") {

            header("Location: ../forms/form09/pf09.php?id=$id");
            exit();
        } else if ($_SESSION['rank'] == "10") {

            header("Location: ../forms/form10/pf10.php?id=$id");
            exit();
        } else if ($_SESSION['rank'] == "11") {

            header("Location: ../forms/form11/pf11.php?id=$id");
            exit();
        } else if ($_SESSION['rank'] == "12") {

            header("Location: ../forms/form12/pf12.php?id=$id");
            exit();
        } else if ($_SESSION['rank'] == "13") {

            header("Location: ../forms/form13/pf13.php?id=$id");
            exit();
        }

    } else {
        header("Location: ../forms/form01/pf01.php?id=$id");
    }

}

if ($db->query($sql)) {
    $db->close();

} else {
    echo $db->error;
    $db->close();
}
