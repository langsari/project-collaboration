
<?php

if (empty($submit)) {
    session_start();

    require '../../menu/connect.php';
    include '../../menu/function.php';

    $files_id = $_POST['files_id'];
    $advisergroup_id = $_POST['advisergroup_id'];
    $by_advisor08 = $_POST['by_advisor08'];

    $sql = "UPDATE  files SET files_id = '$files_id',
                     advisergroup_id = '$advisergroup_id',
                  by_advisor08 = 'Waiting' 
              


      WHERE files_id = '$files_id'";

    $result = mysqli_query($db, $sql) or die("Error in query: $sql " . mysqli_error());

    mysqli_close($cdbon);
    // javascript แสดงการ upload file

    if ($result) {
        echo "<script type='text/javascript'>";
        echo "alert('Upload File Succesfuly');";
        header("Location:pf08.php");
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('pf08.php');";
        echo "</script>";
    }

}

if ($_FILES["files_filename_project"]["name"] != "") {

    if (move_uploaded_file(
        $_FILES["files_filename_project"]["tmp_name"],
        "../fileupload/" . $_FILES["files_filename_project"]["name"]
    )) {

        //*** Delete Old File ***//

        @unlink("../fileupload/" . $_POST["hdnOldFilen"]);
        $sql = "UPDATE files ";
        $sql .= " SET files_filename_project = '" . $_FILES["files_filename_project"]["name"] . "' WHERE files_id = '$files_id'";

        $result = mysqli_query($db, $sql) or die("Error in query: $sql " . mysqli_error());

        mysqli_close($cdbon);
        // javascript แสดงการ upload file

        if ($result) {
            echo "<script type='text/javascript'>";
            echo "alert('Upload File Succesfuly');";
            header("Location:pf08.php");
            echo "</script>";
        } else {
            echo "<script type='text/javascript'>";
            echo "alert('pf08.php');";
            echo "</script>";
        }
    }
}

?>