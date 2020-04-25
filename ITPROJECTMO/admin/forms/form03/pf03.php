<?php
session_start();

require '../../../menu/connect.php';
include '../../../menu/function.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>ITPROMOT | TRACKING PAGE</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'><link rel="stylesheet" href="../form01/style.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <!-- DataTables -->
  <link rel="stylesheet" href="../../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
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
      <li class="nav-item d-none d-sm-inline-block">

        <a href="../admin/index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
       <a href="#" class="nav-link" data-toggle="modal" data-target="#notify">Notify</a>
      </li>

    </ul>

    <?php
    
    $conn = new mysqli("localhost", "itproject", "qydenygeq", "projects_itproject");
    $count = 0;
    if (!empty($_POST['add'])) {
        $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
        $comment = mysqli_real_escape_string($conn, $_POST["comment"]);
        $sql = "INSERT INTO notify (subject,comment) VALUES('" . $subject . "','" . $comment . "')";
        mysqli_query($conn, $sql);
    }
    $sql2 = "SELECT * FROM notify WHERE status = 0";
    $result = mysqli_query($conn, $sql2);
    $count = mysqli_num_rows($result);
    ?>
    
          <script type="text/javascript">
            function myFunction() {
              $.ajax({
                url: "view_notification.php",
                type: "POST",
                processData: false,
                success: function (data) {
                  $("#notification-count").remove();
                  $("#notification-latest").show();
                  $("#notification-latest").html(data);
                },
                error: function () {}
              });
            }
    
            $(document).ready(function () {
              $('body').click(function (e) {
                if (e.target.id != 'notification-icon') {
                  $("#notification-latest").hide();
                }
              });
            });
          </script>
    
    
       <!-- Right navbar links -->
         <?php
    $con = mysqli_connect("localhost", "itproject", "qydenygeq", "projects_itproject");
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
    $con = mysqli_connect("localhost", "itproject", "qydenygeq", "projects_itproject");
    $sq = "SELECT * FROM notify WHERE status=0";
    $qu_num = mysqli_query($con, $query);
    if (mysqli_num_rows($qu_num) > 0) {
        while ($result = mysqli_fetch_assoc($qu_num)) {
            echo '<a class="dropdown-item text-primary font-weight-light" href="../../read_noti.php?id=' . $result['id'] . '">' . $result['subject'] . '</a>';
            echo '<div class="dropdown-divider"></div>';
    
        }
    } else {
        echo '<a href="#" class="dropdown-item text-danger font-weight-light"><i class="fas fa-frown"></i> Sorry! No Notification</a>';
    }
    ?>
                <div class="dropdown-divider"></div>
              <a href="../../read_noti.php" class="dropdown-item dropdown-footer">See All Messages</a>
              </div>
            </li>
    
    
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fa fa-user"></i>
              <?php echo $_SESSION['name']; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="../../../auth/logout.php" class="dropdown-item">
                <i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout
              </a>
              <a href="my_profile.php" class="dropdown-item">
                <i class="fas fa-user"></i>&nbsp;&nbsp;My Profile
              </a>
            </div>
          </li>
    
    
        </ul>
      </nav>
    
            <div class="modal fade" id="notify">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Add Alert</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form name="frmNotification" id="frmNotification" action="" method="post">
                    <div id="form-header" class="form-row">Add New Message</div>
                    <div class="form-row">
                      <div class="form-label"> Subject:</div>
                      <div class="error" id="subject"></div>
                      <div class="form-element">
                        <input type="text" name="subject" id="subject" required>
    
                      </div>
                    </div>
                    <p>
                      <div class="form-row">
                        <div class="form-label"> Comment:</div>
                        <div class="error" id="comment"></div>
                        <div class="form-element">
                          <textarea rows="4" cols="30" name="comment" id="comment"></textarea>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-element">
                          <input type="submit" name="add" id="btn-send" value="Submit">
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
    
    
    
      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
    
    
        <a href="../../index.php" class="brand-link">
            <img src="../../../dist/img/n2.png" width="100%" >
            <span class="brand-text font-weight-light"></span>
          </a>
    
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="../../../dist/img/user1.png" class="img-circle elevation-2" alt="User Image">
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
    
              <li class="nav-item has-treeview menu-open">
                <a href="../../../admin/index.php" class="nav-link">
    
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashbord
                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>
    
              <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link ">
                  <i class="nav-icon fa fa-users"></i>
                  <p>
                    Manage User
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../../../admin/accept_member.php" class="nav-link ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>User Request</p>
                      <?php
    $con = mysqli_connect("localhost", "itproject", "qydenygeq", "projects_itproject");
    $query = "SELECT member_id FROM member WHERE admin_id=0";
    $query_num = mysqli_query($con, $query);
    $count = mysqli_num_rows($query_num);
    
    ?>
                        <span class="right badge badge-danger"><?php echo $count; ?></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../admin/choose_committee.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Choose Committee</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../admin/all_member.php" class="nav-link ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View All Users</p>
                    </a>
                  </li>
                </ul>
              </li>
    


          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Manage Schedule
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../../admin/add_schedule_proposal.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proposal Schedule</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../../admin/add_schedule_project.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Schedule</p>
                </a>
              </li>
            </ul>
          </li>



          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Projects
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../../admin/student_track.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Track</p>
                </a>
              </li>
           
              <li class="nav-item">
                <a href="../../../admin/view_all_project.php" class="nav-link ">
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
                Manage Annoucements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../../admin/add_announcement.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Annoucements</p>
                </a>
              </li>

            </ul>
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
              <li class="breadcrumb-item active"> Track</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


      <div class="container-fluid">
        <div class="row">
     <div class="col-md-12 ">

            <!-- Profile Image -->

            <div class="card card-primary card-outline">









<!-- partial:index.partial.html -->


        <div class="form-wizard">
          <form action="check_pf3.php" method="post"  class="form-horizontal" enctype="multipart/form-data">
            <div class="form-wizard-header">
              <ul class="list-unstyled form-wizard-steps clearfix">
                <li class="active" ><span>1</span></li>
           <li class="active" ><span>2</span></li>
                  <li class="active" ><span>3</span></li>
                <li><span>4</span></li>
                    <li><span>5</span></li>
                <li><span>6</span></li>
                <li><span>7</span></li>
                <li><span>8</span></li>
                <li><span>9</span></li>
                    <li><span>10</span></li>
                <li><span>11</span></li>
                <li><span>12</span></li>
                <li><span>13</span></li>
              </ul>
            </div>

            <fieldset class="wizard-fieldset show">
              <h5>PF03</h5>
            <?php
$id = $_GET['id'];

$strSQL = "SELECT advisergroup.*,  files.by_officer,files.Owner,files.advisergroup_id,files.pf,files.status_advisor,files.files_filename_proposal,files.files_id,files.advisergroup_id FROM advisergroup
LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id

LEFT JOIN member ON advisergroup.member_id = member.member_id
WHERE advisergroup.advisergroup_id = '$id'  ";

if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {
        ?>


            <fieldset>
                <div style="font-size: 15px;"> 
               <?php echo get_member_list($objResult->group_id); ?>
             </div>
            </br>
             <h5>Proposal Presentation & Proposal Revision </h5>
           <h6><small class="text-muted">Approval Form Agreed to Approve By Advisor & Committee</small>

              </h6>
                <div class="card">
                  <div class="card-block">
                    <table class="table">
                      <thead class="thead-default">
                        <tr>
                        <th>To do list</th>
                          <th><font color='red'>Advisor</font></th>
                          <th><font color='red'>Committee</font></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>1).Project Presentation
                            </br>2).Project Revision</td>

                            <td>
                          </br>

                            <?php echo status_03($objResult->status_advisor); ?>

                          <span>
                              <?php echo get_advisor($objResult->group_id); ?></span>
                          </td>

                          <td>
                            </br>
                            <span><?php echo get_status_committee($objResult->group_id); ?></span>
                            <p>

                          </td>

                        </tr>

                          <input type="hidden" name="files_id"  value="<?php echo $objResult->files_id; ?>">
                              <input type="hidden" name="advisergroup_id"  value="<?php echo $objResult->advisergroup_id; ?>">


                        <td class="hidden"> 3 chapter of Proposal Revision<p>


                                                     <br>






  <td>
<?php if ($objResult->files_filename_proposal != "") {?>
                      <a href="../form01/download.php?pdf=<?php echo $objResult->files_filename_proposal; ?>">
                    <input type="button" class="btn btn-success" value="Download File" >
                       </a>
 <?php } else {?>
                    <a href="#"> <button class="btn btn-danger btn-xs">
                        <i class="glyphicon glyphicon-remove"> No file </i></button></a>
                    <?php }?>
                              </td>
                        </tr>
                      </tbody>
                    </table>

                    </table>



              </fieldset>
                   <a href="../../../auth/logout.php" class="dropdown-item">
            </fieldset>
          </form>


         <div class="form-group clearfix">

                  <a href="../form02/pf02.php?id=<?php echo $objResult->advisergroup_id; ?>" class="btn btn-danger float-left">Previous</a>
          <?php if ($objResult->status_advisor != "Pass") {?>
            <button class="btn btn-warning disabled float-right" disabled="disabled">Next</button>
          <?php } else {?>
            <a href="../form04/pf04.php?id=<?php echo $objResult->advisergroup_id; ?>"   >
            <button type="button" class="btn btn-primary float-right">Next</button></a>
                       <?php }?>






              </div>

              </div>



              </div>




            <?php
}}
?>





  </div>
      </div>
    </div>
  </section>

 <div class="container-fluid">
        <div class="row">
     <div class="col-md-12 ">



   <link rel="stylesheet" href="../../../assets/comment/style.css">



  <!-- From -->
  <div class="comment-form">

  <?php
$id = $_GET['id'];

$strSQL = "SELECT advisergroup.*, partnergroup.group_number,partnergroup.group_id,advisergroup.member_id,advisergroup.group_id,advisergroup.advisergroup_id,comment.comment_content,comment.date,comment.member_id,member.member_fullname FROM advisergroup
          LEFT JOIN comment ON advisergroup.advisergroup_id = comment.advisergroup_id

          LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id



        LEFT JOIN member ON advisergroup.member_id = member.member_id

        WHERE advisergroup.advisergroup_id = '$id' and form_pf='3' ";
if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {

        ?>



   <div class="callout callout-info">
                <img class="img-circle img-bordered-sm" src="../../../dist/img/user.png" alt="user image"  width="30" height="30">
<class style="font-size: 15px;">   &nbsp;&nbsp;<?php echo $objResult->member_id; ?>




                   <span class="float-right">
                        <span class="description" style="font-size: 13px;">Shared publicly - <?php echo $objResult->date; ?></span>
                      </span>
             <p>


            <class style="font-size: 15px;">    <?php echo $objResult->comment_content; ?>
            </div>


          <?php
}
}
?>


    <!-- /.content -->
  </br>


        </div>
      </div>
    </div>
  </section>

     </div>
       </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">     <class style="font-size: 12px;">
      <b>Version</b> 3.0.3-pre
    </div>
       <class style="font-size: 12px;">   <strong>Copyright ©2020  <a href="#">IT Promo and Track</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
</div>
    <!-- /.content -->




    <!-- /.content -->

<!-- ./wrapper -->

<!-- ./wrapper -->


<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script  src="script.js"></script>



<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../../../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../../../plugins/chart.js/Chart.min.js"></script>
<script src="../../../dist/js/demo.js"></script>
<script src="../../../dist/js/pages/dashboard3.js"></script>
<!-- DataTables -->
<script src="../../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
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