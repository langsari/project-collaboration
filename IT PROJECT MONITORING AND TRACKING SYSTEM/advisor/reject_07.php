

<?php

function replaceNull($str)
{
    if($str=="")
    {
        return "Null";
    }
    else
    {
        return "'$str'";
    }
}
if (isset($_GET['id'])) {
    require '../menu/connect.php';
    $id = $_GET['id'];
    $sql = "UPDATE files SET by_advisor07 =".replaceNull($by_advisor07)."  WHERE advisergroup_id = '$id'";
    if ($db->query($sql)) {
        $db->close();
        header("Location:advisor_request.php");
    } else {
        echo $db->error;
        $db->close();
    }
}

?>