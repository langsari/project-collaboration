<?php
session_start();
include "../menu/connect.php";
require '../menu/function.php';

$group_number = $_POST['group_number'];
$topic_abstrack = $_POST['topic_abstrack'];
$topic_keyword = $_POST['topic_keyword'];
$topic_topic = $_POST['topic_topic'];
$topic_fieldstudy = $_POST['topic_fieldstudy'];
$topic_years = $_POST['topic_years'];
$adviser = $_POST['adviser'];
$position = $_POST['position'];
$advisergroup_id = get_ag_id(get_group_id());
$Owner = get_member_list(get_group_id());

$sql = "INSERT INTO topic_project (group_number,topic_abstrack, topic_keyword,topic_fieldstudy, topic_years,adviser,topic_topic,advisergroup_id,position,Owner) VALUES ('$group_number','$topic_abstrack','$topic_keyword','$topic_fieldstudy','$topic_years','$adviser','$topic_topic','$advisergroup_id','$position','$Owner')";
if ($rs = $db->query($sql)) {
    $db->close();
    header("Location: create_proposal.php");
} else {
    echo $db->error;
    $db->close();
}
