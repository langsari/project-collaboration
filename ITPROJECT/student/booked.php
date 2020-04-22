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

  <title>ITPROMOT</title>

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

            <li class="nav-item">
              <a href="infor_group.php" class="nav-link">
                <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                <p> Group Information </p>
                <?php

$my_id = $_SESSION['id'];
$my_group_id = get_group_id($my_id);

//Initialise Value to variable

$sql = "SELECT advisergroup.advisergroup_id, advisergroup.advisergroup_status,advisergroup.advisergroup_topic,advisergroup.group_id,member.member_id,member.member_fullname FROM advisergroup
         JOIN member ON advisergroup.member_id = member.member_id
   WHERE advisergroup.group_id = '$my_group_id' and  advisergroup.advisergroup_status='Approve'";
if ($rs = $db->query($sql)) {
    while ($row = $rs->fetch_object()) {
        ?>
        <span class="right badge fa fa-bell text-danger" value="<?php echo $row->advisergroup_id; ?>"> </span>
                <?php
}
}
?>
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
                  <a href="../forms/check_pf.php" class="nav-link">
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
                    <p>Proposal Schedul </p>
                    <?php
$strSQL = "SELECT schedule_id FROM schedule WHERE schedule_type ='1' ";
if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {
        ?>
                    <span class="right badge badge-danger" value="<?php echo $objResult->schedule_id; ?>"> New</span>
                    <?php
}
}
?>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="display_schedule_project.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Project Schedule</p>
                    <?php

$strSQL = "SELECT schedule_id FROM schedule WHERE schedule_type ='2' ";
if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {
        ?>
                    <span class="right badge badge-danger" value="<?php echo $objResult->schedule_id; ?>"> New</span>
                    <?php
}
}
?>
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
                  <p>Propose Topic</p>
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

</main>       </tbody>
          </table>
                                </div>
                            </div>

    <!-- /.content -->

<!-- ./wrapper -->
         </div><!-- /.card-body -->
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->


     </div>





    <!-- /.content-wrapper -->
   <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.3-pre
      </div>
      <class style="font-size: 14px;">  <strong>Copyright © 2019-2020 <a href="#">IT PROJECT</a>.</strong> All rights reserved.
    </footer>


    <!-- /.control-sidebar -->
  </div>
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
