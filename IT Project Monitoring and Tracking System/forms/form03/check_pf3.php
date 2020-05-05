
<?php

if (empty($submit)) {
    session_start();

    require '../../menu/connect.php';
    include '../../menu/function.php';

    $files_id = $_POST['files_id'];
    $advisergroup_id = $_POST['advisergroup_id'];
    $status_advisor = $_POST['status_advisor'];

    $sql = "UPDATE  files SET files_id = '$files_id',
										 advisergroup_id = '$advisergroup_id',
                      status_advisor ='Waiting'



			WHERE files_id = '$files_id'";

    $result = mysqli_query($db, $sql) or die("Error in query: $sql " . mysqli_error());

    mysqli_close($cdbon);
    // javascript แสดงการ upload file

    if ($result) {
        echo "<script type='text/javascript'>";
        echo "alert('Upload File Succesfuly');";
        header("Location:pf03.php");
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('pf03.php');";
        echo "</script>";
    }

}

if ($_FILES["files_filename_proposal"]["name"] != "") {

    if (move_uploaded_file(
        $_FILES["files_filename_proposal"]["tmp_name"],
        "../fileupload/" . $_FILES["files_filename_proposal"]["name"]
    )) {

        //*** Delete Old File ***//

        @unlink("../fileupload/" . $_POST["hdnOldFilen"]);
        $sql = "UPDATE files ";
        $sql .= " SET files_filename_proposal = '" . $_FILES["files_filename_proposal"]["name"] . "' WHERE files_id = '$files_id'";

        $result = mysqli_query($db, $sql) or die("Error in query: $sql " . mysqli_error());

        mysqli_close($cdbon);
        // javascript แสดงการ upload file

        if ($result) {
            echo "<script type='text/javascript'>";
            echo "alert('Upload File Succesfuly');";
            header("Location:pf03.php");
            echo "</script>";
        } else {
            echo "<script type='text/javascript'>";
            echo "alert('pf03.php');";
            echo "</script>";
        }
    }
}

?>