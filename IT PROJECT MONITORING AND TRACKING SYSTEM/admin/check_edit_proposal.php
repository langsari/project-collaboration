<?php

if (empty($submit)) {

    include "../menu/function.php";
    require '../menu/connect.php';

    $topic_id = $_POST['topic_id'];
$topic_topic=$_POST['topic_topic'];
$topic_abstrack=$_POST['topic_abstrack'];
$topic_keyword=$_POST['topic_keyword'];
$topic_fieldstudy=$_POST['topic_fieldstudy'];
$topic_years=$_POST['topic_years'];
$Owner=$_POST['Owner'];
$adviser=$_POST['adviser'];
$status=$_POST['status'];
$group_number=$_POST['group_number'];


    $sql = "UPDATE  topic_project SET topic_id = '$topic_id',
                     group_number='$group_number',
                     topic_topic='$topic_topic',
                     Owner='$Owner',
                     adviser='$adviser',
                     status='$status',
                    topic_keyword = '$topic_keyword',
                    topic_fieldstudy = '$topic_fieldstudy',
                    topic_years = '$topic_years',
                    topic_abstrack  = '$topic_abstrack'

            WHERE topic_id = '$topic_id'";


    if ($db->query($sql)) {
        $db->close();

        echo "<script>alert('Edit Success');window.location = \"view_all_project.php\";</script>";

    } else {
        echo $db->error;
        $db->close();
    }
} else {
    echo "Function is not executed!";
}
