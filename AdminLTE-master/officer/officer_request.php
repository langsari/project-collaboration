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
            <a href="officer_request.php" class="nav-link active ">
             <i class="nav-icon fa fa-paper-plane"></i>
              <p>
       Request              </p>
            </a>
          </li>
    
 
  <li class="nav-item">
                  <a href="../officer/student_track.php" class="nav-link">
             <i class="nav-icon fa fa-paper-plane"></i>
              <p>
       Student Track              </p>
            </a>
          </li>
    

 
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Schedule
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="create_schedule_proposal.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Schedule Proposal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="create_schedule_project.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Schedule Project</p>
                </a>
              </li>
              
            </ul>
          </li>




    

  <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                News
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Annoucement.php" class="nav-link ">
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
                <a href="proposal_project.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Project Topics</p>
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

      


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
  
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
     
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Request
</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <!-- Main content -->
    <section class="content">
   
        
          <div class="card">
            <div class="card-header">
   <b>        
PROPOSAL PROJECT AND PF01 REQUEST (PF01)
</b>
                 
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>Title project</th>
                <th>Student</th>
                <th>Files</th>
                <th>Options</th>
                </tr>
                </thead>
                <tbody>
                       
 <?php

require '../menu/connect.php';
$my_id = $_SESSION['id'];

    $strSQL = "SELECT advisergroup.*,  files.files_status,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic ,files.by_officer FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id

        WHERE advisergroup.member_id  AND files.by_officer = '' 
        Order By files_id
               ";
$i = 1;
              if($rs = $db->query($strSQL)){
                while($row = $rs->fetch_object()){
              ?>

                
                    <tr>

                <td><?php echo get_member_list($row->group_id); ?></td>
                <td><?php echo $row->advisergroup_topic; ?></td>


              <td>
<?php if( $row->files_filename_proposal != ""){ ?>
                      <a href="download.php?pdf=<?php echo $row->files_filename_proposal ;?>">
                      <span class='badge badge-primary'><i class="fa fa-download">Download 
                           </i></a></span>
                       </a>
 <?php }else{?>
                    <a href="#"> <button class="btn btn-danger btn-xs">
                        <i class="glyphicon glyphicon-remove"> No file </i></button></a>
                    <?php } ?>
                              </td>

                <td><a href="check_approved.php?id=<?php echo $row->files_id; ?>" class="btn btn-success btn-xs"
                    title="Comfirm" onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                      class='glyphicon glyphicon-ok'></i> Approve</a></td>
               
                    </tr>          


                                    <?php
    }
               }
                   ?>


                </tbody>
               

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
     



<!-- Main content -->
   
        
          <div class="card">
            <div class="card-header">
           <b>
COMPLETE PROJECT PROPOSAL (PF06)</b>
                 
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                        <th>Title project</th>
                        <th>Student</th>
                        <th>Status</th>


                </tr>
                </thead>
                <tbody>
                       
       <?php




require '../menu/connect.php';
$my_id = $_SESSION['id'];

    $strSQL = "SELECT advisergroup.*,  files.files_status,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic ,files.status_advisor,files.by_officer05 FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id

        WHERE advisergroup.member_id  AND files.status_advisor = 'Pass' AND by_officer05=''
        Order By files_id
               ";

$i = 1;
       
              if($rs = $db->query($strSQL)){
                while($row = $rs->fetch_object()){
              ?>


                
                    <tr>

                        <td><?php echo $row->advisergroup_topic; ?></td>
                        <td><?php echo get_member_list($row->group_id); ?></td>

                        <td><a href="check_pf05.php?id=<?php echo $row->files_id; ?>"
                            title="Comfirm" onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                              class="fa fa-check" aria-hidden="true"></i> </a>
</td>

               
                    </tr>          


                                    <?php
    }
               }
                   ?>


                </tbody>
               

              </table>
            </div>
            <!-- /.card-body -->
          </div>



 <div class="card">
            <div class="card-header">
   <b>        
OFFICER RECEIVE COPY OF 5 CHAPTERS PROJECT (PF09)
</b>
                 
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                        <th>Title project</th>
                        <th>Student</th>
                        <th>Status</th>

                </tr>
                </thead>
                <tbody>
                       

                      <?php




require '../menu/connect.php';
$my_id = $_SESSION['id'];

    $strSQL = "SELECT advisergroup.*,  files.files_status,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic ,files.by_advisor08,files.by_officer05 FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id

        WHERE advisergroup.member_id  AND pf='8' And by_advisor08 ='Pass' 
        Order By files_id
               ";


$i = 1;
              if($rs = $db->query($strSQL)){
                while($row = $rs->fetch_object()){
              ?>

                
                    <tr>

                        <td><?php echo $row->advisergroup_topic; ?></td>
                        <td><?php echo get_member_list($row->group_id); ?></td>

                        <td><a href="check_pf09.php?id=<?php echo $row->files_id; ?>"
                            title="Comfirm" onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                              class="fa fa-check" aria-hidden="true"></i> </a>

</td>

                    </tr>          


                                    <?php
    }
               }
                   ?>


                </tbody>
               

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
     

          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->






<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
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
