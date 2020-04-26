<?php

include "../menu/connect.php";

extract($_GET);
$announcement_id = $id;
$sql = "delete from announcement where announcement_id = '$announcement_id'";

if ($db->query($sql)) {
    $db->close();

    echo "<script>alert('Delete Success');window.location = \"add_announcement.php\";</script>";

} else {
    echo $db->error;
    $db->close();
}
