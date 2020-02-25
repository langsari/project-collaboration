<script type="text/javascript">
  function edit_ps(id) {
    $.ajax({
      url: 'read_more.php',
      data: ({
        id: id
      }),
      type: 'POST',
      dataType: 'JSON',
      success: function (data) {
        $.each(data, function (i, o) {
          $('#Owner').val(o.Owner);
          $('#topic_topic').val(o.topic_topic);
          $('#topic_abstrack').val(o.topic_abstrack);
          $('#topic_keyword').val(o.topic_keyword);
          $('#topic_fieldstudy').val(o.topic_fieldstudy);
          $('#topic_years').val(o.topic_years);
          $('#advisergroup_id').val(o.advisergroup_id);
          $('#topic_id').val(o.topic_id);
        });
      },
      error: function (request, error) {
        console.log(error);
        console.log(arguments);
        alert("Network Error!");
      }
    });
  }

  function confirm_deleteps() {
    var x = confirm("Please confirm to delete!");
    if (x) {
      return true;
    } else {
      return false;
    }
  }
</script>

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

  <title>ITPROMO</title>

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
    <ul class="navbar-nav ml-auto">
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
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ITPROMO</span>
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
            <a href="advisor_request.php" class="nav-link ">
             <i class="nav-icon fa fa-paper-plane"></i>
              <p>
       Request              </p>
            </a>
          </li>
    
 
  
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Projects
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="proposal_status.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proposal Status</p>
                </a>
              </li>
              <li class="nav-item">
       <a href="../view track/student_track.php" class="nav-link" >
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
                       <li class="nav-item">
                <a href="manage_mark.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Mark</p>
                </a>
              </li>

                       <li class="nav-item">
                <a href="give_mark.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Give Mark as a Committee</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
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


    

  <li class="nav-item has-treeview">
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
                <tr>
                  <th>No</th>
                <th>Group Code</th>
                <th>Owner Project</th>
                <th>Topic</th>

                <th>Status</th>
                <th>View</th>

                </tr>
                </thead>
                <tbody>
                      <?php
                  //   require 'menu/function.php';
$my_id = $_SESSION['id'];
$strSQL = "SELECT advisergroup.*,  topic_project.topic_id,topic_project.Owner,topic_project.topic_topic,topic_project.advisergroup_id,advisergroup.group_id,topic_project.topic_years,topic_project.status,topic_project.group_number FROM advisergroup
          LEFT JOIN topic_project ON advisergroup.advisergroup_id = topic_project.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        
         WHERE advisergroup.member_id = '$my_id'";
              ?>
 <?php
     if($result = $db->query($strSQL)){
             while($objResult = $result->fetch_object()){
            ?>

                
                    <tr>
                   <td class="text-left"><?php echo $objResult->topic_id; ?></td>
                <td class="text-left"><?php echo $objResult->group_number; ?></td>

                <td class="text-left"><?php echo substr($objResult->Owner, 0, 50); ?></td>
                <td class="text-left"><?php echo $objResult->topic_topic; ?></td>



                <td class="text-left"><?php echo get_status_project($objResult->status); ?></td>


                <td> <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editPS"
                    onclick="edit_ps(<?php echo $objResult->advisergroup_id; ?>)"><i class="fa fa-edit"></i></button>
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

    <!-- Modal -->
                     <div class="modal fade" id="editPS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header bg-info">
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                         <h5 class="modal-title">Edit Proposal Status</h5>
                    </div>

                            <div class="modal-body">
        <form  method="post" action="check_status.php">
              <div class="form-group row margin-top-10">
                <div class="col-md-2">
                  <label class="control-label ">Owner</label>
                </div>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="Owner" id="Owner" disabled="">
                  
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label col-form-label">Topic Project</label>
                </div>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="topic_topic" id="topic_topic" disabled="">
                </div>
              </div>




              <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label col-form-label">Keyword</label>
                </div>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="topic_keyword" id="topic_keyword" disabled="">
                </div>
              </div>



              <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label col-form-label">Field of study</label>
                </div>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="topic_fieldstudy" id="topic_fieldstudy">
                </div>
              </div>




              <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label col-form-label">Years</label>
                </div>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="topic_years" id="topic_years" disabled="">
                </div>
              </div>





              <div class="form-group row">
                <div class="col-md-2">
                  <label class="control-label col-form-label">Placeholder</label>
                </div>
                <div class="col-md-10">
                  <textarea class="form-control" rows="10" name="topic_abstrack" id="topic_abstrack"
                    required></textarea>
                </div>
              </div>

              <!--get project Proposal status -->

              <div class="form-group row">
                <div class="col-md-3">
                  <label class="control-label col-form-label">Proposal status</label>

                </div>
                <div class="col-md-9">
                  <select class="form-control" name="status" id="status">
                    <option value="1">Wait for the proposal Trail</option>
                    <option value="2">Revision Proposal</option>
                    <option value="3">OK</option>
                    <option value="4">Reject</option>
                    <option value="5">Cancel</option>
                    <option value="6">Graduate</option>
                    <option value="7">Not Pass</option>

                  </select>

                </div>

              </div>

      </div>




      <input type="hidden" name="advisergroup_id" id="advisergroup_id">

      <input type="hidden" name="topic_id" id="topic_id">


  <div class="modal-footer">
   <button type="submit" class="btn btn-success">
    <i class="glyphicon glyphicon-ok"></i>
                                                                        Submit</button>                    </div>



    </div>

    </form>
    </fieldset>




    </form>
  </div>
</div>
</div>
</div>


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
