
<?php
session_start();
require 'menu/connect.php';
include('menu/function.php');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ITPROMO&TRACK | All Project Topics
</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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

    </ul>

   

  
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        
               <li class="nav-item d-none d-sm-inline-block">
        <a href="auth/login.php" class="nav-link">Login</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="auth/register.php" class="nav-link">Register</a>
      </li>

    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ITPROMO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="Annoucement.php" class="nav-link ">
             
              <i class="nav-icon fa fa-bullhorn"></i>
              <p>
                Announcements
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

       
         
          <li class="nav-item">
            <a href="show_topic.php" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Topics
              </p>
            </a>
          </li>

    
          <li class="nav-item">
            <a href="proposal_project.php" class="nav-link active">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Proposal Project
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="guide.php" class="nav-link">
              <i class="nav-icon fa fa-glide-g"></i>
              <p>
                Guide
              </p>
            </a>
          </li>

                    <li class="nav-item">
            <a href="course_syllabus.php" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Schedule
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
              <li class="breadcrumb-item active">All Project Topics
</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <!-- Main content -->
    <section class="content">
   
        
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Final Project Topics</h3>
            </div>
            <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr align="center">
                  <th>No</th>   
                  <th>GroupID</th>
                  <th>Owner</th>
                  <th>Topic</th>
                  <th>Abstrack</th>
                  <th>Keyword</th>
                  <th>Field </th>
                 <!-- <th>Status</th>-->
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                        <?php
                  //   require 'menu/function.php';


       $strSQL = "SELECT topic_project.*,  topic_project.Owner,topic_project.topic_topic,topic_project.advisergroup_id,advisergroup.group_id,topic_project.topic_years,topic_project.status,topic_project.group_number,topic_project.topic_keyword,topic_project.topic_abstrack,topic_project.topic_fieldstudy FROM topic_project

          LEFT JOIN advisergroup ON topic_project.advisergroup_id = advisergroup.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id
         WHERE topic_project.advisergroup_id ";
        

       $i = 1;
   $count = 1;
              ?>
 <?php
     if($result = $db->query($strSQL)){
             while($objResult = $result->fetch_object()){
            ?>

                
                    <tr>
                   <td class="text-left">   <?php echo $count++; ?></td>
                    <td class="text-left"><?php echo $objResult->group_number; ?></td>
                    <td class="text-left"><?php echo substr($objResult->Owner, 0, 50); ?></td>
                    <td class="text-left"><?php echo $objResult->topic_topic; ?></td>
                    <td class="text-left"><?php echo substr($objResult->topic_abstrack, 0, 30); ?></td>
                    <td class="text-left"><?php echo $objResult->topic_keyword; ?></td>
                    <td class="text-left"><?php echo fieldstudy($objResult->topic_fieldstudy); ?></td>
                   <!-- <td class="text-left"><?php echo get_status_project($objResult->status); ?></td>-->
                  <td>               
                     <button type="button" class="btn btn-primary btn-xs" data-toggle="modal"
                        data-target="#show<?php echo $i; ?>">
                      <i class="fa fa-eye"></i></button>



                      </center>


          
<div class="modal fade" id="show<?php echo $i; ?>" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header bg-info">
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                         <h5 class="modal-title">View Proposal</h5>
                    </div>

                            <div class="modal-body">
        <form  method="post" action="check_status.php">
              <div class="form-group row margin-top-10">
                <div class="col-md-2">
                  <label class="control-label ">Owner</label>
                </div>
                <div class="col-md-10">
                  <?php echo $objResult->Owner; ?>
                  
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label ">Topic Project</label>
                </div>
                <div class="col-md-10">
<?php echo $objResult->topic_topic; ?>                </div>
              </div>




              <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label ">Keyword</label>
                </div>
                <div class="col-md-10">
                 <?php echo $objResult->topic_keyword; ?>
                </div>
              </div>



              <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label ">Field of study</label>
                </div>
                <div class="col-md-10">
                  <?php echo $objResult->topic_fieldstudy; ?>
                </div>
              </div>




              <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label ">Years</label>
                </div>
                <div class="col-md-10">
                <?php echo $objResult->topic_years; ?>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label ">Abstrack</label>
                </div>
                <div class="col-md-10">
                <?php echo $objResult->topic_abstrack; ?>
                </div>
              </div>

              <!--get project Proposal status -->

             
              <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label ">Advisor</label>
                </div>
                <div class="col-md-10">
<?php echo get_advisor($objResult->group_id); ?>                </div>
              </div>

                   <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label ">Committee</label>
                </div>
                <div class="col-md-10">
            <?php echo get_committee($objResult->group_id); ?>       
                     </div>
              </div>

                   <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label ">Status</label>
                </div>
                <div class="col-md-10">
                  <?php echo get_status_project($objResult->status); ?>
                </div>
              </div>

              </div>

      </div>






  


    </div>

    </form>
                            </div>
                          </div>
                        </div>

                    </td>
                    </tr>

                    <?php
                                    $i++;  
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


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
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