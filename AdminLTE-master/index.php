<?php
require 'menu/connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>ITPROMO&TRACK | Homepage</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
  
    </ul>

   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        
               <li class="nav-item d-none d-sm-inline-block">
        <a href="auth/login.php" class="nav-link">Login</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="auth/register.php" class="nav-link">Register</a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ITPROMO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="Annoucement.php" class="nav-link ">
             
              <i class="nav-icon fa fa-bullhorn"></i>
              <p>
                Announcements
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

       
         
          <li class="nav-item">
            <a href="show_topic.php" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Topics
              </p>
            </a>
          </li>

    
          <li class="nav-item">
            <a href="proposal_project.php" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Proposal Project
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="guide.php" class="nav-link">
              <i class="nav-icon fa fa-glide-g"></i>
              <p>
                Guide
              </p>
            </a>
          </li>

                    <li class="nav-item">
            <a href="course_syllabus.php" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Schedule
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashbord</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="card card-primary card-outline">
      
            <div class="card-body">
              <h1 class="mt-3">Welcome to Information Technology Project</h1>
              <p class="lead">ITPromot or Information Technology Project Monitoring and Tracking System.</p>

              <hr>


                        <h2>Guide and Help</h2>
                        <p>You will guide and help to achieve you purpose of doing Information Technology Project
                            through this application </p>
                        <p><a href="?page=guide" class="btn-primary btn-sm">Guide</a> is present to procedure how to do
                            the project</p>
                        <p><a href="?page=schedule" class="btn-primary btn-sm">Schedule</a> is present the schedule time
                            table of the project</p>
                        <p><a href="?page=form" class="btn-primary btn-sm">Forms</a> is collection of involve forms</p>

                        <hr>

                         <h2>The Guide for both:</h2>
                        <p class="text-dark"><kbd>IT234-232</kbd> - Information Technology Project
                            (โครงงานเทคโนโลยีสารสนเทศ)</p>
                        <p class="text-dark"><kbd>IT2301-321</kbd> - Information Technology Project 1
                            (โครงงานเทคโนโลยีสารสนเทศ I )</p>
                        <p class="text-dark"><kbd>IT2301-322</kbd> - Information Technology Project 2
                            (โครงงานเทคโนโลยีสารสนเทศ II )</p>



            </div><!-- /.card-body -->
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </br>

     </div>





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
  <script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>