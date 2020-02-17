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

  <title>AdminLTE 3 | Dashboard 3</title>

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

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
              <li class="nav-item d-none d-sm-inline-block">
        <li class="nav-item d-none d-sm-inline-block">
        <a href="../auth/logout.php" class="nav-link">Logout</a>
      </li>
      </li>
     
       
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ITPROMO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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



            <a href="infor_group.php" class="nav-link ">
             
              <i class="nav-icon fa fa-group"></i>
              <p>
                Dashbord
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

         <li class="nav-item">
            <a href="infor_group.php" class="nav-link ">
              <i class="nav-icon fa fa-group"></i>
              <p>
       Group Information              </p>
            </a>
          </li>
    

   <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Projects
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="create_proposal.php" class="nav-link " >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Proposal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tables/data.html" class="nav-link">
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


          <li class="nav-item has-treeview">
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
                  <p>Proposal Schedule</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="display_schedule_project.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Schedule</p>
                </a>
              </li>
              
            </ul>
          </li>


  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                News
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Annoucement.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Annoucements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="show_topic.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Topic Require</p>
                </a>
              </li>
              
            </ul>
          </li>

  <li class="nav-item">
            <a href="my_profile.php" class="nav-link ">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Personal Information
              </p>
            </a>
          </li>
    



          <li class="nav-item">
            <a href="guide.php" class="nav-link ">
              <i class="nav-icon fa fa-glide-g"></i>
              <p>
                Guide
              </p>
            </a>
          </li>

                    <li class="nav-item">
            <a href="course_syllabus.php" class="nav-link ">
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
            <a href="booked.php" class="nav-link active">
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
  

  <!-- PAGE CONTENT -->

        <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Books</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


      <div class="container-fluid">
        <div class="row">
     <div class="col-md-12">

            <!-- Profile Image -->
        
            <div class="card card-primary card-outline">


     <div class="card-body p-0">

        <main role="main" class="container">


    <h4 class="mt-3">Requirement Fulfillment </br>
     <small class="text-muted">This is explanation steps of the <a href="?page=guide" class="btn-primary btn-sm">Guide/Process</a> of requirement fulfilment after project presentation</small>
    </h4>

  <hr>

  <h5>Please continues and follow these step and fulfill requirements below;</h5>

  <ul>
    <li>Step: Project Revision(PF10), the student must complete revision and get all signatures from Advisor(s) and three(3) Committees.</li>
    <li>Step: Project Approve(PF11), the form will insert and attach to after cover of the Project Book</li>
    <li>Step: Project document and resources, consist of</li>
    <ul>
      <li>(1)Final Project Book,</li>
      <li>(2)Project Application,</li>
      <li>(3)Project Poster,</li>
      <li>(4)Project Vinyl (X Stand) size 60cmx160cm or 80cmx180cm,</li>
      <li>(5)Paper / Journal</li>
    </ul>
    <li>Step: Project Approve(PF11) have to sign by (1) Adviser(s), (2) Committees, (3) Head of Department and (4) Dean of Faculty. This must completed by the student self.</li>
    <li>Step: Submit complete project document and related resources to Adviser, to get Free From Advisor(PF12).</li>
    <li>Step: Submit complete project document and related resources, and PF10, PF11, and PF12 to officer.</li>
  </ul>

  <hr>

  <h5>Requirement MUST complete after Final Project Presentation</h5>
  <p><strong>[HARDCOPY] :</strong></p>
  <ul>
    <li>1. Project Revision Sheet</li>
    <li>2. Project Poster</li>
    <li>3. Project X Stand Vinyl</li>
    <li>4. Project Book</li>
  </ul>
  <p><strong>[SOFTCOPY] : </strong></p>
  <ul>
    <li>1. Project Poster</li>
    <li>2. Poster X Stand Vinyl</li>
    <li>3. Journal / Paper</li>
  </ul>
  <p>
    <strong>Requirement submission SOFT COPY, please provide in CD, DVD, Flash Disk or other media with file naming as below:</strong>
  </p>
  <ul>

    <li>Student_ID-name-Project_Book example: 491431002-Kholed-Langsari-Project_Book</li>
    <li>Student_ID-name-Project_Vinyl example: 491431002-Kholed-Langsari-Project_Vinyl</li>
    <li>Student_ID-name-Project_Poster example: 491431002-Kholed-Langsari-Project_Poster</li>
    <li>Zip all files above and naming as Student_ID-name-Graduate example: 491431002-Kholed-Langsari-Graduate.zip</li>
  </ul>

  <hr>

  <h5>Requirement of Poster and X Stand Vinyl</h5>
  <ul>
    <li>1. Poster in A3 size and one side</li>
    <li>2. Poster have to be readable from 2 meter read.</li>
    <li>3. Typography must be suitable format</li>
    <li>4. Format must be in .psd/.cdr and .jpg/.jpeg</li>
    <li>5. Content include</li>
    <ul>
      <li>- Topic</li>
      <li>- Student and Adviser data (Student ID, Student and Advisor name)</li>
      <li>- FTU Logo</li>
      <li>- Introduction</li>
      <li>- Methodology</li>
      <li>- Result(Text, Figure/Photography/schema)</li>
      <li>- Conclusion / Trademark</li>
      <li>- Faculty and Department Logo</li>
    </ul>
    <li>6. Poster resolution for printing minimal is 300 dpi from original resource photo</li>
  </ul>

  <hr>

  <h5>Requirement of Journal / Paper</h5>
  <p>The journal or paper format should follow <a href="https://www.ieee.org/content/dam/ieee-org/ieee/web/org/conferences/Conference-template-A4.doc">IEEE</a> or <a href="https://www.elsevier.com/__data/promis_misc/FINE_FinalTemplate.doc" >ScienceDirect</a> standard</p>

  <hr>

  <h5>Submission</h5>
  <p>For requirement submission above, please submit directly to IT officer, before dateline as mentioned in the schedule</p>

  <hr>

  <br>

</main>      
                                </div>
                            </div>
                        </div>
                    </div>

    <!-- /.content -->
 
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

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
