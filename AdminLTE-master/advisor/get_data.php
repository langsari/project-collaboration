<?php

session_start();

header('Content-Type: application/json');

$con = mysqli_connect("localhost", "root", "", "itpromo_track");

// Check connection
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
} else {
    $data_points = array();

    $my_id = $_SESSION['id'];

    $result = mysqli_query($con, " SELECT files.files_status,files.pf,files.files_id,files.files_filename_proposal,files.Owner,advisergroup.advisergroup_topic,advisergroup.advisergroup_id,partnergroup.group_id,partnergroup.group_number,advisergroup.member_id,member.member_id
FROM advisergroup
INNER JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
INNER JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id
INNER JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'
 ");

    while ($row = $result->fetch_object()) {

        $point = array("label" => $row->Owner, "y" => $row->pf);

        array_push($data_points, $point);
    }

    echo json_encode($data_points, JSON_NUMERIC_CHECK);
}
mysqli_close($con);
