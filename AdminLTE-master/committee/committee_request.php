<?php
session_start();
require '../menu/connect.php';
include '../menu/function.php';

?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>ITPROMOT|Committee Management</title>

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


  <?php
$con = mysqli_connect('localhost', 'root', '', 'itpromo_track');
$query = "SELECT * FROM notify WHERE status=0";
$query_num = mysqli_query($con, $query);
$count = mysqli_num_rows($query_num);

?>

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
            <a href="../advisor/index.php" class="nav-link ">

              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashbord
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

    <?php
$my_id = $_SESSION['id'];
$con = mysqli_connect('localhost', 'root', '', 'itpromo_track');
$query = "SELECT advisergroup.*,  files.files_status,files.status_advisor,files.by_advisor10,advisergroup.advisergroup_id,partnergroup.group_id,partnergroup.group_number,advisergroup.member_id,member.member_id,advisergroup.advisergroup_status,files.by_advisor06 FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'
        AND   advisergroup.advisergroup_status='Waiting' or files.files_status = 'Waiting'  or files.status_advisor = 'Waiting' or  files.by_advisor04='Waiting' or files.by_advisor06 ='Waiting' or by_advisor07 ='Waiting'  or files.by_advisor08 ='Waiting' or files.by_advisor10 ='Waiting'
          or files.by_advisor11 ='Waiting' or files. by_advisor12 ='Waiting'
               ";
$query_num = mysqli_query($con, $query);
$count = mysqli_num_rows($query_num);

?>
         <li class="nav-item">
            <a href="../advisor/advisor_request.php" class="nav-link ">
             <i class="nav-icon fa fa-paper-plane"></i>
              <p>
       Request
                    <span class="right badge badge-danger"><?php echo $count; ?></span>
             </p>
            </a>
          </li>



          <li class="nav-item has-treeview  menu-open">
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
       <a href="../view track/student_track.php" class="nav-link" >
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

            </ul>
          </li>


          <li class="nav-item has-treeview  menu-open">
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




  <li class="nav-item has-treeview  menu-open">
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


          <div class="card card-primary card-outline">
            <div class="card-header">

     <h6><b>PROPOSAL REVISION REQUEST (PF03)
</b> </h6>

            </div>
            <!-- /.card-header -->

               <div class="card-body">
              <table  id="example1" class="table table-sm">
                <thead class="thead-light">
                <tr>

                   <th style="font-size: 15px;" width="5%" class="text-left">No</th>
                <th style="font-size: 15px;" width="20%" class="text-left"> Title project</th>
                <th style="font-size: 15px;" width="20%" class="text-left">Student</th>
                <th style="font-size: 15px;" width="10%" class="text-left">Advisor</th>
                <th style="font-size: 15px;" width="10%" class="text-left">Files</th>
                <th style="font-size: 15px;" width="10%" class="text-left">Status</th>
                <th style="font-size: 15px;" width="10%" class="text-left">View</th>
                <th style="font-size: 15px;" width="10%" class="text-left">Options</th>
                </tr>
                </thead>
                <tbody>

            <?php
require '../menu/connect.php';
$my_id = $_SESSION['id'];

$strSQL = "SELECT committeegroup.*, schedule.schedule_type,advisergroup.group_id,partnergroup.group_number,partnergroup.group_id,advisergroup.member_id,committeegroup.member_id,committeegroup.group_id,schedule.schedule_status,schedule.schedule_id,schedule.schedule_type,files.advisergroup_id,committeegroup.status_presentation,files.files_filename_proposal
      FROM committeegroup
        LEFT JOIN advisergroup ON committeegroup.member_id = advisergroup.member_id
        LEFT JOIN member ON committeegroup.member_id = member.member_id
       LEFT JOIN partnergroup ON committeegroup.group_id = partnergroup.group_id
          LEFT JOIN files ON committeegroup.committeegroup_id = files.files_id
      LEFT JOIN schedule ON committeegroup.group_id = schedule.group_id

    WHERE committeegroup.member_id  ='$my_id' AND schedule_type='1' ";

$i = 1;
$count = 1;

if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {
        ?>



                    <tr>

            <td class="text-left" style="font-size: 14px;" width="5%" >  <?php echo $count++; ?></td>
       <td class="text-left" style="font-size: 14px;" width="25%" ><?php echo get_topic($objResult->group_id); ?></td>
     <td class="text-left" style="font-size: 14px;" width="25%" ><?php echo get_member_list($objResult->group_id); ?></td>



              <td class="text-left" style="font-size: 14px;" width="20%" ><?php echo get_advisor($objResult->group_id); ?></td>

             <td class="text-left" style="font-size: 14px;" width="5%" >
<?php if ($objResult->files_filename_proposal != "") {?>
                      <a href="../advisor/download.php?pdf=<?php echo $objResult->files_filename_proposal; ?>">
                      <span class='badge badge-primary'><i class="fa fa-download">Download
                           </i></a></span>
                       </a>
 <?php } else {?>
                    <a href="#"> <button class="btn btn-danger btn-xs">
                        <i class="glyphicon glyphicon-remove"> No file </i></button></a>
                    <?php }?>
                              </td>

                <td class="text-left"><?php echo $objResult->schedule_status; ?></td>






          <td class="text-left" style="font-size: 14px;" width="5%" >

  <a href="form03.php?id=<?php echo $objResult->group_id; ?>"class="btn btn-primary btn-sm">  <i class="fa fa-eye" title="Detail"></i></a>



                </td>


<td>




 <?php if ($objResult->status_presentation != "Pass") {?>
    <a href="check_pass03.php?id=<?php echo $objResult->group_id; ?>"  >

            <button type="button" class="btn btn-success btn-xs  float-left" >
              <i class='fa fa-check'></i></button>
          <?php } else {?>

            <button class="btn btn-warning btn-xs disabled float-left" disabled="disabled">      <i class='fa fa-check'></i></button>

          </a>
                       <?php }?>


<a href="reject03.php?id=<?php echo $objResult->group_id; ?>"
                    class="btn btn-danger btn-xs float-right" title="Comfirm"><i
                      class='fa fa-times'></i> </a>

</td>

                    </tr>


                                    <?php
$i++;

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


          <div class="card card-warning card-outline">
            <div class="card-header">
                <h6><b>PROJECT REVISION (PF10)
</b> </h6>


            </div>
            <!-- /.card-header -->

                      <div class="card-body">
              <table  id="example2" class="table table-sm">
                <thead class="thead-light">
                <tr>
                   <th style="font-size: 15px;" width="5%" class="text-left">No</th>
                <th style="font-size: 15px;" width="20%" class="text-left"> Title project</th>
                  <th style="font-size: 15px;" width="20%" class="text-left">Student</th>
                 <th style="font-size: 15px;" width="10%" class="text-left">Advisor</th>
                 <th style="font-size: 15px;" width="10%" class="text-left">Files</th>
                    <th style="font-size: 15px;" width="10%" class="text-left">Status</th>
                    <th style="font-size: 15px;" width="10%" class="text-left">View</th>
                <th style="font-size: 15px;" width="10%" class="text-left">Options</th>


                </tr>
                </thead>
                <tbody>

            <?php
require '../menu/connect.php';
$my_id = $_SESSION['id'];

$strSQL = "SELECT committeegroup.*, schedule.schedule_type,advisergroup.group_id,partnergroup.group_number,partnergroup.group_id,advisergroup.member_id,committeegroup.member_id,committeegroup.group_id,schedule.schedule_status,schedule.schedule_id,schedule.schedule_type,files.advisergroup_id,committeegroup.status_project,committeegroup.group_id,files.files_filename_project
      FROM committeegroup
        LEFT JOIN advisergroup ON committeegroup.member_id = advisergroup.member_id
        LEFT JOIN member ON committeegroup.member_id = member.member_id
       LEFT JOIN partnergroup ON committeegroup.group_id = partnergroup.group_id
          LEFT JOIN files ON committeegroup.committeegroup_id = files.files_id
      LEFT JOIN schedule ON committeegroup.group_id = schedule.group_id

    WHERE committeegroup.member_id  ='$my_id'   and schedule.schedule_type='2'  ";

$i = 1;
$count = 1;

if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {
        ?>


                         <td class="text-left" style="font-size: 14px;" width="5%" >  <?php echo $count++; ?></td>
       <td class="text-left" style="font-size: 14px;" width="25%" ><?php echo get_topic($objResult->group_id); ?></td>
     <td class="text-left" style="font-size: 14px;" width="25%" ><?php echo get_member_list($objResult->group_id); ?></td>



              <td class="text-left" style="font-size: 14px;" width="20%" ><?php echo get_advisor($objResult->group_id); ?></td>
     <td class="text-left" style="font-size: 14px;" width="5%" >
<?php if ($objResult->files_filename_project != "") {?>
                      <a href="../form01/download.php?pdf=<?php echo $objResult->files_filename_project; ?>">
                      <span class='badge badge-primary'><i class="fa fa-download">Download
                           </i></a></span>
                       </a>
 <?php } else {?>
                    <a href="#"> <button class="btn btn-danger btn-xs">
                        <i class="glyphicon glyphicon-remove"> No file </i></button></a>
                    <?php }?>
                              </td>

                <td class="text-left"><?php echo $objResult->schedule_status; ?></td>



                <td>

  <a href="form10.php?id=<?php echo $objResult->group_id; ?>"class="btn btn-primary btn-sm">  <i class="fa fa-eye" title="Detail"></i></a>



                </td>
<td>



 <?php if ($objResult->status_project != "Pass") {?>
    <a href="check_pass10.php?id=<?php echo $objResult->group_id; ?>"  >

            <button type="button" class="btn btn-success btn-xs  float-left" >
              <i class='fa fa-check'></i></button>
          <?php } else {?>

            <button class="btn btn-warning btn-xs disabled float-left" disabled="disabled">      <i class='fa fa-check'></i></button>

          </a>
                       <?php }?>

&nbsp;&nbsp;






<a href="reject10.php?id=<?php echo $objResult->group_id; ?>"
                    class="btn btn-danger btn-xs float-right" title="Comfirm"><i
                      class='fa fa-times'></i> </a>

</td>

                    </tr>


                                    <?php
$i++;

    }
}
?>




                </tbody>


              </table>



</div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php

include 'phpmailer/line_message.php';
?>


  <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <class style="font-size: 14px;">  <b>Version</b> 3.0.3-pre
      </div>
      <class style="font-size: 14px;">   <strong>Copyright© 2019-2020  <a href="#">IT Project Monitoring and Tracking</a>.</strong> All rights reserved.
    </footer>


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
    $("#example2").DataTable();

  });
</script>
</body>
</html>
