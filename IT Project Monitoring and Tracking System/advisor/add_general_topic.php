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
$con = mysqli_connect('localhost', 'root', '', 'projects_itproject');
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
$con = mysqli_connect('localhost', 'root', '', 'projects_itproject');
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
$con = mysqli_connect('localhost', 'root', '', 'projects_itproject');
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
            <a href="advisor_request.php" class="nav-link">
             <i class="nav-icon fa fa-paper-plane"></i>
              <p>
       Request
                    <span class="right badge badge-danger"><?php echo $count; ?></span>
             </p>
            </a>
          </li>




            <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Projects
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="proposal_status.php" class="nav-link ">
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
                <a href="proposal_project.php" class="nav-link ">
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
            <a href="#" class="nav-link active">
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
                <a href="add_general_topic.php" class="nav-link active">
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
              <li class="breadcrumb-item active">All Project Topics
</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
               <h3 class="card-title">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addtopic">
                  <i class="nav-icon fas fa-plus"></i>
                  New Topic Propose
                </button>
                </h3>

            </div>

  <div class="modal fade" id="addtopic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
                            <div class="modal-header bg-info">
              <h5 class="modal-title">Add New Topic Propose to student</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">

          <form id="add" name="add" method="post" action="check_newstopic.php" onsubmit="return checkForm()">


      <div class="form-group row">
          <div class="col-md-3">
              <label class="control-label col-form-label">Topic</label>
              </div>
                <div class="col-md-9">
          <input type="text" class="form-control" placeholder="Topic" aria-describedby="basic-addon1"
                    id="news_topic" name="news_topic" autocomplete="off" required>
                  </div>
                </div>


                      <div class="form-group row">
                        <div class="col-md-3">
                          <label class="control-label col-form-label">Detail</label>
                        </div>
                        <div class="col-md-9">


  <textarea type="text" rows="5" class="form-control" id="news_detail" name="news_detail"
                  placeholder="Project Description" required > </textarea>


                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-9">
                          <select class="form-control" name="member_id" hidden="">

                        <?php
include '../menu/connect.php';
$strSQL = "SELECT member_id, member_fullname FROM member WHERE member_id ='" . $_SESSION['id'] . "'";
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

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">CREATE</button>
            </div>

            </form>
          </div>



  <!--form alert add topic-->

            </div>
        </div>



            <!-- /.card-header -->
                  <div class="card-body">
              <table id="example1" class="table table-sm "  >
                <thead class="thead-light">
                <tr>
                 <th style="font-size: 15px;" width="4%" class="text-left">No</th>
                 <th style="font-size: 15px;" width="18%" class="text-left">Topic</th>
                   <th style="font-size: 15px;" width="18%" class="text-left">Detail</th>
                  <th style="font-size: 15px;" width="12%" class="text-left">Date</th>
                   <th style="font-size: 15px;" width="12%" class="text-left">By</th>
                   <th style="font-size: 15px;" width="8%" class="text-left">Display</th>
                   <th style="font-size: 15px;" width="8%" class="text-left">Option</th>
                </tr>
                </thead>
                <tbody>

            <?php

$strSQL = "SELECT  news_topic.news_id,news_topic.news_topic, news_topic.news_detail, news_topic.news_date,member.member_fullname,news_topic.parent_comment_id FROM news_topic
          LEFT JOIN member ON news_topic.member_id = member.member_id
WHERE news_topic.news_id and parent_comment_id='parent_comment_id'
   ORDER BY news_topic.news_id='" . $_SESSION['id'] . "'";

$i = 1;
$count = 1;
?>

              <?php
if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {
        ?>


                    <tr>
                    <td class="text-left" style="font-size: 15px;">  <?php echo $count++; ?></td>
                 <td class="text-left" style="font-size: 15px;"><?php echo substr($objResult->news_topic, 0, 30); ?></td>
                  <td class="text-left" style="font-size: 15px;"><?php echo substr($objResult->news_detail, 0, 30); ?></td>

                 <td class="text-left" style="font-size: 15px;"><?php echo $objResult->news_date; ?></td>
                 <td class="text-left" style="font-size: 15px;"><?php echo $objResult->member_fullname; ?></td>



                  <td>   <a href="display_news.php?id=<?php echo $objResult->news_id; ?>"class="btn btn-success btn-sm" >Display
               </a></td>
<td>
<button type="button" class="btn btn-warning btn-xs" data-toggle="modal"
                                                    data-target="#editsub<?php echo $i; ?>">
                                                  <i class="fa fa-edit" title="Edit"></i> </button></center>


          <button type="button" class="btn btn-primary btn-xs" data-toggle="modal"
                        data-target="#show<?php echo $i; ?>">
                      <i class="fa fa-eye"></i></button>

                  <a href="delete_news.php?id=<?php echo $objResult->news_id; ?>"class="btn btn-danger btn-xs" onclick="return confirm('Are You sure Delete?')">
                  <i class="fa fa-trash" title="Delete"></i></a>





                    <!-- Modal -->
                                            <div class="modal fade" id="editsub<?php echo $i; ?>" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                            <div class="modal-header bg-info">
                              <h5 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i>
                                                                Edit Information</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>


                                                        </div>

                                                <div class="modal-body">
                                                            <form class="form-horizontal" method="post" action="check_edit_news.php">

                                                             <div class="form-group row margin-top-10">
                <div class="col-md-2">
                  <label class="control-label ">Topic</label>
                </div>
                <div class="col-md-10">
                     <input type="hidden" name="news_id" value="  <?php echo $objResult->news_id; ?>">


          <input type="text" class="form-control" id="news_topic"
      name="news_topic" value="  <?php echo $objResult->news_topic; ?>   ">


                </div>
              </div>

  <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label ">Detail</label>
                </div>
                <div class="col-md-10">



<textarea type="text" rows="8"  class="form-control" id="news_detail"
   name="news_detail"> <?php echo $objResult->news_detail; ?> </textarea>

            </div>
              </div>



                                           <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label ">Date</label>
                </div>
                <div class="col-md-10">
   <input type="text" class="form-control" name="news_date" id="news_date"
   value="<?php echo $objResult->news_date; ?>">

            </div>
              </div>



                                           <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label ">By</label>
                </div>
                <div class="col-md-10">
   <input type="text" class="form-control" name="member_fullname" id="member_fullname" disabled="disabled"
   value="<?php echo $objResult->member_fullname; ?>">

            </div>
              </div>



                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>
                                                                        Cancle</button>
                                                                    <button type="submit" class="btn btn-success"><i
                                                                            class="glyphicon glyphicon-ok"></i>
                                                                        Edit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
</div>

             <div class="modal fade" id="show<?php echo $i; ?>" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                            <div class="modal-header bg-info">
                              <h5 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i>
                                                              View Information</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                                        </div>

                                                <div class="modal-body">
                                                            <form class="form-horizontal" method="post" action="#">

                                                             <div class="form-group row margin-top-10">
                <div class="col-md-2">
                  <label class="control-label ">Topic</label>
                </div>
                <div class="col-md-10">
                     <input type="hidden" name="news_id" value="  <?php echo $objResult->news_id; ?>">


         <?php echo $objResult->news_topic; ?>


                </div>
              </div>

  <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label ">Detail</label>
                </div>
                <div class="col-md-10">




 <?php echo $objResult->news_detail; ?>

            </div>
              </div>



                                           <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label ">Date</label>
                </div>
                <div class="col-md-10">
<?php echo $objResult->news_date; ?>

            </div>
              </div>



                                           <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label ">By</label>
                </div>
                <div class="col-md-10">
  <?php echo $objResult->member_fullname; ?>




                  </td>

            </tr>

            <?php
$i++;

    }
}
?>

  </tbody>
                                    </table>

          </form>
  </section>
</div>


<?php

include 'phpmailer/line_message.php';
?>

    <!-- /.content-wrapper -->
    <!-- /.content-wrapper -->
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
