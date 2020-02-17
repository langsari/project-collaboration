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



            <a href="infor_group.php" class="nav-link ">
             
              <i class="nav-icon fa fa-group"></i>
              <p>
                Dashbord
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

         <li class="nav-item">
            <a href="infor_group.php" class="nav-link active">
              <i class="nav-icon fa fa-group"></i>
              <p>
       Group Information              </p>
            </a>
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
                  <p>Add Proposal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tables/data.html" class="nav-link">
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
                <a href="../Annoucement.php" class="nav-link">
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
            <a href="my_profile.php" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Personal Information
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
                 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Profile </h3>
              </div>
              <!-- /.card-header -->
          <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Student ID</th>
                      <th>Full Name</th>
                      <th style="width: 40px">Phone</th>
                    </tr>
                  </thead>

                       <?php

        $sql = "SELECT member_fullname, member_phone, member_idcard FROM member WHERE member_id='".$_SESSION['id']."'";  
              if($result = $db->query($sql)){
                while($objResult = $result->fetch_object()){
              ?>

                  <tbody>
                    <tr>
                  <td><?php echo $objResult->member_idcard; ?></td>
                  <td><?php echo $objResult->member_fullname; ?></td>
                  <td><?php echo $objResult->member_phone; ?></td>
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i>Add Group</h4>
      </div>
      <div class="modal-body">

                    <form class="form" method="post" action="student/check_newgroup.php">
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i>Join your partner</h4>
      </div>
      <div class="modal-body">
         
       <form id="add" name="add" method ="post" action ="student/check_join.php" onsubmit="return checkForm()" >
 
            

       <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center" style="width: 50px;">#</th>
                  <th>Group Member</th>
                  <th class="text-center" style="width: 100px;"></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
              <?php
                    // require 'menu/function.php';
              $sql = "SELECT * FROM partnergroup";
              if($rs = $db->query($sql)){
                while($row = $rs->fetch_object()){
              ?>

           <tr>
                  <td class="text-center"><?php echo $row->group_number; ?></td>
                  <td><?php echo get_member_list($row->group_id); ?></td>
                  <td class="text-center">
                    <a href="student/check_group.php?id=<?php echo $row->group_id; ?>" class="btn btn-primary btn-xs" onclick="return confirm_joingroup()"><i class="glyphicon glyphicon-plus-sign"></i> Join this Group</a>
                  </td>
                </tr>
              <?php
                }
              }else{
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
                 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Select Partner and topic </h3>
              </div>
              <!-- /.card-header -->
          <div class="card-body">
             

  <!-- Display Partner -->
     <button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#create_group" style="margin-bottom: 13px;">
   <i class="glyphicon glyphicon-plus"></i>Add Group
  </button>


   <table class="table table-bordered">                  <thead>                  

                                         My Group partner
                                           <tr>
                  <th>Student ID</th>
                  <th>Full Name</th>
                  <th>Phone</th>
                </tr>
                                        </thead>
                                        <tbody>


                                          <?php


              $group_id = get_group_id($_SESSION['id']);
             
                $sql = "SELECT member_fullname, member_phone, member_idcard FROM member WHERE group_id = '$group_id'";

              if($rs = $db->query($sql)){
                while($row = $rs->fetch_object()){
              ?>
                <tr>
                  <td><?php echo $row->member_idcard; ?></td>
                  <td><?php echo $row->member_fullname; ?></td>
                  <td><?php echo $row->member_phone; ?></td>
                </tr>
              <?php
                }
              }else{
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


<div class="col-md-6">
                 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Select advisor</h3>
              </div>
                             <div class="card-body">




  <button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#selectadvisor" style="margin-bottom: 13px;">
   <i class="glyphicon glyphicon-plus"></i>Select Advisor
  </button>


<!-- Modal -->
<div class="modal fade" id="selectadvisor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i>Select your advisor</h4>
      </div>
      <div class="modal-body">
         
       <form id="add" name="add" method ="post" action ="student/check_selectadvisor.php" onsubmit="return checkForm()" >
  
                                               
 <div class="form-group row">           
       <div class="col-md-3">
             <label class="control-label col-form-label">Choose advisor</label>
           </div>
             <div class="col-md-9">
             <select class="form-control" name="member_id">
              <option value="no">- Lecturer Name -</option>
                <?php
                
                $strSQL = "SELECT member_id, member_fullname FROM member WHERE member_pos ='Lecturer'";
                if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){
                    echo "<option value='".$objResult->member_id."'>".$objResult->member_fullname."</option>";
                  }
                }else{
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
                $strSQL = "SELECT admin_id FROM member WHERE member_id ='".$_SESSION['id']."'";
                if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){
                    echo "<option value='".$objResult->admin_id."'></option>";
                  }
                }else{
                }
                ?>
              </select>
      
            </div>
          </div>



           <input type="hidden" name="group_id" value="<?php echo $group_id; ?>">
            <input type="hidden" name="advisergroup_id" value="<?php echo $advisergroup_id; ?>">
          
             <button type="submit" class="btn btn-primary btn-lg btn-block">Send request</button>
                          
</div>
</div>
</div>
</div>


    <!-- END Select Advisor  -->


              
          

<table class="table table-bordered">                   
 <thead>                  

            <tr>
              <th>GroupNo</th>
              <th>GroupCode</th>
              <th>Title project</th>
              <th>Advisor</th>
              <th>Status</th>
           </tr>
          </thead>
    <tbody>

    <?php

$my_id = $_SESSION['id'];
$my_group_id = get_group_id($my_id);

//Initialise Value to variable


$sql = "SELECT advisergroup.advisergroup_id, advisergroup.advisergroup_status,advisergroup.advisergroup_topic,advisergroup.group_id,member.member_id,member.member_fullname FROM advisergroup
         JOIN member ON advisergroup.member_id = member.member_id
        
         WHERE advisergroup.group_id = '$my_group_id'";

              if($rs = $db->query($sql)){
                while($row = $rs->fetch_object()){
              ?>
                <tr>                 
                  <td><?php echo get_group_id($row->group_id); ?></td>
                  <td><?php echo get_groupcode($row->group_id); ?></td>
                  <td><?php echo $row->advisergroup_topic; ?></td>

                  <td><?php echo $row->member_fullname; ?></td>
                          

 <td class="text-center"><?php echo status_01($row->advisergroup_status);?><font color='red'> *For Advisor</font> </td>
                </tr>


               
              <?php
                }
              }else{
              }
              ?>
                                         </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    

  <!-- END FORM Partner -->




 <div class="col-md-6">
                 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Committee </h3>
              </div>
              <!-- /.card-header -->
           <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                          
                                         
                                           <tr>
                  <th>Lecturer ID</th>
                  <th>Full Name</th>
                  <th>Phone</th>
                </tr>
                                        </thead>
                                        <tbody>


                                          <?php

             
          $sql = "SELECT committeegroup.committeegroup_id, member.member_fullname,member.member_idcard ,member.member_phone FROM committeegroup
          LEFT JOIN member ON committeegroup.member_id = member.member_id
          WHERE committeegroup.group_id = '$group_id'";

              if($rs = $db->query($sql)){
                while($row = $rs->fetch_object()){
              ?>
                <tr>
                  <td><?php echo $row->member_idcard; ?></td>
                  <td><?php echo $row->member_fullname; ?></td>
                  <td><?php echo $row->member_phone; ?></td>
                </tr>
              <?php
                }
              }else{
              }
              ?>
                                          
                                     </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->



    <!-- /.content -->
 
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

