


<?php
session_start();

include "../menu/connect.php";

$status = $_POST['status'];
$advisergroup_id = $_POST['advisergroup_id'];

$topic_id = $_POST['topic_id'];

$sql = "UPDATE topic_project SET status = '$status' WHERE topic_id = '$topic_id'";

if ($rs = $db->query($sql)) {
    $db->close();
    header("Location: proposal_status.php");
} else {
    echo $db->error;
    $db->close();
}
