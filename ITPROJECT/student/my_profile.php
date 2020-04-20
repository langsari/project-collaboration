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
        <span class="right badge fa fa-circle" value="<?php echo $row->advisergroup_id; ?>"> </span>
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
                  <p>Topic Require</p>
                </a>
              </li>

            </ul>
          </li>

  <li class="nav-item">
            <a href="my_profile.php" class="nav-link active">
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
              <li class="breadcrumb-item active">Personal Information</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->
     <?php

$strSQL = "SELECT * FROM member  WHERE member_id='" . $_SESSION['id'] . "'";

?>
        <?php
if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {
        ?>



  <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            <form  class="p-5 bg-white" enctype="multipart/form-data" method="post"
             action="check_editprofile.php" >


              <center>

                <h2> About me

              </h2>
              </center></br>
              <hr>
              <p>
                <h5>1. Profile</h5>
              </p>

              <!-- <a href="booking.php" style="color:red">ค้นหาที่ฝึกงาน</a> -->


 <div class="row form-group">
                <div class="col-md-4 mb-4 mb-md-0">
        <label class="text-black" for="fname">Name prefix</label>
    <input type="text" id="member_name_prefix" name="member_name_prefix" class="form-control" value="<?php echo $objResult->member_name_prefix; ?>">

                </div>
                <div class="col-md-4">
                  <label class="text-black" for="name">Firstname</label>
      <input type="text" class="form-control" name="member_firstname" id="member_firstname"  value="<?php echo $objResult->member_firstname; ?>" >                </div>

                <div class="col-md-4">
                  <label class="text-black" for="lastname">Lastname</label>
      <input type="text" class="form-control" name="member_lastname" id="member_lastname"  value="<?php echo $objResult->member_lastname; ?>" >                </div>
              </div>



              <div class="row form-group">
                <div class="col-md-4 mb-4 mb-md-0">
                  <label class="text-black" for="fname">ID Card Student</label>
                     <input type="text" class="form-control" name="member_idcard" id="member_idcard"  value="<?php echo $objResult->member_idcard; ?>" >
                </div>



                <!-- <div class="col-md-6">
                  <label class="text-black" for="lname">ประเภทงาน</label>
                  <input type="text" id="lname" class="form-control" required autofocus>
                </div> -->
                <div class="col-md-4">
                  <label class="text-black" >Faculty</label>
                       <input type="text" class="form-control" name="member_faculty" id="member_faculty"  value="<?php echo $objResult->member_faculty; ?>" >

                </div>

       <div class="col-md-4">
                  <label class="text-black" >Department</label>
              <input type="text" class="form-control" name="member_major" id="member_major"  value="<?php echo $objResult->member_major; ?>" >

                </div>


              </div>

             <div class="row form-group">
                <div class="col-md-4 mb-4 mb-md-0">
                  <label class="text-black" for="fname">Yearst</label>
                     <input type="text" class="form-control" name="member_years" id="member_years"  value="<?php echo $objResult->member_years; ?>" >
                </div>



                <!-- <div class="col-md-6">
                  <label class="text-black" for="lname">ประเภทงาน</label>
                  <input type="text" id="lname" class="form-control" required autofocus>
                </div> -->
                <div class="col-md-4">
                  <label class="text-black" >Birthday</label>
                       <input type="text" class="form-control" name="member_birthday" id="member_birthday"  value="<?php echo $objResult->member_birthday; ?>" >

                </div>

       <div class="col-md-4">
                  <label class="text-black" >Gender</label>


                <select class="form-control" name="member_gender" id="member_gender" onChange="getTeam(this.value);"  >
<option  value="<?php echo $objResult->member_gender; ?>"><?php echo $objResult->member_gender; ?> </option>
                                     <option value="Male">Male</option>
             <option value="Female">Female</option>


                                        </select>

                </div>

    </div>

             <div class="row form-group">
                <div class="col-md-4 mb-4 mb-md-0">
                  <label class="text-black" >Position</label>


                           <select class="form-control" name="member_pos" id="member_pos" onChange="getTeam(this.value);"  >
<option  value="<?php echo $objResult->member_pos; ?>"><?php echo $objResult->member_pos; ?> </option>

             <option value="Lecturer">Lecturer</option>
             <option value="Student">Student</option>
             <option value="Officer">Officer</option>

                                        </select>

                </div>


  <div class="col-md-8">
                  <label class="text-black" >Password</label>
              <input type="text" class="form-control" name="member_password" id="member_password"  value="<?php echo $objResult->member_password; ?>" >

                </div>




              </div>






              <br>
              <p>
                <h5>2. Contact</h5>
              </p>
              <hr>


              <div class="row form-group">
                <div class="col-md-6 mb-4 mb-md-0">
                  <label class="text-black" >Tel</label>

                  <input type="text" class="form-control" name="member_phone" id="member_phone"  value="<?php echo $objResult->member_phone; ?>" >
                </div>

                <div class="col-md-6">
                  <label class="text-black" >Email</label>
                 <input type="text" class="form-control" name="member_email" id="member_email"  value="<?php echo $objResult->member_email; ?>" >

                </div>

              </div>

              <div class="col-md-12">
                  <label class="text-black" >Address</label>
              <input type="text" class="form-control" name="member_address" id="member_address"  value="<?php echo $objResult->member_address; ?>" >

                </div>





                                     <input type="hidden" name="member_id" value="<?php echo $objResult->member_id; ?>"/>
                                     <br>

<center>
     <button type="submit" class="btn btn-success"><i     class="glyphicon glyphicon-ok"></i>
                                                                        Edit</button>


            </form>
          </div>
                    <?php
}
}
?>

    </div>


</div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

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
