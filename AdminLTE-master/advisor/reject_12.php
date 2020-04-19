

<?php

if (isset($_GET['id'])) {
    require '../menu/connect.php';
    $id = $_GET['id'];
    $sql = "UPDATE files SET by_advisor12 = 'No' WHERE advisergroup_id = '$id'";
    if ($db->query($sql)) {
        $db->close();
        header("Location:advisor_request.php");
    } else {
        echo $db->error;
        $db->close();
    }
}

?>