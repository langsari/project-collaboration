<?php
session_start();

include "../menu/function.php";
require '../menu/connect.php';

$announcement_detail = $_POST['announcement_detail'];
$announcement_topic = $_POST['announcement_topic'];
$admin_id = $_POST['admin_id'];
$parent_comment_id = $_POST['parent_comment_id'];

$sql = "INSERT INTO announcement(announcement_id,parent_comment_id,announcement_topic,announcement_detail,admin_id) VALUES ('$announcement_id','$announcement_topic','$announcement_detail','$admin_id','$parent_comment_id')";

if ($rs = $db->query($sql)) {
    $db->close();
    header("Location:annouce.php");
} else {
    echo $db->error;
    $db->close();
}
