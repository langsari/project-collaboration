<?php
session_start();
require '../menu/connect.php';
include '../menu/function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title></title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'><link rel="stylesheet" href="style.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
</head>
<body>
	<div class="progress">
                      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                  </br>
                  <div class="progress progress">



                 <?php

$con = mysqli_connect('localhost', 'root', '', 'itpromo_track');
$query = "SELECT SUM(form_mark) AS total FROM form";
$query_result = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($query_result)) {
    $sum = $row['total'];
}
?>
                              <div class="progress-bar bg-green" role="progressbar" aria-volumenow="100" aria-volumemin="0" aria-volumemax="100" style="width: <?php echo $sum; ?>%">
                              </div>
                          </div>
                          <small>
                              <?php echo $sum; ?> % Complete
                          </small>




</body>
</html>