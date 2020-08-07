<?php

include "../menu/connect.php";

extract($_GET);
$schedule_id = $id;
$sql = "delete from schedule where schedule_id = '$schedule_id'";

if ($db->query($sql)) {
    $db->close();

    echo "<script>alert('Delete Success');window.location = \"add_schedule_project.php\";</script>";

} else {
    echo $db->error;
    $db->close();
}
