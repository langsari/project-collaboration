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
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
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
    <a href="index3.html" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ITPROMOT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
            <a href="index.php" class="nav-link ">
             
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashbord
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

         <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Manage User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="accept_member.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Accept Member</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Choose Committee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View All Member</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Manage Schedule 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="create_proposal.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Proposal Schedule</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Project Schedule</p>
                </a>
              </li>
            </ul>
          </li>
    

  
          <li class="nav-item has-treeview">
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
                  <p>Project Track</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student project proposal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tables/jsgrid.html" class="nav-link">
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
                <a href="display_schedule_proposal.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Annoucements</p>
                </a>
              </li>
             
            </ul>
          </li>

      <li class="nav-item">
            <a href="../schedule.php" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                course syllabus
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
            
            <!-- /.card-header -->

          <div class="card">
            <div class="card-header">
              <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                 data-target="#addmember" style="margin-bottom: 10px;">
                                 <i class="nav-icon fas fa-plus"></i> Add New User

              </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Title Project</th>
                      <th>Status</th>
                      <th>Advisor</th>
                      <th>Committee</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Room</th>
                     </tr>
                  </thead>
                  <tbody>
        <?php

       $strSQL = "SELECT * FROM member  WHERE member_pos  AND admin_id = '0' ORDER BY member_fullname";
        
        ?>
        <?php
     if($result = $db->query($strSQL)){
             while($objResult = $result->fetch_object()){
            ?>
            <tr>
                                         <td class="text-left"><?php echo $objResult->member_id; ?></td>
                                         <td class="text-left"><?php echo $objResult->member_idcard; ?></td>
                                         <td class="text-left"><?php echo $objResult->member_fullname; ?></td>
                                         <td class="text-left"><?php echo $objResult->member_phone; ?></td>
                                         <td class="text-left"><?php echo $objResult->member_email; ?></td>
                                         <td class="text-left"><?php echo gender($objResult->member_gender); ?></td>
                                         <td class="text-left"><?php echo position($objResult->member_pos); ?></td>
                                         <td class="text-left"><?php echo status($objResult->admin_id); ?></td>
                                         <td><a href="?page=accept&id=<?php echo $objResult->member_id;?>"><i
                                                     class="fa fa-edit" title="View"></i></a></td>
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
<!-- /PAGE CONTENT -->
<div class="box-body">
  <div class="modal fade" id="addmember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            
          </button>
          <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i> New Member</h4>
          
        </div>
        <div class="modal-body">
          <form id="add" name="add" method="post" action="admin/check_accept_member.php"
                                 onsubmit="return checkForm()">
                                 <div class="user-details">
                                  <div class="form-group">
                                    <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-id-card"></i>
                                             </span>
                                             <input type="text" class="form-control"
                                                aria-describedby="basic-addon1" id="member_idcard" name="member_idcard"
                                               placeholder="Example: 572431003"   autocomplete="off" required aria-describedby="basic-addon1" onkeypress='validate(event)'  maxlength="9" >
                                      
                                    </div>
                                  </div>
                                  <div class="form-group">
                                         <div class="input-group">
                                             <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user"></i>
                                             </span>
                                             <input type="text" class="form-control" placeholder="Username"
                                                 id="member_username" name="member_username" autocomplete="off" required
                                                 aria-describedby="basic-addon1">
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <div class="input-group">
                                             <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-star"></i>
                                             </span>
                                          <input type="text" class="form-control" id="member_fullname"
                                                name="member_fullname" placeholder="Example: Naemah Nik-Abdullah "   autocomplete="off" required aria-describedby="basic-addon1">
                                         </div>
                                     </div>
                                      <div class="form-group">
                                         <div class="input-group">
                                             <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-lock"></i>
                                             </span>
                                             <input type="password" name="member_password" id="member_password" placeholder="Example: ********" onKeyUp="passwordStrength(this.value)"  class="form-control"  autocomplete="off" required aria-describedby="basic-addon1" />
                                         </div>
                                     </div>

              <center>
                <div id="passwordDescription"></div>
                <div id="passwordStrength" class="strength0"></div>

                <div class="form-group">
                                         <div class="input-group">
                                             <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-phone"></i>
                                             </span>
                                              <input type="text" class="form-control" id="member_phone"
                                                name="member_phone" placeholder="Example: 0831851521"  autocomplete="off" required aria-describedby="basic-addon1" onkeypress='validate(event)'  maxlength="10" >
                                         </div>
                                     </div>

                                      <div class="form-group">
                                         <div class="input-group">
                                             <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-envelope-square"></i>
                                             </span>
                                            <input type="text" class="form-control" id="member_email"
                                                name="member_email" placeholder="Example: Naemah123@gmail.com"  autocomplete="off"  aria-describedby="basic-addon1" 
pattern="^[a-zA-Z0-9]+@gmail\.com$" required

                                                 >
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

                                     <div class="input-group">
                                                           <i class="fa fa-transgender "></i>

                                             Gender: &nbsp;&nbsp; &nbsp;&nbsp;<label class="radio-inline"> <input
                                                     type="radio" name="member_gender" value="Male" required
                                                     aria-describedby="basic-addon1"> &nbsp;&nbsp; Male</label>
                                             &nbsp;&nbsp; &nbsp;&nbsp; <label class="radio-inline"><input type="radio"
                                                     name="member_gender" value="Female"
                                                     aria-describedby="basic-addon1"> &nbsp;&nbsp; Female</label>
                                         </div>

              </center>
                                  
              </div>
                                 
                  <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>
            
          </form>
          
        </div>
        
      </div>
      
    </div>
    
  </div>
  

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
