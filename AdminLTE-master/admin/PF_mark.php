<?php
session_start();
require '../menu/connect.php';
include '../menu/function.php';

?>
<style>
  .tex{
  padding: 6px;
  border: 1px solid #ccc;
  border-radius: 4px;
  width: 100%;
  }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>ITPROMOT| PF Setting </title>

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
$conn = new mysqli("localhost", "root", "", "itpromo_track");
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
      processData:false,
      success: function(data){
        $("#notification-count").remove();
        $("#notification-latest").show();$("#notification-latest").html(data);
      },
      error: function(){}
    });
   }

   $(document).ready(function() {
    $('body').click(function(e){
      if ( e.target.id != 'notification-icon'){
        $("#notification-latest").hide();
      }
    });
  });

  </script>


   <!-- Display the alert of notification -->

  <?php
$con = mysqli_connect('localhost', 'root', '', 'itpromo_track');
$query = "SELECT * FROM notify WHERE status=0";
$query_num = mysqli_query($con, $query);
$count = mysqli_num_rows($query_num);

?>

    <!-- Right navbar links -->
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
        echo '<a class="dropdown-item text-primary font-weight-light" href="../admin/read_noti.php?id=' . $result['id'] . '">' . $result['subject'] . '</a>';
        echo '<div class="dropdown-divider"></div>';

    }
} else {
    echo '<a href="#" class="dropdown-item text-danger font-weight-light"><i class="fas fa-frown"></i> Sorry! No Notification</a>';
}
?>
            <div class="dropdown-divider"></div>
          <a href="../admin/read_noti.php" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['name']; ?>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a href="../auth/logout.php" class="dropdown-item">
              <i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout
            </a>
            <a href="#" class="dropdown-item">
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
            <a href="../admin/index.php" class="nav-link ">

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
                <a href="../admin/accept_member.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Request</p>
                  <?php
$con = mysqli_connect('localhost', 'root', '', 'itpromo_track');
$query = "SELECT member_id FROM member WHERE admin_id=0";
$query_num = mysqli_query($con, $query);
$count = mysqli_num_rows($query_num);

?>
                    <span class="right badge badge-danger"><?php echo $count; ?></span>
                </a>
              </li>
              <li class="nav-item">
                <a href="../admin/choose_committee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Choose Committee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../admin/all_member.php" class="nav-link">
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
                <a href="../admin/add_schedule_proposal.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proposal Schedule</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../admin/add_schedule_project.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Schedule</p>
                </a>
              </li>
            </ul>
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
                <a href="../admin/student_track.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Track</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../admin/add_proposal.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student project proposal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../admin/view_all_project.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Project Topics</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Manage Annoucements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../admin/add_announcement.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Annoucements</p>
                </a>
              </li>

            </ul>
          </li>

      <li class="nav-item">
            <a href="PF_setting.php" class="nav-link active">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                PF Setting
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
              <li class="breadcrumb-item"><a href="../admin/index.php">Home</a></li>
              <li class="breadcrumb-item active">PF Setting</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
               <h3 class="card-title">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addmember">
                  <i class="nav-icon fas fa-plus"></i>
                  PF Setting
                </button>
                </h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">

                   <table id="example" class="table table-sm "  >
                  <thead class="thead-light">
                  <tr>
                      <th style="font-size: 15px;" width="5%" class="text-center">PF01</th>
                      <th style="font-size: 15px;" width="5%" class="text-center">PF02</th>
                      <th style="font-size: 15px;" width="5%" class="text-center">PF03</th>
                      <th style="font-size: 15px;" width="5%" class="text-center">PF04</th>
                      <th style="font-size: 15px;" width="5%" class="text-center">PF05</th>
                      <th style="font-size: 15px;" width="5%" class="text-center">PF06</th>
                      <th style="font-size: 15px;" width="5%" class="text-center">PF07</th>
                      <th style="font-size: 15px;" width="5%" class="text-center">PF08</th>
                      <th style="font-size: 15px;" width="5%" class="text-center">PF09</th>
                      <th style="font-size: 15px;" width="5%" class="text-center">PF10</th>
                      <th style="font-size: 15px;" width="5%" class="text-center">PF11</th>
                      <th style="font-size: 15px;" width="5%" class="text-center">PF12</th>
                      <th style="font-size: 15px;" width="5%" class="text-center">PF13</th>
                      <th style="font-size: 15px;" width="5%" class="text-center">Action</th>
                     </tr>
                  </thead>
                  <tbody align="center">
                    <?php
$strSQL = "SELECT * FROM  pf_mark";

?>
        <?php
if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {
        ?>
            <tr>
            <td class="text-center" style="font-size: 15px;"><?php echo $objResult->pf1; ?></td>
            <td class="text-center" style="font-size: 15px;"><?php echo $objResult->pf2; ?></td>
            <td class="text-center" style="font-size: 15px;"><?php echo $objResult->pf3; ?></td>
            <td class="text-center" style="font-size: 15px;"><?php echo $objResult->pf4; ?></td>
            <td class="text-center" style="font-size: 15px;"><?php echo $objResult->pf5; ?></td>
            <td class="text-center" style="font-size: 15px;"><?php echo $objResult->pf6; ?></td>
            <td class="text-center" style="font-size: 15px;"><?php echo $objResult->pf7; ?></td>
            <td class="text-center" style="font-size: 15px;"><?php echo $objResult->pf8; ?></td>
            <td class="text-center" style="font-size: 15px;"><?php echo $objResult->pf9; ?></td>
            <td class="text-center" style="font-size: 15px;"><?php echo $objResult->pf10; ?></td>
            <td class="text-center" style="font-size: 15px;"><?php echo $objResult->pf11; ?></td>
            <td class="text-center" style="font-size: 15px;"><?php echo $objResult->pf12; ?></td>
            <td class="text-center" style="font-size: 15px;"><?php echo $objResult->pf13; ?></td>
            <td>
           <a href="../admin/accept.php?id=<?php echo $objResult->id; ?>"class="btn btn-primary btn-sm">
                  <i class="fa fa-edit" title="Detail"></i></a>


    <a href="delete_approve.php?id=<?php echo $objResult->id; ?>"class="btn btn-danger btn-sm" onclick="return confirm('Are You sure Delete?')">
                  <i class="fa fa-trash" title="Delete"></i></a>


                </td>

            </tr>

            <?php
}
}
?>


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
  </div>
  <!-- /.content-wrapper -->

<div class="modal fade" id="notify">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Notification</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

      <div class="modal-body">
      <form name="frmNotification" id="frmNotification" action="" method="post" >

        <div class="user-details">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Subject" id="Subject" name="subject" autocomplete="off" required aria-describedby="basic-addon1">
       </div>

        <div class="input-group mb-3">
          <textarea class="form-control" placeholder="comment" id="comment" name="comment" autocomplete="off" required aria-describedby="basic-addon1">

          </textarea>

        </div>
      </div>
      <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-sm" name="add" id="btn-send" value="Submit">Save</button>
            </div>
    </form>
  </div>
</div>
</div>
</div>



<div class="modal fade" id="addmember">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">PF Setting</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

    <form id="add" name="add" method="post" action="../admin/check_pf_mark.php"
                                 onsubmit="return checkForm()">
      <div class="user-details">
                  <div class="row">
                    <div class="col-sm-2">
                      <label>PF Type</label>
                    </div>
                    <div class="col-sm-3">
                      <label>Mark Obtain</label>
                    </div>
                    <div class="col-md-2 "></div>

                    <div class="col-md-2 ">
                      <label>PF Type</label>
                    </div>
                    <div class="col-sm-3">
                      <label>Mark Obtain</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="PF01" disabled>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="number" name="pf1" id="pf1" class="tex" placeholder="Mark.. ">
                      </div>
                    </div>
                    <div class="col-md-2 "></div>

                    <div class="col-md-2 ">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="PF02" disabled>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="number" name="pf2" id="pf2" class="tex" placeholder="Mark.. ">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="PF03" disabled>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="number" name="pf3" id="pf3" class="tex" placeholder="Mark.. ">
                      </div>
                    </div>
                    <div class="col-md-2 "></div>

                    <div class="col-md-2 ">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="PF04" disabled>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="number" name="pf4" id="pf4" class="tex" placeholder="Mark.. ">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="PF05" disabled>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="number" name="pf5" id="pf5" class="tex" placeholder="Mark.. ">
                      </div>
                    </div>
                    <div class="col-md-2 "></div>

                    <div class="col-md-2 ">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="PF06" disabled>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="number" name="pf6" id="pf6" class="tex" placeholder="Mark.. ">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="PF07" disabled>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="number" name="pf7" id="pf7" class="tex" placeholder="Mark.. ">
                      </div>
                    </div>
                    <div class="col-md-2 "></div>

                    <div class="col-md-2 ">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="PF08" disabled>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="number" name="pf8" id="pf8" class="tex" placeholder="Mark.. ">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="PF09" disabled>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="number" name="pf9" id="pf9" class="tex" placeholder="Mark.. ">
                      </div>
                    </div>
                    <div class="col-md-2 "></div>

                    <div class="col-md-2 ">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="PF10" disabled>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="number" name="pf10" id="pf10" class="tex" placeholder="Mark.. ">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="PF11" disabled>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="number" name="pf11" id="pf11" class="tex" placeholder="Mark.. ">
                      </div>
                    </div>
                    <div class="col-md-2 "></div>

                    <div class="col-md-2 ">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="PF12" disabled>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="number" name="pf12" id="pf12" class="tex" placeholder="Mark.. ">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 ">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="PF13" disabled>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="number" name="pf13" id="pf13" class="tex" placeholder="Mark.. ">
                      </div>
                    </div>
                    <div class="col-md-2 "></div>

                    <div class="col-md-1 ">
                      <label>Total </label>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" id="total" class="form-control" disabled>
                      </div>
                    </div>

                  </div>


      </div>
            </div>
            <div class="modal-footer justify-content-between">
              <input type="reset" value="Reset" class="btn btn-default btn-sm">
              <button type="submit" class="btn btn-primary btn-sm">Save</button>
            </div>

            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.3-pre
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!--include message  -->

<?php

include '../notification/notification.php';
?>
 <!--end for include message  -->

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
<script type="text/javascript" src="jquery.min.js"></script>
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


$('.tex').keyup(function() {
     var sum = 0;
    $('.tex').each(function() {
        sum += Number($(this).val());
    });
    $('#total').val(sum);

});

</script>
</body>
</html>
