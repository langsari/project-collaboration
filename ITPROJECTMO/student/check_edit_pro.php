<?php

include "../menu/function.php";
require '../menu/connect.php';

if (empty($submit)) {

$id = $_GET['id'];

    $topic_keyword = $_POST['topic_keyword'];
    $topic_fieldstudy = $_POST['topic_fieldstudy'];
    $topic_years = $_POST['topic_years'];
    $topic_abstrack = $_POST['topic_abstrack'];

    $sql = "UPDATE  topic_project SET 
                    topic_keyword = '$topic_keyword',
                    topic_fieldstudy = '$topic_fieldstudy',
                    topic_years = '$topic_years',
                    topic_abstrack  = '$topic_abstrack'

            WHERE topic_id = '$id'";

    if ($db->query($sql)) {
        $db->close();

        echo "<script>alert('Edit Success');window.location = \"create_proposal.php\";</script>";

    } else {
        echo $db->error;
        $db->close();
    }
} else {
    echo "Function is not executed!";
}
