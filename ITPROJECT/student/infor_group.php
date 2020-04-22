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
<meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
              <a href="infor_group.php" class="nav-link active">
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
                  <p>Propose Topic </p>
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
              <li class="breadcrumb-item active"> Group Information</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
                 <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Profile </h3>
              </div>
              <!-- /.card-header -->
          <div class="card-body">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                   <th style="font-size: 15px;" width="30%" class="text-left">Student ID</th>
                     <th style="font-size: 15px;" width="30%" class="text-left">Full Name</th>
                     <th style="font-size: 15px;" width="30%" class="text-left">Phone</th>
                    </tr>
                  </thead>

                       <?php

$sql = "SELECT member_fullname, member_phone, member_idcard FROM member WHERE member_id='" . $_SESSION['id'] . "'";
if ($result = $db->query($sql)) {
    while ($objResult = $result->fetch_object()) {
        ?>

                  <tbody>
                    <tr>
                    <td class="text-left" style="font-size: 15px;" width="20%">  <?php echo $objResult->member_idcard; ?></td>
                    <td class="text-left" style="font-size: 15px;" width="20%">  <?php echo $objResult->member_fullname; ?></td>
                    <td class="text-left" style="font-size: 15px;" width="20%">  <?php echo $objResult->member_phone; ?></td>
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






          <!-- Modal -->
<div class="modal fade" id="create_group" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i>Create Group</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">

                    <form class="form" method="post" action="check_newgroup.php">
  <button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#joinpartner" style="margin-bottom: 13px;">
   <i class="glyphicon glyphicon-plus"></i>Join Partner
  </button>
  <p>
                    <label>Create Group</label>
                    <input class="form-control" type="text" name="group_number" id="group_number" placeholder="Group Code">
                </div>
                   <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
                  <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Save</button>
                </div>
                </form>
              </div>
            </div>
          </div>


  <!-- Star Partner -->
<div class="modal fade" id="joinpartner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i>Join partner group</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">

       <form id="add" name="add" method ="post" action ="check_join.php" onsubmit="return checkForm()" >



       <table class="table table-hover text-nowrap">
              <thead>
                <tr>
             <th style="font-size: 15px;" width="3%" class="text-left">No</th>

                <th style="font-size: 15px;" width="10%" class="text-left">Group</th>
                   <th style="font-size: 15px;" width="40%" class="text-left">Group Member</th>
                  <th style="font-size: 15px;" width="20%" class="text-left"></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
              <?php
// require 'menu/function.php';
$sql = "SELECT * FROM partnergroup";
$i = 1;
$count = 1;
if ($rs = $db->query($sql)) {
    while ($row = $rs->fetch_object()) {
        ?>

           <tr>
                    <td class="text-left" style="font-size: 13px;" width="4%">   <?php echo $count++; ?></td>
                   <td class="text-left" style="font-size: 13px;" width="10%"> <?php echo $row->group_number; ?></td>
                   <td class="text-left" style="font-size: 13px;" width="50%"> <?php echo get_member_list($row->group_id); ?></td>
                  <td class="text-center">
                    <a href="check_group.php?id=<?php echo $row->group_id; ?>" class="btn btn-primary btn-xs" onclick="return confirm_joingroup()"><i class="glyphicon glyphicon-plus-sign"></i> Join this Group</a>
                  </td>
                </tr>
              <?php
}
} else {
}
?>
</a>
</td>
</tr>
</tbody>
                                    </table>
                                    </form>

</div>
</div>
</div>
</div>

  <!-- END FORM Partner -->




 <div class="col-md-6">
                 <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Select Partner and topic </h3>
              </div>
              <!-- /.card-header -->
          <div class="card-body">


  <!-- Display Partner -->
     <button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#create_group" style="margin-bottom: 13px;">
   <i class="glyphicon glyphicon-plus"></i>Add Group
  </button>


   <table class="table table-hover text-nowrap">                  <thead>

                                         My Group partner
                                           <tr>
                   <th style="font-size: 15px;" width="15%" class="text-left">Student ID</th>
                   <th style="font-size: 15px;" width="30%" class="text-left">Full Name</th>
                    <th style="font-size: 15px;" width="10%" class="text-left">Phone</th>
                </tr>
                                        </thead>
                                        <tbody>


                                          <?php

$group_id = get_group_id($_SESSION['id']);

$sql = "SELECT member_fullname, member_phone, member_idcard FROM member WHERE group_id = '$group_id'";

if ($rs = $db->query($sql)) {
    while ($row = $rs->fetch_object()) {
        ?>
                <tr>
                <td class="text-left" style="font-size: 15px;" width="15%"> <?php echo $row->member_idcard; ?></td>
                <td class="text-left" style="font-size: 15px;" width="30%"> <?php echo $row->member_fullname; ?></td>
                  <td class="text-left" style="font-size: 15px;" width="10%"> <?php echo $row->member_phone; ?></td>
                </tr>
              <?php
}
} else {
}
?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>

          <!-- END Partner-->



       <div class="row">
          <div class="col-md-6">
                <div class="card card-warning card-outline">
              <div class="card-header">
                <h3 class="card-title">Select advisor
 </h3>
              </div>
              <!-- /.card-header -->
          <div class="card-body">
              <button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#selectadvisor" style="margin-bottom: 13px;">
   <i class="glyphicon glyphicon-plus"></i>Select Advisor
  </button>
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>


                          <th style="font-size: 15px;" width="50%" class="text-left">Title project</th>
                <th style="font-size: 15px;" width="10%" class="text-left">Advisor</th>
                <th style="font-size: 15px;" width="5%" class="text-left">Status</th>

                    </tr>
                  </thead>

                       <?php

$my_id = $_SESSION['id'];
$my_group_id = get_group_id($my_id);

//Initialise Value to variable

$sql = "SELECT advisergroup.advisergroup_id, advisergroup.advisergroup_status,advisergroup.advisergroup_topic,advisergroup.group_id,member.member_id,member.member_fullname FROM advisergroup
         JOIN member ON advisergroup.member_id = member.member_id
         WHERE advisergroup.group_id = '$my_group_id'";

if ($rs = $db->query($sql)) {
    while ($row = $rs->fetch_object()) {
        ?>
                  <tbody>
                    <tr>
                     <td class="text-left" style="font-size: 15px;" width="30%"><?php echo $row->advisergroup_topic; ?></td>

                   <td class="text-left" style="font-size: 15px;" width="10%"><?php echo $row->member_fullname; ?></td>


<td class="text-left" style="font-size: 15px;" width="5%"><?php echo status_01($row->advisergroup_status); ?>  <font color='red'> </br>*For Advisor</font> </td>
<td>


                     <a href="delete_advisor.php?id=<?php echo $row->advisergroup_id; ?>"class="btn btn-danger btn-xs">
                  <i class='fa fa-times'></i> </a>
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




<!-- Modal -->
<div class="modal fade" id="selectadvisor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i>Request advisor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">

       <form id="add" name="add" method ="post" action ="check_selectadvisor.php" onsubmit="return checkForm()" >


 <div class="form-group row">
       <div class="col-md-3">
             <label class="control-label col-form-label">Choose advisor</label>
           </div>
             <div class="col-md-9">
             <select class="form-control" name="member_id">
              <option value="no">- Lecturer Name -</option>
                <?php

$strSQL = "SELECT member_id, member_fullname FROM member WHERE member_pos ='Lecturer'";
if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {
        echo "<option value='" . $objResult->member_id . "'>" . $objResult->member_fullname . "</option>";
    }
} else {
}
?>
              </select>

            </div>
          </div>
                <div class="form-group row">
                           <div class="col-md-3">
                               <label class="control-label col-form-label">Topic</label>
                                 </div>
                       <div class="col-md-9">
                                        <input type="text" class="form-control" id="advisergroup_topic" name="advisergroup_topic"placeholder="project topic name" autocomplete="off"  aria-describedby="basic-addon1">
                                                    </div>
                                                </div>


 <div class="form-group row">
       <div class="col-md-3">

           </div>
             <div class="col-md-9">
             <select class="form-control" name="admin_id" hidden="">

                <?php
include '../menu/connect.php';
$strSQL = "SELECT admin_id FROM member WHERE member_id ='" . $_SESSION['id'] . "'";
if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {
        echo "<option value='" . $objResult->admin_id . "'></option>";
    }
} else {
}
?>
              </select>

            </div>
          </div>



           <input type="hidden" name="group_id" value="<?php echo $group_id; ?>">
            <input type="hidden" name="advisergroup_id" value="<?php echo $advisergroup_id; ?>">

             <button type="submit" class="btn btn-primary btn-bm btn-block">Send request</button>

</div>
</div>
</div>
</div>






  <!-- Star Partner -->
<div class="modal fade" id="joinpartner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i>Join your partner</h4>
      </div>
      <div class="modal-body">

       <form id="add" name="add" method ="post" action ="check_join.php" onsubmit="return checkForm()" >



       <table class="table table-hover text-nowrap">
              <thead>
                <tr>
             <th style="font-size: 15px;" width="3%" class="text-left">No</th>

                <th style="font-size: 15px;" width="10%" class="text-left">Group</th>
                   <th style="font-size: 15px;" width="40%" class="text-left">Group Member</th>
                  <th style="font-size: 15px;" width="20%" class="text-left"></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
              <?php
// require 'menu/function.php';
$sql = "SELECT * FROM partnergroup";
$i = 1;
$count = 1;
if ($rs = $db->query($sql)) {
    while ($row = $rs->fetch_object()) {
        ?>

           <tr>
                    <td class="text-left" style="font-size: 13px;" width="4%">   <?php echo $count++; ?></td>
                   <td class="text-left" style="font-size: 13px;" width="10%"> <?php echo $row->group_number; ?></td>
                   <td class="text-left" style="font-size: 13px;" width="50%"> <?php echo get_member_list($row->group_id); ?></td>
                  <td class="text-center">
                    <a href="check_group.php?id=<?php echo $row->group_id; ?>" class="btn btn-primary btn-xs" onclick="return confirm_joingroup()"><i class="glyphicon glyphicon-plus-sign"></i> Join this Group</a>
                  </td>
                </tr>
              <?php
}
} else {
}
?>
</a>
</td>
</tr>
</tbody>
                                    </table>
                                    </form>

</div>
</div>
</div>
</div>

  <!-- END FORM Partner -->




 <div class="col-md-6">
                <div class="card card-warning card-outline">
              <div class="card-header">
                <h3 class="card-title">Committee</h3>
              </div>
              <!-- /.card-header -->
          <div class="card-body">


  <!-- Display Partner -->



   <table class="table table-hover text-nowrap">                  <thead>

                                           <tr>
                    <th style="font-size: 15px;" width="20%" class="text-left">Lecturer ID</th>
                  <th style="font-size: 15px;" width="30%" class="text-left">Full Name</th>
                 <th style="font-size: 15px;" width="20%" class="text-left">Phone</th>
                </tr>
                                        </thead>
                                        <tbody>


                                         <?php

$sql = "SELECT committeegroup.committeegroup_id, member.member_fullname,member.member_idcard ,member.member_phone FROM committeegroup
          LEFT JOIN member ON committeegroup.member_id = member.member_id
          WHERE committeegroup.group_id = '$group_id'";

if ($rs = $db->query($sql)) {
    while ($row = $rs->fetch_object()) {
        ?>

                <tr>
                <td class="text-left" style="font-size: 15px;" width="20%"><?php echo $row->member_idcard; ?></td>
                   <td class="text-left" style="font-size: 15px;" width="20%"><?php echo $row->member_fullname; ?></td>
                  <td class="text-left" style="font-size: 15px;" width="10%"><?php echo $row->member_phone; ?></td>
                </tr>
              <?php
}
} else {
}
?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>

    <!-- /.content -->

<!-- ./wrapper -->






    <!-- /.content-wrapper -->
<footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <class style="font-size: 14px;"> <b>Version</b> 3.0.3-pre
      </div>
      <class style="font-size: 14px;">  <strong>Copyright &copy; 2019-2020 <a href="#">IT Project Monitoring and Tracking</a>.</strong> All rights reserved.
    </footer>

</div>
  <!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>