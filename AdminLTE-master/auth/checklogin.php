<?php
session_start();
require '../menu/connect.php';

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql_admin = "SELECT admin_id, admin_fullname FROM admin WHERE admin_username = '$username' AND admin_password = '$password' AND admin_id != '0'";
    if ($result_admin = $db->query($sql_admin)) {
        if ($result_admin->num_rows > 0) {
            while ($row = $result_admin->fetch_object()) {
                $_SESSION['id'] = $row->admin_id;
                $_SESSION['name'] = $row->admin_fullname;
                $_SESSION['rank'] = "admin";
            }
            $result_admin->free();
            header("Location: ../admin/index.php");
        } else {

            $sql = "SELECT member_id, member_fullname, member_pos FROM member WHERE member_username = '$username' AND member_password = '$password' AND admin_id != '0'";
            if ($result = $db->query($sql)) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_object()) {

                        $_SESSION['id'] = $row->member_id;
                        $_SESSION['name'] = $row->member_fullname;
                        $_SESSION['rank'] = $row->member_pos;
                    }

                    $result->free();

                    if ($_SESSION['rank'] == "Student") {
                        header("Location: ../student/index.php");
                        exit();
                    } else if ($_SESSION['rank'] == "Lecturer") {
                        header("Location: ../advisor/index.php");
                        exit();
                    } else if ($_SESSION['rank'] == "Officer") {

                        header("Location: ../Officer/index.php");
                        exit();
                    }
                } else {
                    header("Location: login.php?error=1");
                }

            }
        }
        $db->close();
    } else {
        echo $db->error;
        $db->close();
    }
} else {
    header("Location: ../index.php");
}
