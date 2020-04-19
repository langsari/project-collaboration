<?php

include "../menu/connect.php";

extract($_GET);
$pf_id = $id;
$sql = "delete from form where form_id = '$pf_id'";

if ($db->query($sql)) {
    $db->close();

    echo "<script>alert('Delete Success');window.location = \"PF_setting.php\";</script>";

} else {
    echo $db->error;
    $db->close();
}
