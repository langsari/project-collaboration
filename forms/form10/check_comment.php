<?php
session_start();
include "../../menu/function.php";
require '../../menu/connect.php';

if (isset($_POST['comment_content'])) {
    $comment_content = $_POST['comment_content'];
    $advisergroup_id = get_ag_id(get_group_id());
    $group_id = get_group_id();
    $member_id = $_POST['member_id'];
    $form_pf = $_POST['form_pf'];

    $sql = "INSERT INTO comment (comment_content, advisergroup_id,member_id,group_id,form_pf) VALUES ('$comment_content', '$advisergroup_id','$member_id','$group_id','$form_pf')";

    if ($db->query($sql)) {
        $db->close();

        echo "<script>alert('Send Comment');window.location = \"pf10.php\";</script>";

    } else {
        echo $db->error;
        $db->close();
    }
} else {
    echo "Function is not executed!";
}
