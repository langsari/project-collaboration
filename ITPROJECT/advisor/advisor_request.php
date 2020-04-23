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

  <title>ITPROMOT| Form Request</title>

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
            <a href="index.php" class="nav-link ">

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

$query = "SELECT advisergroup.*,  files.files_status,files.status_advisor,files.by_advisor10,advisergroup.advisergroup_id,partnergroup.group_id,partnergroup.group_number,advisergroup.member_id,member.member_id,advisergroup.advisergroup_status,files.by_advisor06,files.by_advisor04,files.by_advisor07,files.by_advisor08,files.by_advisor11,files.by_advisor12 FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'
        AND   advisergroup.advisergroup_status='Waiting' or files.files_status = 'Waiting'  or files.status_advisor = 'Waiting' or  files.by_advisor04='Waiting' or files.by_advisor06 ='Waiting' or files.by_advisor07 ='Waiting'  or files.by_advisor08 ='Waiting' or files.by_advisor10 ='Waiting'
          or files.by_advisor11 ='Waiting' or files.by_advisor12 ='Waiting'
               ";
$query_num = mysqli_query($con,$query);
$count = mysqli_num_rows($query_num);

?>
         <li class="nav-item">
            <a href="advisor_request.php" class="nav-link ">
             <i class="nav-icon fa fa-paper-plane"></i>
              <p>
       Request
                    <span class="right badge badge-danger"><?php echo $count; ?></span>
             </p>
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
                <a href="proposal_status.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proposal Status</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="../advisor/student_track.php" class="nav-link">
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
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h6><b>ADVISOR AND TOPIC REQUEST (PF01)
 </h6></b>
              </div>
              <!-- /.card-header -->
      <div class="card-body">
              <table  class="table table-sm " >
                <thead class="thead-light">
                <tr>
              <th style="font-size: 15px;" width="2%" class="text-left">No</th>
                <th style="font-size: 15px;" width="40%" class="text-left">Title project</th>
                <th style="font-size: 15px;" width="40%" class="text-left">Student</th>
                 <th style="font-size: 15px;" width="3%" class="text-left">Status</th>
                <th style="font-size: 15px;" width="5%" class="text-left"></th>
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
$count = 1;

if ($rs = $db->query($sql)) {
    while ($row = $rs->fetch_object()) {
        ?>

<tr>
                         <td class="text-left" style="font-size: 13px;" width="4%">   <?php echo $count++; ?></td>

                <td class="text-left" style="font-size: 12px;" width="20%" ><?php echo $row->advisergroup_topic; ?></td>
                 <td class="text-left" style="font-size: 12px;" width="50%" ><?php echo get_member_list($row->group_id); ?></td>
                <td class="text-left" style="font-size: 12px;">
                  <h6> <?php echo status_01($row->advisergroup_status); ?></span>
                </td>


                <td width="5%">

                  <a href="check_approve.php?id=<?php echo $row->advisergroup_id; ?>"
                    class="badge badge-success" title="Comfirm"
                    onclick="return confirm_accept('<?php echo $row->group_number; ?>')"><i
                       class='fa fa-check'></i> </a>

                  <a href="reject_01.php?id=<?php echo $row->advisergroup_id; ?>"
                    class="badge badge-danger" title="Comfirm"
                    onclick="return confirm_accept('<?php echo $row->group_number; ?>')"><i
                     class='fa fa-times'></i> </a>

                </td>



              </tr>



              <?php
$i++;
    }
} else {
}
?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

<div class="col-md-6">
                 <div class="card card-primary card-outline">
              <div class="card-header">
                <h6><b>3 CHAPTER OF PROPOSAL REQUEST (PF01)
</b> </h6>
              </div>
              <!-- /.card-header -->
          <div class="card-body">
              <table  class="table table-sm">
                <thead class="thead-light">
                <tr>

                  <th style="font-size: 15px;" width="2%" class="text-left">No</th>
                <th style="font-size: 15px;" width="40%" class="text-left">Title project</th>
                <th style="font-size: 15px;" width="40%" class="text-left">Student</th>
                 <th style="font-size: 15px;" width="3%" class="text-left"></th>
                <th style="font-size: 15px;" width="3%" class="text-left"></th>



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
$count = 1;

if ($rs = $db->query($strSQL)) {
    while ($row = $rs->fetch_object()) {
        ?>
                <tr>

                    <td class="text-left" style="font-size: 13px;" width="4%">   <?php echo $count++; ?></td>

                <td class="text-left" style="font-size: 12px;" width="20%" ><?php echo $row->advisergroup_topic; ?></td>
                 <td class="text-left" style="font-size: 12px;" width="60%" ><?php echo get_member_list($row->group_id); ?></td>





                    <td class="text-left" style="font-size: 12px;" width="5%" >
<?php if ($row->files_filename_proposal != "") {?>

                      <a href="download.php?pdf=<?php echo $row->files_filename_proposal; ?>">
                      <span class='badge badge-success btn-xs'>Download
                           </a></span>
                       </a>
 <?php } else {?>
                    <a href="#"> <button class="btn btn-danger btn-xs">
                        <i class="glyphicon glyphicon-remove"> No file </i></button></a>
                    <?php }?>
                              </td>


                    <td><a href="check_topic.php?id=<?php echo $row->files_id; ?>"
                        class="btn btn-success btn-xs" title="Comfirm"
                        onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                           class='fa fa-check'></i> </a>

                 <a href="check_approve.php?id=<?php echo $row->advisergroup_id; ?>"
                    class="btn btn-danger btn-xs" title="Comfirm"
                    onclick="return confirm_accept('<?php echo $row->group_number; ?>')"><i
                    class='fa fa-times'></i> </a>

                  </tr>
                  <?php
$i++;

    }
} else {
}
?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

          <!-- PF01-->




      <div class="col-md-6">
                 <div class="card card-warning card-outline">
              <div class="card-header">
                <h6><b>PROPOSAL REVISION REQUEST (PF03)
</b> </h6>
              </div>
              <!-- /.card-header -->
           <div class="card-body">
              <table  class="table table-sm "  >
                <thead class="thead-light">
                <tr>





                     <th style="font-size: 15px;" width="2%" class="text-left">No</th>
                      <th style="font-size: 15px;" width="40%" class="text-left">Title project</th>
                    <th style="font-size: 15px;" width="40%" class="text-left">Student</th>
               <th style="font-size: 15px;" width="3%" class="text-left"></th>
                 <th style="font-size: 15px;" width="3%" class="text-left"></th>

           </tr>
          </thead>
    <tbody>

    <?php

require '../menu/connect.php';
$my_id = $_SESSION['id'];
$strSQL = "SELECT advisergroup.*, files.files_status,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic,files.status_advisor FROM advisergroup

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'  AND pf='2' And status_advisor='Waiting'
               ";

$i = 1;
$count = 1;

if ($rs = $db->query($strSQL)) {
    while ($row = $rs->fetch_object()) {
        ?>

                <tr>


                        <td class="text-left" style="font-size: 12px;" width="4%">   <?php echo $count++; ?></td>



                 <td class="text-left" style="font-size: 12px;" width="20%" ><?php echo $row->advisergroup_topic; ?></td>
                   <td class="text-left" style="font-size: 12px;" width="60%" ><?php echo get_member_list($row->group_id); ?></td>

                    <td class="text-left" style="font-size: 12px;" width="3%" >
<?php if ($row->files_filename_proposal != "") {?>
                      <a href="download.php?pdf=<?php echo $row->files_filename_proposal; ?>">
                      <span class='badge badge-success btn-xs'>Download
                           </a></span>
                       </a>
 <?php } else {?>
                    <a href="#"> <button class="btn btn-danger btn-xs">
                        <i class="glyphicon glyphicon-remove"> No file </i></button></a>
                    <?php }?>
                              </td>



                        <td>


<a href="check_proposal_revision.php?id=<?php echo $row->files_id; ?>"
                        class="btn btn-success btn-xs" title="Comfirm"
                        onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                           class='fa fa-check'></i> </a>


                                 <a href="reject_03.php?id=<?php echo $row->advisergroup_id; ?>"
                    class="btn btn-danger btn-xs" title="Comfirm"
                    onclick="return confirm_accept('<?php echo $row->group_number; ?>')"><i
                    class='fa fa-times'></i> </a>




                            </td>



                      </tr>
                      <?php
$i++;
    }
} else {
}
?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



            <!-- PF04-->

                       <div class="col-md-6">
                 <div class="card card-warning card-outline">
              <div class="card-header">
                <h6><b>PROJECT PROPOSAL APPROVAL LETTER (PF04)
</b> </h6>
              </div>
              <!-- /.card-header -->
            <div class="card-body">
              <table  class="table table-sm "  >
                <thead class="thead-light">
                <tr>

                       <th style="font-size: 15px;" width="2%" class="text-left">No</th>
                <th style="font-size: 15px;" width="40%" class="text-left">Title project</th>
                <th style="font-size: 15px;" width="40%" class="text-left">Student</th>
                 <th style="font-size: 15px;" width="5%" class="text-left"></th>





                </tr>
                                        </thead>
                                        <tbody>


                                        <?php

require '../menu/connect.php';
$my_id = $_SESSION['id'];
$strSQL = "SELECT advisergroup.*,  files.by_officer,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic,files.status_advisor FROM advisergroup

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'  AND pf='3' And by_advisor04='Waiting'  ";

$i = 1;
$count = 1;

if ($rs = $db->query($strSQL)) {
    while ($row = $rs->fetch_object()) {
        ?>
                  <tr>



            <td class="text-left" style="font-size: 12px;" width="4%">   <?php echo $count++; ?></td>
                 <td class="text-left" style="font-size: 12px;" width="40%" ><?php echo $row->advisergroup_topic; ?></td>
                   <td class="text-left" style="font-size: 12px;" width="40%" ><?php echo get_member_list($row->group_id); ?></td>



                <td class="text-left"  width="20%" >
<a href="check_proposal_approve.php?id=<?php echo $row->files_id; ?>"
                        class="btn btn-success btn-xs" title="Comfirm"
                        onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                           class='fa fa-check'></i> </a>


                                 <a href="reject_04.php?id=<?php echo $row->advisergroup_id; ?>"
                    class="btn btn-danger btn-xs" title="Comfirm"
                    onclick="return confirm_accept('<?php echo $row->group_number; ?>')"><i
                     class='fa fa-times'></i> </a>



                            </td>



                      </tr>
                      <?php
$i++;
    }
} else {
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
                 <div class="card card-info card-outline">
              <div class="card-header">
                <h6><b>CONSULTATION LOG BOOK (PF06)
</b> </h6>
              </div>
              <!-- /.card-header -->
           <div class="card-body">
              <table  class="table table-sm "  >
                <thead class="thead-light">
                <tr>

                      <th style="font-size: 15px;" width="2%" class="text-left">No</th>
                <th style="font-size: 15px;" width="40%" class="text-left">Title project</th>
                <th style="font-size: 15px;" width="40%" class="text-left">Student</th>
                 <th style="font-size: 15px;" width="5%" class="text-left"></th>



           </tr>
          </thead>
    <tbody>

    <?php

require '../menu/connect.php';
$my_id = $_SESSION['id'];
$strSQL = "SELECT advisergroup.*,  files.by_officer,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic,files.by_officer05 FROM advisergroup

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'  AND pf='5' And by_advisor06 ='Waiting'   ";

$i = 1;
$count = 1;

if ($rs = $db->query($strSQL)) {
    while ($row = $rs->fetch_object()) {
        ?>
                  <tr>


            <td class="text-left" style="font-size: 12px;" width="4%">   <?php echo $count++; ?></td>
                 <td class="text-left" style="font-size: 12px;" width="40%" ><?php echo $row->advisergroup_topic; ?></td>
                   <td class="text-left" style="font-size: 12px;" width="40%" ><?php echo get_member_list($row->group_id); ?></td>



                                        <td class="text-left"  width="20%" >

<a href="check_06.php?id=<?php echo $row->files_id; ?>"
                        class="btn btn-success btn-xs" title="Comfirm"
                        onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                           class='fa fa-check'></i> </a>


                                 <a href="reject_06.php?id=<?php echo $row->advisergroup_id; ?>"
                    class="btn btn-danger btn-xs" title="Comfirm"
                    onclick="return confirm_accept('<?php echo $row->group_number; ?>')"><i
                     class='fa fa-times'></i> </a>



                            </td>









                      </tr>
                      <?php
$i++;
    }
} else {
}
?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                      <!-- PF07-->
                       <div class="col-md-6">
                 <div class="card card-info card-outline">
              <div class="card-header">
                <h6><b>PROJECT SEMINAR (PF07)
</b> </h6>
              </div>
              <!-- /.card-header -->
           <div class="card-body">
              <table  class="table table-sm "  >
                <thead class="thead-light">
                <tr>

                      <th style="font-size: 15px;" width="2%" class="text-left">No</th>
                <th style="font-size: 15px;" width="40%" class="text-left">Title project</th>
                <th style="font-size: 15px;" width="40%" class="text-left">Student</th>
                 <th style="font-size: 15px;" width="5%" class="text-left"></th>
                </tr>
                                        </thead>
                                        <tbody>


                                        <?php

require '../menu/connect.php';
$my_id = $_SESSION['id'];
$strSQL = "SELECT advisergroup.*,  files.by_officer,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic,files.by_officer05 FROM advisergroup

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'  AND by_advisor07 ='Waiting'               ";

$i = 1;
$count = 1;

if ($rs = $db->query($strSQL)) {
    while ($row = $rs->fetch_object()) {
        ?>
                    <tr>

            <td class="text-left" style="font-size: 12px;" width="4%">   <?php echo $count++; ?></td>
                 <td class="text-left" style="font-size: 12px;" width="40%" ><?php echo $row->advisergroup_topic; ?></td>
                   <td class="text-left" style="font-size: 12px;" width="40%" ><?php echo get_member_list($row->group_id); ?></td>

                                      <td class="text-left"  width="20%" >

<a href="check_07.php?id=<?php echo $row->files_id; ?>"
                        class="btn btn-success btn-xs" title="Comfirm"
                        onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                           class='fa fa-check'></i> </a>


                                 <a href="reject_07.php?id=<?php echo $row->advisergroup_id; ?>"
                    class="btn btn-danger btn-xs" title="Comfirm"
                    onclick="return confirm_accept('<?php echo $row->group_number; ?>')"><i
                     class='fa fa-times'></i> </a>



                            </td>




                      </tr>
                      <?php
$i++;
    }
} else {
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
                 <div class="card card-danger card-outline">
              <div class="card-header">
                <h6><b>ADVISER PROJECT APPROVAL LETTER (PF08)
</b> </h6>
              </div>
              <!-- /.card-header -->
           <div class="card-body">
              <table  class="table table-sm "  >
                <thead class="thead-light">
                <tr>
                      <th style="font-size: 15px;" width="2%" class="text-left">No</th>
                      <th style="font-size: 15px;" width="40%" class="text-left">Title project</th>
                    <th style="font-size: 15px;" width="40%" class="text-left">Student</th>
               <th style="font-size: 15px;" width="3%" class="text-left"></th>
                 <th style="font-size: 15px;" width="3%" class="text-left"></th>
           </tr>
          </thead>
    <tbody>

    <?php

require '../menu/connect.php';
$my_id = $_SESSION['id'];
$strSQL = "SELECT advisergroup.*,  files.by_officer,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic,files.by_advisor07,files.files_filename_project,files.by_advisor08 FROM advisergroup

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'  AND pf='7 ' AND files.by_advisor08 ='Waiting'   ";

$i = 1;
$count = 1;

if ($rs = $db->query($strSQL)) {
    while ($row = $rs->fetch_object()) {
        ?>
                  <tr>
                        <td class="text-left" style="font-size: 12px;" width="4%">   <?php echo $count++; ?></td>



                 <td class="text-left" style="font-size: 12px;" width="20%" ><?php echo $row->advisergroup_topic; ?></td>
                   <td class="text-left" style="font-size: 12px;" width="60%" ><?php echo get_member_list($row->group_id); ?></td>

                    <td class="text-left" style="font-size: 12px;" width="3%" >
<?php if ($row->files_filename_project != "") {?>
                      <a href="download.php?pdf=<?php echo $row->files_filename_project; ?>">
                      <span class='badge badge-success btn-xs'>Download
                           </a></span>
                       </a>
 <?php } else {?>
                    <a href="#"> <button class="btn btn-danger btn-xs">
                        <i class="glyphicon glyphicon-remove"> No file </i></button></a>
                    <?php }?>
                              </td>



                               <td class="text-left"  width="10%" >


<a href="check_08.php?id=<?php echo $row->files_id; ?>"
                        class="btn btn-success btn-xs" title="Comfirm"
                        onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                           class='fa fa-check'></i> </a>


                                 <a href="reject_08.php?id=<?php echo $row->advisergroup_id; ?>"
                    class="btn btn-danger btn-xs" title="Comfirm"
                    onclick="return confirm_accept('<?php echo $row->group_number; ?>')"><i
                    class='fa fa-times'></i> </a>




                            </td>



                      </tr>
                      <?php
$i++;
    }
} else {
}
?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                      <div class="col-md-6">
                 <div class="card card-danger card-outline">
              <div class="card-header">
                <h6><b>PROJECT REVISION (PF10)
</b> </h6>
              </div>
              <!-- /.card-header -->
           <div class="card-body">
              <table  class="table table-sm "  >
                <thead class="thead-light">
                <tr>
                  <th style="font-size: 15px;" width="2%" class="text-left">No</th>
                      <th style="font-size: 15px;" width="40%" class="text-left">Title project</th>
                    <th style="font-size: 15px;" width="40%" class="text-left">Student</th>
               <th style="font-size: 15px;" width="3%" class="text-left"></th>
                 <th style="font-size: 15px;" width="3%" class="text-left"></th>
                </tr>
                                        </thead>
                                        <tbody>


                                        <?php

require '../menu/connect.php';
$my_id = $_SESSION['id'];
$strSQL = "SELECT advisergroup.*,  files.by_officer,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic,files.by_advisor07,files.files_filename_project FROM advisergroup

LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
LEFT JOIN member ON advisergroup.member_id = member.member_id
WHERE advisergroup.member_id = '$my_id'  AND pf='9' And by_advisor10 ='Waiting'  ";

$i = 1;
$count = 1;

if ($rs = $db->query($strSQL)) {
    while ($row = $rs->fetch_object()) {
        ?>
                    <tr>





                      <td class="text-left" style="font-size: 12px;" width="4%">   <?php echo $count++; ?></td>



                 <td class="text-left" style="font-size: 12px;" width="20%" ><?php echo $row->advisergroup_topic; ?></td>
                   <td class="text-left" style="font-size: 12px;" width="60%" ><?php echo get_member_list($row->group_id); ?></td>

                    <td class="text-left" style="font-size: 12px;" width="3%" >
<?php if ($row->files_filename_project != "") {?>
                      <a href="download.php?pdf=<?php echo $row->files_filename_project; ?>">
                      <span class='badge badge-success btn-xs'>Download
                           </a></span>
                       </a>
 <?php } else {?>
                    <a href="#"> <button class="btn btn-danger btn-xs">
                        <i class="glyphicon glyphicon-remove"> No file </i></button></a>
                    <?php }?>
                              </td>


                <td class="text-left"  width="10%" >



<a href="check_10.php?id=<?php echo $row->files_id; ?>"
                        class="btn btn-success btn-xs" title="Comfirm"
                        onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                           class='fa fa-check'></i> </a>


                                 <a href="reject_10.php?id=<?php echo $row->advisergroup_id; ?>"
                    class="btn btn-danger btn-xs" title="Comfirm"
                    onclick="return confirm_accept('<?php echo $row->group_number; ?>')"><i
                    class='fa fa-times'></i> </a>




                            </td>



                      </tr>
                      <?php
$i++;
    }
} else {
}
?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


          <!-- Select advisor -->
          <div class="col-md-6">
                 <div class="card card-success card-outline">
              <div class="card-header">
                <h6><b> Project Approval Letter (PF11)
</b> </h6>
              </div>
              <!-- /.card-header -->
           <div class="card-body">
              <table  class="table table-sm "  >
                <thead class="thead-light">
                <tr>
                      <th style="font-size: 15px;" width="2%" class="text-left">No</th>
                      <th style="font-size: 15px;" width="40%" class="text-left">Title project</th>
                    <th style="font-size: 15px;" width="40%" class="text-left">Student</th>
               <th style="font-size: 15px;" width="3%" class="text-left"></th>
                 <th style="font-size: 15px;" width="3%" class="text-left"></th>
           </tr>
          </thead>
    <tbody>

    <?php

require '../menu/connect.php';
$my_id = $_SESSION['id'];
$strSQL = "SELECT advisergroup.*,  files.by_officer,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic,files.by_advisor11,files.complete_project FROM advisergroup

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'  AND pf='10' And by_advisor11 ='Waiting'   ";

$i = 1;
$count = 1;

if ($rs = $db->query($strSQL)) {
    while ($row = $rs->fetch_object()) {
        ?>
                  <tr>
                        <td class="text-left" style="font-size: 12px;" width="4%">   <?php echo $count++; ?></td>



                 <td class="text-left" style="font-size: 12px;" width="20%" ><?php echo $row->advisergroup_topic; ?></td>
                   <td class="text-left" style="font-size: 12px;" width="60%" ><?php echo get_member_list($row->group_id); ?></td>

                    <td class="text-left" style="font-size: 12px;" width="3%" >
<?php if ($row->complete_project != "") {?>
                      <a href="download_pdf.php?pdf=<?php echo $row->complete_project; ?>">
                      <span class='badge badge-success btn-xs'>Download
                           </a></span>
                       </a>
 <?php } else {?>
                    <a href="#"> <button class="btn btn-danger btn-xs">
                        <i class="glyphicon glyphicon-remove"> No file </i></button></a>
                    <?php }?>
                              </td>



                                      <td class="text-left"  width="10%" >


<a href="check_11.php?id=<?php echo $row->files_id; ?>"
                        class="btn btn-success btn-xs" title="Comfirm"
                        onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                           class='fa fa-check'></i> </a>


                                 <a href="reject_11.php?id=<?php echo $row->advisergroup_id; ?>"
                    class="btn btn-danger btn-xs" title="Comfirm"
                    onclick="return confirm_accept('<?php echo $row->group_number; ?>')"><i
                    class='fa fa-times'></i> </a>




                            </td>



                      </tr>
                      <?php
$i++;
    }
} else {
}
?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



          <!-- Select advisor -->
          <div class="col-md-6">
                 <div class="card card-success card-outline">
              <div class="card-header">
                <h6><b>Free From Adviser LetterR (PF12)
</b> </h6>
              </div>
              <!-- /.card-header -->
           <div class="card-body">
              <table  class="table table-sm "  >
                <thead class="thead-light">
                <tr>
                      <th style="font-size: 15px;" width="2%" class="text-left">No</th>
                      <th style="font-size: 15px;" width="40%" class="text-left">Title project</th>
                    <th style="font-size: 15px;" width="40%" class="text-left">Student</th>
                 <th style="font-size: 15px;" width="3%" class="text-left"></th>
           </tr>
          </thead>
    <tbody>

    <?php

require '../menu/connect.php';
$my_id = $_SESSION['id'];
$strSQL = "SELECT advisergroup.*,  files.by_officer,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic,files.by_advisor07,files.files_filename_project FROM advisergroup

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'  AND pf='11' And  by_advisor12 ='Waiting'  ";

$i = 1;
$count = 1;

if ($rs = $db->query($strSQL)) {
    while ($row = $rs->fetch_object()) {
        ?>
                  <tr>
                        <td class="text-left" style="font-size: 12px;" width="4%">   <?php echo $count++; ?></td>



                 <td class="text-left" style="font-size: 12px;" width="20%" ><?php echo $row->advisergroup_topic; ?></td>
                   <td class="text-left" style="font-size: 12px;" width="60%" ><?php echo get_member_list($row->group_id); ?></td>




                <td class="text-left"  width="20%" >



<a href="check_12.php?id=<?php echo $row->files_id; ?>"
                        class="btn btn-success btn-xs" title="Comfirm"
                        onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                           class='fa fa-check'></i> </a>


                                 <a href="reject_12.php?id=<?php echo $row->advisergroup_id; ?>"
                    class="btn btn-danger btn-xs" title="Comfirm"
                    onclick="return confirm_accept('<?php echo $row->group_number; ?>')"><i
                    class='fa fa-times'></i> </a>




                            </td>



                      </tr>
                      <?php
$i++;
    }
} else {
}
?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>





        <?php

include 'phpmailer/line_message.php';
?>


     </div>
</div>
</div>

    <!-- /.content-wrapper -->
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <class style="font-size: 14px;">   <b>Version</b> 3.0.3-pre
      </div>
       <class style="font-size: 14px;">   <strong>Copyright &copy; 2019-2020 <a href="#">IT Project Monitoring and Tracking</a>.</strong> All rights reserved.


</div>


    <!-- /.control-sidebar -->

  <!-- ./wrapper -->

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
