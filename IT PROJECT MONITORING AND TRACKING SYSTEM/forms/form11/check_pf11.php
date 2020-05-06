
<?php

if (empty($submit)) {
    session_start();

    require '../../menu/connect.php';
    include '../../menu/function.php';

    $files_id = $_POST['files_id'];
    $advisergroup_id = $_POST['advisergroup_id'];
    $by_advisor11 = $_POST['by_advisor11'];

    $sql = "UPDATE  files SET files_id = '$files_id',
										 advisergroup_id = '$advisergroup_id',
								     by_advisor11 ='Waiting'


			WHERE files_id = '$files_id'";

    $result = mysqli_query($db, $sql) or die("Error in query: $sql " . mysqli_error());

    mysqli_close($cdbon);
    // javascript แสดงการ upload file

    if ($result) {
        echo "<script type='text/javascript'>";
        echo "alert('Upload File Succesfuly');";
        header("Location:pf11.php");
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('pf11.php');";
        echo "</script>";
    }

}

if ($_FILES["complete_project"]["name"] != "") {

    if (move_uploaded_file(
        $_FILES["complete_project"]["tmp_name"],
        "../complete_project_pdf/" . $_FILES["complete_project"]["name"]
    )) {

        //*** Delete Old File ***//

        @unlink("../complete_project_pdf/" . $_POST["hdnOldFilen"]);
        $sql = "UPDATE files ";
        $sql .= " SET complete_project = '" . $_FILES["complete_project"]["name"] . "' WHERE files_id = '$files_id'";

        $result = mysqli_query($db, $sql) or die("Error in query: $sql " . mysqli_error());

        mysqli_close($cdbon);
        // javascript แสดงการ upload file

        if ($result) {
            echo "<script type='text/javascript'>";
            echo "alert('Upload File Succesfuly');";
            header("Location:pf11.php");
            echo "</script>";
        } else {
            echo "<script type='text/javascript'>";
            echo "alert('pf11.php');";
            echo "</script>";
        }
    }
}

?>