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
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user"></i>
          <?php echo $_SESSION['name']; ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="../auth/logout.php" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout
          </a>
          <a href="my_profile.php" class="dropdown-item">
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
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ITPROMO</span>
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



            <a href="infor_group.php" class="nav-link ">
             
              <i class="nav-icon fas fa-tachometer-alt"></i>
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
       <a href="../forms/form01/pf01.php" class="nav-link">
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
            <a href="form.php" class="nav-link active">
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
  

  <!-- PAGE CONTENT -->

        <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Forms</li>
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
      <table class="table">
      <thead>
      <tr>
        <th scope="col">Forms ID</th>
        <th scope="col">Form Name</th>
        <th scope="col">Download</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <th scope="row">PF01</th>
        <td>Adviser Proposal Project Approval Letter</td>
        <td>
          <!--<a href="#" class="btn btn-success btn-sm " role="button" aria-pressed="true">DOC</a>-->
          <a href="assets/forms/PF01%20-%20IT%20Project%20-%20Adviser%20Proposal%20Project%20Approval%20Letter.pdf" class="btn btn-primary btn-sm " role="button" aria-pressed="true" target="_blank">PDF</a>
        </td>
      </tr>
      <tr>
        <th scope="row">PF02</th>
        <td>Officer receive copy of Project Proposal <br>
          <small class="text-muted">This form is with officer</small>
        </td>
        <td>
          <a href="assets/forms/PF02%20-%20IT%20Project%20-%20Officer%20recieve%20copy%20of%20Project%20Proposal.pdf" class="btn btn-primary btn-sm " role="button" aria-pressed="true" target="_blank">PDF</a>
        </td>
      </tr>
      <tr>
        <th scope="row">PF03</th>
        <td>Project Proposal Revision Sheet <br>
          <small class="text-muted">Student will get this form during proposal presentations defend</small>
        </td>
        <td>
          <a href="#" class="btn btn-primary btn-sm disabled" role="button" aria-pressed="true" target="_blank">PDF</a>
        </td>
      </tr>
      <tr>
        <th scope="row">PF04</th>
        <td>Project Proposal Approval Letter <br>
          <small class="text-muted">This form will use to insert in Proposal Booked.
            <span class="text-danger"> Please READ and EDIT the document detail before print and get signature</span>
          </small>
        </td>

        <td>
          <a href="assets/forms/PF04%20-%20IT%20Project%20-%20Project%20Proposal%20Approval%20Letter.docx" class="btn btn-success btn-sm" role="button" aria-pressed="true" target="_blank">.DOCX</a>
        </td>
      </tr>
      <tr>
        <th scope="row">PF05</th>
        <td>Officer Receive Completed Project Proposal <br>
          <small class="text-muted">This form is with officer</small>
        </td>
        <td>
          <a href="assets/forms/PF05%20-%20IT%20Project%20-%20Officer%20recieve%20Complete%20Project%20Proposal.pdf" class="btn btn-primary btn-sm " role="button" aria-pressed="true" target="_blank">PDF</a>
        </td>
      </tr>
      <tr>
        <th scope="row">PF06</th>
        <td>Consultation Log Book</td>
        <td>
          <a href="assets/forms/PF06%20-%20IT%20Project%20-%20Consultation%20Log%20Book.pdf" class="btn btn-primary btn-sm " role="button" aria-pressed="true" target="_blank">PDF</a>
        </td>
      </tr>
      <tr>
        <th scope="row">PF07</th>
        <td>Project Seminar</td>
        <td>
          <a href="#" class="btn btn-primary btn-sm " role="button" aria-pressed="true" target="_blank">PDF</a>
        </td>
      </tr>
      <tr>
        <th scope="row">PF08</th>
        <td>Adviser Project Approval Letter</td>
        <td>
          <a href="assets/forms/PF08%20-%20IT%20Project%20-%20Adviser%20Project%20Approval%20Letter.pdf" class="btn btn-primary btn-sm " role="button" aria-pressed="true" target="_blank">PDF</a>
        </td>
      </tr>
      <tr>
        <th scope="row">PF09</th>
        <td>Officer Receive Copy Of 5 Chapters Project</td>
        <td>
          <a href="assets/forms/PF09%20-%20IT%20Project%20-%20Officer%20Receive%20Copy%20of%205%20Chapter%20Project.pdf" class="btn btn-primary btn-sm " role="button" aria-pressed="true" target="_blank">PDF</a>
        </td>
      </tr>
      <tr>
        <th scope="row">PF10</th>
        <td>Project Revision Sheet <br>
          <small class="text-muted">Student will get this form during project presentations defend</small>
        </td>
        <td>
          <a href="#" class="btn btn-primary btn-sm disabled" role="button" aria-pressed="true" target="_blank">PDF</a>
        </td>
      </tr>
      <tr>
        <th scope="row">PF11</th>
        <td>Project Approval Letter <br>
          <small class="text-muted">This form will use to insert into Project Booked.
            <span class="text-danger"> Please READ and EDIT the form detail before print and get signature</span>
          </small>
        </td>
        <td>
          <a href="assets/forms/PF11%20-%20IT%20Project%20-%20Project%20Approval%20Letter.docx" class="btn btn-success btn-sm " role="button" aria-pressed="true" target="_blank">.DOCX</a>
        </td>
      </tr>
      <tr>
        <th scope="row">PF12</th>
        <td>Free From Adviser Letter</td>
        <td>
          <a href="assets/forms/PF12%20-%20IT%20Project%20-%20Free%20From%20Adviser%20Letter.pdf" class="btn btn-primary btn-sm " role="button" aria-pressed="true" target="_blank">PDF</a>
        </td>
      </tr>
      <tr>
        <th scope="row">PF13</th>
        <td>Officer Receive Project Booked</td>
        <td>
          <a href="#" class="btn btn-primary btn-sm " role="button" aria-pressed="true" target="_blank">PDF</a>
        </td>
      </tr>
      </tbody>
    </table>
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
