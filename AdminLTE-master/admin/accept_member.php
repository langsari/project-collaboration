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
$conn = new mysqli("localhost","root","","itpromo_track");
$count=0;
if(!empty($_POST['add'])) {
  $subject = mysqli_real_escape_string($conn,$_POST["subject"]);
  $comment = mysqli_real_escape_string($conn,$_POST["comment"]);
  $sql = "INSERT INTO notify (subject,comment) VALUES('" . $subject . "','" . $comment . "')";
  mysqli_query($conn, $sql);
}
$sql2="SELECT * FROM notify WHERE status = 0";
$result=mysqli_query($conn, $sql2);
$count=mysqli_num_rows($result);
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
  $con = mysqli_connect('localhost','root','','itpromo_track');
  $query="SELECT * FROM notify WHERE status=0";
  $query_num=mysqli_query($con,$query);
  $count=mysqli_num_rows($query_num);

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
              $con = mysqli_connect('localhost','root','','itpromo_track');
              $sq="SELECT * FROM notify WHERE status=0";
              $qu_num=mysqli_query($con,$query);
              if (mysqli_num_rows($qu_num)>0) 
              {
                while($result=mysqli_fetch_assoc($qu_num))
                {
                  echo '<a class="dropdown-item text-primary font-weight-light" href="../admin/read_noti.php?id='.$result['id'].'">'.$result['subject'].'</a>';
                  echo '<div class="dropdown-divider"></div>';

                }
              }
              else
              {
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
<<<<<<< HEAD


       <a href="index.php" class="brand-link">
=======
    <a href="index.php" class="brand-link">
>>>>>>> a1bc4d61b63fdfced8677992d3206b4af5d9a547
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
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Manage User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../admin/accept_member.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Request</p>
                  <?php
                    $con = mysqli_connect('localhost','root','','itpromo_track');
                    $query="SELECT member_id FROM member WHERE admin_id=0";
                    $query_num=mysqli_query($con,$query);
                    $count=mysqli_num_rows($query_num);

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
                <a href="../admin/view_all_project.php" class="nav-link">
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
                <a href="../admin/add_announcement.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Annoucements</p>
                </a>
              </li>
             
            </ul>
          </li>

      <li class="nav-item">
              <a href="PF_setting.php" class="nav-link">
                <i class="nav-icon fa fa-check-square"></i>
                <p>
                  Project Form Setting
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
              <li class="breadcrumb-item active">User request</li>
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
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addmember">
                  <i class="nav-icon fas fa-plus"></i>
                  Add New User
                </button>
                </h3>
        
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                   <table id="example1" class="table table-sm "  >
                <thead class="thead-light">
                  <tr>
                      <th style="font-size: 15px;" width="4%" class="text-left">No</th>
                      <th style="font-size: 15px;" width="5%" class="text-left">User ID</th>
                      <th style="font-size: 15px;" width="10%" class="text-left">Name</th>
                      <th style="font-size: 15px;" width="10%" class="text-left">Phone</th>
                      <th style="font-size: 15px;" width="10%" class="text-left">Email</th>
                      <th style="font-size: 15px;" width="5%" class="text-left">Gender</th>
                      <th style="font-size: 15px;" width="5%" class="text-left">Position</th>
                       <th style="font-size: 15px;" width="9%" class="text-left">Status</th>
                       <th style="font-size: 15px;" width="8%" class="text-left">Action</th>
                     </tr>
                  </thead>
                  <tbody align="center">
        <?php

       $strSQL = "SELECT * FROM member  WHERE member_pos  AND admin_id = '0' ORDER BY member_fullname";
        
        ?>
        <?php
     if($result = $db->query($strSQL)){
             while($objResult = $result->fetch_object()){
            ?>
            <tr>
                 <td class="text-left" style="font-size: 15px;"><?php echo $objResult->member_id; ?></td>
                 <td class="text-left" style="font-size: 15px;"><?php echo $objResult->member_idcard; ?></td>
                <td class="text-left" style="font-size: 15px;"><?php echo $objResult->member_fullname; ?></td>
                 <td class="text-left" style="font-size: 15px;"><?php echo $objResult->member_phone; ?></td>
               <td class="text-left" style="font-size: 15px;"><?php echo $objResult->member_email; ?></td>
                 <td class="text-left" style="font-size: 15px;"><?php echo gender($objResult->member_gender); ?></td>
                 <td class="text-left" style="font-size: 15px;"><?php echo position($objResult->member_pos); ?></td>
                  <td class="text-left" style="font-size: 15px;"><?php echo status($objResult->admin_id); ?></td>

                 <td>

           

           <a href="../admin/accept.php?id=<?php echo $objResult->member_id;?>"class="btn btn-primary btn-sm">
                  <i class="fa fa-edit" title="Detail"></i></a>


    <a href="delete_approve.php?id=<?php echo $objResult->member_id;?>"class="btn btn-danger btn-sm" onclick="return confirm('Are You sure Delete?')">
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
              <h4 class="modal-title">Add Alert</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form name="frmNotification" id="frmNotification" action="" method="post" >
      <div id="form-header" class="form-row">Add New Message</div>
      <div class="form-row">
        <div class="form-label">Subject:</div><div class="error" id="subject"></div>
        <div class="form-element">
          <input type="text"  name="subject" id="subject" required>
          
        </div>
      </div>
      <p>
      <div class="form-row">
        <div class="form-label">Comment:</div><div class="error" id="comment"></div>
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
  


<div class="modal fade" id="addmember">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
    <form id="add" name="add" method="post" action="../admin/check_accept_member.php"
                                 onsubmit="return checkForm()">
      <div class="user-details">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="member_idcard" name="member_idcard" placeholder="UserID" autocomplete="off" required aria-describedby="basic-addon1" onkeypress='validate(event)'  maxlength="9">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-id-card"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" id="member_username" name="member_username" autocomplete="off" required aria-describedby="basic-addon1">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="member_fullname" name="member_fullname" placeholder="Full name"   autocomplete="off" required aria-describedby="basic-addon1">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="member_password" id="member_password" onKeyUp="passwordStrength(this.value)"  class="form-control"  autocomplete="off" required aria-describedby="basic-addon1">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-lock"></span>
            </div>
          </div>
          <center>
          <div id="passwordDescription"></div>
          <div id="passwordStrength" class="strength0"></div>
          </center>
        </div>
        <div class="input-group mb-3">
          <input type="tel" class="form-control" placeholder="Phone: 123-4567-8901" id="member_phone" name="member_phone" autocomplete="off" required aria-describedby="basic-addon1" onkeypress='validate(event)'  maxlength="10">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="....@gmail.com" id="member_email" name="member_email" autocomplete="off"  aria-describedby="basic-addon1" pattern="^[a-zA-Z0-9]+@gmail\.com$" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="form-group">
        <select class="form-control" name="member_pos" id="member_pos">
             <option value="#">Select Position</option>
             <option value="Lecturer">Lecturer</option>
             <option value="Student">Student</option>
             <option value="Officer">Officer</option>

        </select>
       </div>
       <center>
       <div class="input-group">

      Gender: &nbsp;&nbsp; &nbsp;&nbsp;
      <label class="radio-inline"> 
        <input type="radio" name="member_gender" value="Male" required aria-describedby="basic-addon1"> &nbsp;&nbsp; Male</label>&nbsp;&nbsp; &nbsp;&nbsp; 
        <label class="radio-inline"><input type="radio"name="member_gender" value="Female"aria-describedby="basic-addon1"> &nbsp;&nbsp; Female</label>
      </div>

      </div>
                
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">REGISTER</button>
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
      <strong>Copyright &copy; 2019-2020 <a href="#">IT PROJECT</a>.</strong> All rights
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
