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

  <title>ITPROMO</title>



  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">

  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.css">

</head>
<style>
  #count {
    border-radius: 60%;
    position: relative;
    top: -10px;
    left: -10px;

  }
</style>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

      <?php
$conn = new mysqli("localhost", "root", "", "itpromo_track");
$count = 0;
if (!empty($_POST['add'])) {
    $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
    $comment = mysqli_real_escape_string($conn, $_POST["comment"]);
    $sql = "INSERT INTO notify (subject,comment) VALUES('" . $subject . "','" . $comment . "')";
    mysqli_query($conn, $sql);
}
$sql2 = "SELECT * FROM notify WHERE status = 0";
$result = mysqli_query($conn, $sql2);
$count = mysqli_num_rows($result);
?>




      <!-- Display the alert of notification -->

      <?php
$con = mysqli_connect('localhost', 'root', '', 'itpromo_track');
$query = "SELECT * FROM notify WHERE status=0";
$query_num = mysqli_query($con, $query);
$count = mysqli_num_rows($query_num);

?>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-globe" style="font-size:20px;"></i><span class="badge badge-danger"
              id="count"><?php echo $count; ?></span>

          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header"><?php echo $count; ?> Notifications</span>
            <?php
$con = mysqli_connect('localhost', 'root', '', 'itpromo_track');
$sq = "SELECT * FROM notify WHERE status=0";
$qu_num = mysqli_query($con, $query);
if (mysqli_num_rows($qu_num) > 0) {
    while ($result = mysqli_fetch_assoc($qu_num)) {
        echo '<a class="dropdown-item text-primary font-weight-light" href="read_noti.php?id=' . $result['id'] . '">' . $result['subject'] . '</a>';
        echo '<div class="dropdown-divider"></div>';

    }
} else {
    echo '<a href="#" class="dropdown-item text-danger font-weight-light"><i class="fas fa-frown"></i> Sorry! No Notification</a>';
}
?>
            <div class="dropdown-divider"></div>
          <a href="read_noti.php" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['name']; ?>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a href="../auth/logout.php" class="dropdown-item">
              <i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout
            </a>
            <a href="#" class="dropdown-item">
              <i class="fas fa-user"></i>&nbsp;&nbsp;My Profile
            </a>
          </div>
        </li>
      </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="../dist/img/n2.png" width="100%" >
        <span class="brand-text font-weight-light"></span>
      </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user1.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['name']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


                   <li class="nav-item has-treeview ">
            <a href="index.php" class="nav-link active">

              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashbord
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

         <li class="nav-item">
            <a href="infor_group.php" class="nav-link">
<i class="nav-icon fa fa-users" aria-hidden="true"></i>
              <p>
       Group Information              </p>



            </a>
          </li>



            <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Projects
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="create_proposal.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Proposal</p>
                </a>
              </li>

              <li class="nav-item">
       <a href="../forms/check_pf.php" class="nav-link" >
                   <i class="far fa-circle nav-icon"></i>
                  <p>Project Track</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="proposal_project.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Project Topics</p>
                </a>
              </li>
            </ul>
          </li>


            <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Schedule
                <i class="fas fa-angle-left right"></i>
              </p>


            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="display_schedule_proposal.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proposal Schedul  </p>


                    <?php
$con = mysqli_connect('localhost', 'root', '', 'itpromo_track');
$query = "SELECT schedule_id FROM schedule WHERE schedule_type ='1' and  status=0";
$query_num = mysqli_query($con, $query);
$count = mysqli_num_rows($query_num);

?>

                               <span class="right badge badge-danger"><?php echo $count; ?></span>





                </a>
              </li>
              <li class="nav-item">
                <a href="display_schedule_project.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Schedule</p>
                   <?php
$con = mysqli_connect('localhost', 'root', '', 'itpromo_track');
$query = "SELECT schedule_id FROM schedule WHERE schedule_type ='2' and  status=0";
$query_num = mysqli_query($con, $query);
$count = mysqli_num_rows($query_num);

?>

                               <span class="right badge badge-danger"><?php echo $count; ?></span>
                </a>
              </li>

            </ul>
          </li>


            <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                News
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="annouce.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Annoucements</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="show_topic.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Topic Require </p>
                </a>
              </li>

            </ul>
          </li>

  <li class="nav-item">
            <a href="my_profile.php" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Personal Information
              </p>
            </a>
          </li>




          <li class="nav-item">
            <a href="guide.php" class="nav-link">
        <i class="nav-icon fab fa-glide-g"></i>
              <p>
                Guide
              </p>
            </a>
          </li>

                    <li class="nav-item">
            <a href="course_syllabus.php" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                course syllabus
              </p>
            </a>
          </li>

                    <li class="nav-item">
            <a href="form.php" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Forms
              </p>
            </a>
          </li>


  <li class="nav-item">
            <a href="booked.php" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Books
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../student/index.php">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
   <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
             <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h4>Group </h4>
                  <p>Information</p>
                </div>
                <div class="icon">
                <i class="nav-icon fas fa-book"></i>
                </div>
                <a href="infor_group.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <!-- ./col -->

                      <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h4>Track </h4>
                  <p>Project Track</p>
                </div>
                <div class="icon">
                <i class="nav-icon fas fa-book"></i>
                </div>

                <a href="../forms/check_pf.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>


            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h4>Schedule</h4>
                  <p>Presentation Schedule </p>
                </div>
                <div class="icon">
                <i class="nav-icon fas fa-book"></i>
                </div>
                <a href="display_schedule_proposal.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

                   <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-light">
                <div class="inner">
                  <h4>All Project</h4>
                  <p>Graduated Projects </p>
                </div>
                <div class="icon">
                <i class="nav-icon fas fa-book"></i>
                </div>
                <a href="proposal_project.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>






            <!-- ./col -->
          </div>
      </section>

  <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-edit"></i>
                Workload</h3>
            </div> <!-- /.card-body -->
            <div class="card-body">

              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.js"></script>
              <script type="text/javascript">
                $(document).ready(function () {

                  $.getJSON("get_data.php", function (result) {

                    var chart = new CanvasJS.Chart("chartContainer", {
                      animationEnabled: true,
                      title: {
                        text: "Project Monitoring"
                      },
                      axisY: {
                        title: "Forms",
                        prefix: "PF",
                        suffix: ""
                      },
                      data: [{
                        type: "bar",
                        yValueFormatString: "PF#",
                        indexLabel: "{y}",
                        indexLabelPlacement: "inside",
                        indexLabelFontWeight: "bolder",
                        indexLabelFontColor: "white",
                        dataPoints: result
                      }]
                    });
                    chart.render();
                  });
                });
              </script>

              <div class="body">

                <div id="chartContainer" style="height: 300px; width: 80%;"></div>
              </div>
            </div><!-- /.card-body -->
          </div>
        </div><!-- /.container-fluid -->
      </section>

</br>
</div>


     </div>







    <!-- /.content-wrapper -->
   <footer class="main-footer">
    <div class="float-right d-none d-sm-block">     <class style="font-size: 12px;">
      <b>Version</b> 3.0.3-pre
    </div>
       <class style="font-size: 14px;">   <strong>Copyright ©2020  <a href="#">IT Promo and Track</a>.</strong> All rights
    reserved.
  </footer>

  <!-- ./wrapper -->


  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="../dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="../plugins/chart.js/Chart.min.js"></script>
  <script src="../dist/js/demo.js"></script>
  <script src="../dist/js/pages/dashboard3.js"></script>
  <!-- DataTables -->
  <script src="../plugins/datatables/jquery.dataTables.js"></script>
  <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>
</body>

</html>