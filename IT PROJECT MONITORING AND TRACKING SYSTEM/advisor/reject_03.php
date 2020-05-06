
<?php

function replaceNull($str)
{
    if($str=="")
    {
        return "NULL";
    }
    else
    {
        return "'$str'";
    }
}
if (isset($_GET['id'])) {
    require '../menu/connect.php';
    $id = $_GET['id'];
    $sql = "UPDATE files SET status_advisor=".replaceNull($status_advisor)."  WHERE advisergroup_id = '$id'";
    if ($db->query($sql)) {
        $db->close();
        header("Location:advisor_request.php");
    } else {
        echo $db->error;
        $db->close();
    }
}

?>