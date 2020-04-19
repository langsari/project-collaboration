<?php

include "../menu/connect.php";

extract($_GET);
$news_id = $id;
$sql = "delete from news_topic where news_id = '$news_id'";

if ($db->query($sql)) {
    $db->close();

    echo "<script>alert('Delete Success');window.location = \"add_general_topic.php\";</script>";

} else {
    echo $db->error;
    $db->close();
}
