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
    <a href="../advisor/index.php" class="brand-link">
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
            <a href="../advisor/index.php" class="nav-link ">
             
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashbord
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

         <li class="nav-item">
            <a href="../advisor/advisor_request.php" class="nav-link ">
             <i class="nav-icon fa fa-paper-plane"></i>
              <p>
       Request              </p>
            </a>
          </li>
    
 
  
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Projects
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../advisor/proposal_status.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proposal Status</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../advisor/student_Track.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Track</p>
                </a>
              </li>
         
              <li class="nav-item">
                <a href="../advisor/proposal_project.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Project Topics</p>
                </a>
              </li>
                       <li class="nav-item">
                <a href="../advisor/manage_mark.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Mark</p>
                </a>
              </li>

                       <li class="nav-item">
                <a href="../advisor/give_mark.php" class="nav-link">
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
                <a href="../advisor/display_schedule_proposal.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proposal Schedule</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../advisor/display_schedule_project.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Schedule</p>
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
                <a href="../advisor/Annoucement.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Annoucements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../advisor/add_general_topic.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Topic Require</p>
                </a>
              </li>
              
            </ul>
          </li>

  <li class="nav-item">
            <a href="../committee/committee_request.php" class="nav-link active">
         <i class="nav-icon fa fa-tasks"></i> 
              <p>
                For Committee
              </p>
            </a>
          </li>

  <li class="nav-item">
            <a href="../advisor/my_profile.php" class="nav-link">
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
              <li class="breadcrumb-item active">For Committee
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
           

                 
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>Group Code</th>
                <th>Owner Project</th>
                <th>Title</th>
                <th>Advisor</th>
                <th>Committee</th>
                <th>Status</th>
                <th>Options</th>
                </tr>
                </thead>
                <tbody>
                       
            <?php
require '../menu/connect.php';
$my_id = $_SESSION['id'];

      $strSQL = "SELECT committeegroup.*, schedule.schedule_type,advisergroup.group_id,partnergroup.group_number,partnergroup.group_id,advisergroup.member_id,committeegroup.member_id,committeegroup.group_id,schedule.schedule_status,schedule.schedule_id,schedule.schedule_type,files.advisergroup_id,committeegroup.status_presentation,committeegroup.group_id
      FROM committeegroup
        LEFT JOIN advisergroup ON committeegroup.member_id = advisergroup.member_id
        LEFT JOIN member ON committeegroup.member_id = member.member_id
       LEFT JOIN partnergroup ON committeegroup.group_id = partnergroup.group_id
          LEFT JOIN files ON committeegroup.committeegroup_id = files.files_id
      LEFT JOIN schedule ON committeegroup.group_id = schedule.group_id

    WHERE committeegroup.member_id  ='$my_id'   and schedule.schedule_type='1' and status_presentation= '' ";

               ?>

              <?php
     if($result = $db->query($strSQL)){
             while($objResult = $result->fetch_object()){
            ?>


                
                    <tr>
                    <td class="text-left"><?php echo $objResult->group_number; ?></td>
                <td class="text-left"><?php echo get_member_list($objResult->group_id); ?></td>
                <td class="text-left"><?php echo get_topic($objResult->group_id); ?></td>
                <td class="text-left"><?php echo get_advisor($objResult->group_id); ?></td>
                <td class="text-left"><?php echo get_committee($objResult->group_id); ?></td>

                <td class="text-left"><?php echo $objResult->schedule_status; ?></td>



            


                <td><a href="?page=status_presentation&id=<?php echo $objResult->group_id;?>"><i class="fa fa-edit"
                      title="View"></i></a>

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
     



<!-- Main content -->
   
        
          <div class="card">
            <div class="card-header">
           

                 
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
              <th>Group Code</th>
                <th>Owner Project</th>
                <th>Title</th>
                <th>Advisor</th>
                <th>Committee</th>
                <th>Status</th>
                <th>Options</th>

                </tr>
                </thead>
                <tbody>
                       
            <?php
require '../menu/connect.php';
$my_id = $_SESSION['id'];

      $strSQL = "SELECT committeegroup.*, schedule.schedule_type,advisergroup.group_id,partnergroup.group_number,partnergroup.group_id,advisergroup.member_id,committeegroup.member_id,committeegroup.group_id,schedule.schedule_status,schedule.schedule_id,schedule.schedule_type,files.advisergroup_id,committeegroup.status_project,committeegroup.group_id
      FROM committeegroup
        LEFT JOIN advisergroup ON committeegroup.member_id = advisergroup.member_id
        LEFT JOIN member ON committeegroup.member_id = member.member_id
       LEFT JOIN partnergroup ON committeegroup.group_id = partnergroup.group_id
          LEFT JOIN files ON committeegroup.committeegroup_id = files.files_id
      LEFT JOIN schedule ON committeegroup.group_id = schedule.group_id

    WHERE committeegroup.member_id  ='$my_id'   and schedule.schedule_type='2' and status_project= ''  ";

               ?>


               <?php
     if($result = $db->query($strSQL)){
             while($objResult = $result->fetch_object()){
            ?>



                
                    <tr>
                    <td class="text-left"><?php echo $objResult->group_number; ?></td>
                <td class="text-left"><?php echo get_member_list($objResult->group_id); ?></td>
                <td class="text-left"><?php echo get_topic($objResult->group_id); ?></td>
                <td class="text-left"><?php echo get_advisor($objResult->group_id); ?></td>
                <td class="text-left"><?php echo get_committee($objResult->group_id); ?></td>

                <td class="text-left"><?php echo $objResult->schedule_status; ?></td>



              

                <td><a href="?page=status_project&id=<?php echo $objResult->group_id;?>"><i class="fa fa-edit"
                      title="View"></i></a>

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
