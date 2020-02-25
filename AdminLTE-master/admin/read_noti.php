<?php
session_start();
require '../menu/connect.php';
include('../menu/function.php');

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
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">

          <a href="../admin/index.php" class="nav-link">Home</a>
        </li>
      </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">ITPROMOT</span>
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

            <li class="nav-item has-treeview menu-open">
              <a href="index.php" class="nav-link ">

                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashbord
                  <span class="right badge badge-danger"></span>
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-users"></i>
                <p>
                  Manage User
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../admin/accept_member.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>User Request</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../admin/choose_committee.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Choose Committee</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../admin/all_member.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View All Users</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-calendar"></i>
                <p>
                  Manage Schedule
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../admin/add_schedule_proposal.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Proposal Schedule</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../admin/add_schedule_project.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Project Schedule</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Projects
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../admin/student_track.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Project Track</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../admin/add_proposal.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Student project proposal</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../admin/view_all_project.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All Project Topics</p>
                  </a>
                </li>
              </ul>
            </li>


            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-calendar"></i>
                <p>
                  Manage Annoucements
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../admin/add_announcement.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Annoucements</p>
                  </a>
                </li>

              </ul>
            </li>

            <li class="nav-item">
              <a href="test.php" class="nav-link">
                <i class="nav-icon fa fa-calendar"></i>
                <p>
                  course syllabus
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../admin/index.php">Home</a></li>
              <li class="breadcrumb-item active">Notification</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <?php include ('../menu/connect.php'); ?>

          <?php
          if (isset($_GET['id']))
           {
            $noti_id= $_GET['id'];

            $conn = new mysqli("localhost","root","","itpromo_track");
            $sql="UPDATE notify SET status=1 WHERE id='$noti_id' ";
            $result=mysqli_query($conn, $sql);
          }

          ?>


      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-edit"></i>
          Recent Notification</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>

        <?php

     $strSQL = "SELECT * FROM notify WHERE status=1 ORDER BY id DESC";

         ?>
    <?php
            
            if($objQuery = $db->query($strSQL)){
             while($objResult = $objQuery->fetch_object()){
            ?>

        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12">
              <div class="row">
                <div class="col-12">
                  
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../dist/img/user1.png" alt="user image">
                        <span class="username">
                          Administrator
                        </span>
                        <span class="description">Shared publicly - 7:45 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      
                      <p><b><?php echo $objResult->subject; ?></b></p>
                      <p> <?php echo $objResult->comment; ?></p>
                  
                    </div>
 <?php
                 }
               }
                   ?>

                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- /.card-body -->
      </div>
      <!-- /.card -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.3-pre
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
