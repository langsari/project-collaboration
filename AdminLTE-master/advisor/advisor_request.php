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
            <a href="index.php" class="nav-link ">
             
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashbord
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

         <li class="nav-item">
            <a href="advisor_request.php" class="nav-link active">
             <i class="nav-icon fa fa-paper-plane"></i>
              <p>
       Request              </p>
            </a>
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
                <a href="proposal_status.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proposal Status</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="student_Track.php" class="nav-link">
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
                       <li class="nav-item">
                <a href="manage_mark.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Mark</p>
                </a>
              </li>

                       <li class="nav-item">
                <a href="give_mark.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Give Mark as a Committee</p>
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
                <a href="Annoucement.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Annoucements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_general_topic.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Topic Require</p>
                </a>
              </li>
              
            </ul>
          </li>

  <li class="nav-item">
            <a href="../committee/committee_request.php" class="nav-link">
         <i class="nav-icon fa fa-tasks"></i> 
              <p>
                For Committee
              </p>
            </a>
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
            <a href="line_message.php" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
               Line notify
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
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
                 <div class="card">
              <div class="card-header">
                <h6><b>ADVISOR AND TOPIC REQUEST (PF01)
 </h6></b>
              </div>
              <!-- /.card-header -->
          <div class="card-body">
                <table class="table table-bordered">
            <thead>
              <tr>
              <th>No</th>
                <th>Title project</th>
                <th>Student</th>
                <th>Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>


                                       <?php
require '../menu/connect.php';
$my_id = $_SESSION['id'];
          $sql = "SELECT advisergroup.*, partnergroup.group_number FROM advisergroup
          LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id
         WHERE advisergroup.member_id = '$my_id' AND advisergroup_status = 'Waiting'
          ORDER BY advisergroup.advisergroup_id DESC";

          $i = 1;
              if($rs = $db->query($sql)){
                while($row = $rs->fetch_object()){
              ?>

<tr>
<td><div align="center"><?php echo $i;?></div></td>

                <td><?php echo $row->advisergroup_topic; ?></td>
                <td><?php echo get_member_list($row->group_id); ?></td>
                <td>
                  <h6> <span class="badge badge-danger"><?php echo $row->advisergroup_status; ?></span>
                </td>


                <td><a href="check_approve.php?id=<?php echo $row->advisergroup_id; ?>"
                    class="btn btn-success btn-xs" title="Comfirm"
                    onclick="return confirm_accept('<?php echo $row->group_number; ?>')"><i
                      class='glyphicon glyphicon-ok'></i> Approve</a>

                  <a href="check_approve.php?id=<?php echo $row->advisergroup_id; ?>"
                    class="btn btn-danger btn-xs" title="Comfirm"
                    onclick="return confirm_accept('<?php echo $row->group_number; ?>')"><i
                      class='glyphicon glyphicon-ok'></i> Reject</a>

                </td>



              </tr>



              <?php
                }
              }else{
              }
              ?>

                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
<div class="col-md-6">
                 <div class="card">
              <div class="card-header">
                <h6><b>3 CHAPTER OF PROPOSAL REQUEST (PF01)
</b> </h6>
              </div>
              <!-- /.card-header -->
          <div class="card-body">
                <table class="table table-bordered">
            <thead>





  <!-- PF01-->


                                        <tr>
                                        <th>No</th>
                    <th>Title project</th>
                    <th>Student</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                  </tr>
                                        </thead>
                                        <tbody>


                                        <?php
require '../menu/connect.php';
$my_id = $_SESSION['id'];
    $strSQL = "SELECT advisergroup.*,  files.files_status,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'  AND files_status = 'Waiting' 
        
               ";
                 $i = 1;

              if($rs = $db->query($strSQL)){
                while($row = $rs->fetch_object()){
              ?>
                <tr>
                <td><div align="center"><?php echo $i;?></div></td>

                    <td><?php echo $row->advisergroup_topic; ?></td>
                    <td><?php echo get_member_list($row->group_id); ?></td>
                    <td>
                      <h6> <span class="badge badge-danger"><?php echo $row->files_status; ?></span>
                    </td>
                    <td><a href="student/download.php?pdf=<?php echo $row->files_filename_proposal ;?>"><i
                          class="fa fa-download"></i></a></td>

                    <td><a href="check_topic.php?id=<?php echo $row->files_id; ?>"
                        class="btn btn-success btn-xs" title="Comfirm"
                        onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                          class='glyphicon glyphicon-ok'></i> Approve</a>

                  </tr>
                  <?php
                }
              }else{
              }
              ?>            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

          <!-- PF01-->




      <div class="col-md-6">
                 <div class="card">
              <div class="card-header">
                <h6><b>PROPOSAL REVISION REQUEST (PF03)
</b> </h6>
              </div>
              <!-- /.card-header -->
          <div class="card-body">
                <table class="table table-bordered">
            <thead>
                      <tr>
                      <th>No</th>
                        <th>Title project</th>
                        <th>Student</th>
                        <th>Status</th>
           </tr>
          </thead>
    <tbody>

    <?php


require '../menu/connect.php';
$my_id = $_SESSION['id'];
    $strSQL = "SELECT advisergroup.*,  files.by_officer,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic,files.status_advisor FROM advisergroup

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'  AND pf='2' And status_advisor=''
               ";


$i = 1;

              if($rs = $db->query($strSQL)){
                while($row = $rs->fetch_object()){
              ?>
                
                <tr>                     
                <td><div align="center"><?php echo $i;?></div></td>


                        <td><?php echo $row->advisergroup_topic; ?></td>
                        <td><?php echo get_member_list($row->group_id); ?></td>

                        <td><a href="check_proposal_revision.php?id=<?php echo $row->files_id; ?>"
                            title="Comfirm" onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                              class="fa fa-check" aria-hidden="true"></i> </a>



                      </tr>
                      <?php
                }
              }else{
              }
              ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            
            
            
            <!-- PF04-->
                    
                       <div class="col-md-6">
                 <div class="card">
              <div class="card-header">
                <h6><b>PROJECT PROPOSAL APPROVAL LETTER (PF04)
</b> </h6>
              </div>
              <!-- /.card-header -->
          <div class="card-body">
                <table class="table table-bordered">
            <thead>
                      <tr>
                      <th>No</th>

                        <th>Title project</th>
                        <th>Student</th>
                        <th>Status</th>


                </tr>
                                        </thead>
                                        <tbody>


                                        <?php


require '../menu/connect.php';
$my_id = $_SESSION['id'];
    $strSQL = "SELECT advisergroup.*,  files.by_officer,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic,files.status_advisor FROM advisergroup

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'  AND pf='3' And status_advisor='Pass'  ";

$i = 1;
              if($rs = $db->query($strSQL)){
                while($row = $rs->fetch_object()){
              ?>
                  <tr>
                  <td><div align="center"><?php echo $i;?></div></td>

                        <td><?php echo $row->advisergroup_topic; ?></td>
                        <td><?php echo get_member_list($row->group_id); ?></td>

                        <td><a href="check_proposal_approve.php?id=<?php echo $row->files_id; ?>"
                            title="Comfirm" onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                              class="fa fa-check" aria-hidden="true"></i> </a>



                      </tr>
                      <?php
                }
              }else{
              }
              ?>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>





  <!-- PF06-->
          <!-- Select advisor -->
         <div class="col-md-6">
                 <div class="card">
              <div class="card-header">
                <h6><b>CONSULTATION LOG BOOK (PF06)
</b> </h6>
              </div>
              <!-- /.card-header -->
          <div class="card-body">
                <table class="table table-bordered">
            <thead>
                      <tr>
                      <th>No</th>

                        <th>Title project</th>
                        <th>Student</th>
                        <th>Status</th>
           </tr>
          </thead>
    <tbody>

    <?php


require '../menu/connect.php';
$my_id = $_SESSION['id'];
    $strSQL = "SELECT advisergroup.*,  files.by_officer,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic,files.by_officer05 FROM advisergroup

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'  AND pf='5' And by_officer05 ='Pass'   ";

$i = 1;
              if($rs = $db->query($strSQL)){
                while($row = $rs->fetch_object()){
              ?>
                  <tr>
                  <td><div align="center"><?php echo $i;?></div></td>

                        <td><?php echo $row->advisergroup_topic; ?></td>
                        <td><?php echo get_member_list($row->group_id); ?></td>

                        <td><a href="check_06.php?id=<?php echo $row->files_id; ?>"
                            title="Comfirm" onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                              class="fa fa-check" aria-hidden="true"></i> </a>



                      </tr>
                      <?php
                }
              }else{
              }
              ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
          
                      <!-- PF07-->
                       <div class="col-md-6">
                 <div class="card">
              <div class="card-header">
                <h6><b>PROJECT SEMINAR (PF07)
</b> </h6>
              </div>
              <!-- /.card-header -->
          <div class="card-body">
                <table class="table table-bordered">
            <thead>
                      <tr>
                      <th>No</th>

                        <th>Title project</th>
                        <th>Student</th>
                        <th>Status</th>


                </tr>
                                        </thead>
                                        <tbody>


                                        <?php


require '../menu/connect.php';
$my_id = $_SESSION['id'];
    $strSQL = "SELECT advisergroup.*,  files.by_officer,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic,files.by_officer05 FROM advisergroup

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'  AND pf='6' And by_advisor06 ='Pass'               ";

$i = 1;
              if($rs = $db->query($strSQL)){
                while($row = $rs->fetch_object()){
              ?>
                    <tr>
                    <td><div align="center"><?php echo $i;?></div></td>

                        <td><?php echo $row->advisergroup_topic; ?></td>
                        <td><?php echo get_member_list($row->group_id); ?></td>

                        <td><a href="check_07.php?id=<?php echo $row->files_id; ?>"
                            title="Comfirm" onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                              class="fa fa-check" aria-hidden="true"></i> </a>



                      </tr>
                      <?php
                }
              }else{
              }
              ?>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                         <!-- PF08--> 


          <!-- Select advisor -->
          <div class="col-md-6">
                 <div class="card">
              <div class="card-header">
                <h6><b>ADVISER PROJECT APPROVAL LETTER (PF08)
</b> </h6>
              </div>
              <!-- /.card-header -->
          <div class="card-body">
                <table class="table table-bordered">
            <thead>
                      <tr>
                      <th>No</th>

                        <th>Title project</th>
                        <th>Student</th>
                        <th>Status</th>
           </tr>
          </thead>
    <tbody>

    <?php


require '../menu/connect.php';
$my_id = $_SESSION['id'];
    $strSQL = "SELECT advisergroup.*,  files.by_officer,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic,files.by_advisor07 FROM advisergroup

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'  AND pf='8' And by_advisor08 ='Waiting'   ";

$i = 1;
              if($rs = $db->query($strSQL)){
                while($row = $rs->fetch_object()){
              ?>
                  <tr>
                  <td><div align="center"><?php echo $i;?></div></td>

                        <td><?php echo $row->advisergroup_topic; ?></td>
                        <td><?php echo get_member_list($row->group_id); ?></td>

                        <td><a href="check_08.php?id=<?php echo $row->files_id; ?>"
                            title="Comfirm" onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                              class="fa fa-check" aria-hidden="true"></i> </a>



                      </tr>
                      <?php
                }
              }else{
              }
              ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
          
                    
                      <div class="col-md-6">
                 <div class="card">
              <div class="card-header">
                <h6><b>PROJECT REVISION (PF10)
</b> </h6>
              </div>
              <!-- /.card-header -->
          <div class="card-body">
                <table class="table table-bordered">
            <thead>
                      <tr>
                      <th>No</th>

                        <th>Title project</th>
                        <th>Student</th>
                        <th>Status</th>


                </tr>
                                        </thead>
                                        <tbody>


                                        <?php


require '../menu/connect.php';
$my_id = $_SESSION['id'];
$strSQL = "SELECT advisergroup.*,  files.by_officer,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic,files.by_advisor07 FROM advisergroup

LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
LEFT JOIN member ON advisergroup.member_id = member.member_id
WHERE advisergroup.member_id = '$my_id'  AND pf='9' And by_advisor10 =''   ";
 

$i = 1;
              if($rs = $db->query($strSQL)){
                while($row = $rs->fetch_object()){
              ?>
                    <tr>
                    <td><div align="center"><?php echo $i;?></div></td>

                        <td><?php echo $row->advisergroup_topic; ?></td>
                        <td><?php echo get_member_list($row->group_id); ?></td>

                        <td><a href="check_10.php?id=<?php echo $row->files_id; ?>"
                            title="Comfirm" onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                              class="fa fa-check" aria-hidden="true"></i> </a>



                      </tr>
                      <?php
                }
              }else{
              }
              ?>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </main>
              
              </div>
            </div>
          </div>
        </div>
      </section>

           
        <?php

include 'phpmailer/line_message.php';
?>

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
