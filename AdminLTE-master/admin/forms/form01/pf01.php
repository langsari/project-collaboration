<?php
session_start();

require '../../../menu/connect.php';
include('../../../menu/function.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Dashboard 3</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'><link rel="stylesheet" href="style.css">
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
     
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
              <li class="nav-item d-none d-sm-inline-block">
        <li class="nav-item d-none d-sm-inline-block">
        <a href="../../auth/logout.php" class="nav-link">Logout</a>
      </li>
      </li>
     
       
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../student/index.php" class="brand-link">
      <img src="../../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ITPROMO</span>
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

                   <li class="nav-item has-treeview">
            <a href="../../../admin/index.php" class="nav-link">
             
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashbord
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
         
          <li class="nav-item has-treeview">
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
                <a href="../../../admin/add_proposal.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student project proposal</p>
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
                <a href="../../../admin/add_announcement.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Annoucements</p>
                </a>
              </li>
             
            </ul>
          </li>

      <li class="nav-item">
            <a href="#" class="nav-link">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Track Student Project</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


      <div class="container-fluid">
        <div class="row">
     <div class="col-md-12 ">
    <div class="card card-primary card-outline">


<!-- partial:index.partial.html -->

      
        <div class="form-wizard">
          <form action="check_pf1.php" method="post"  class="form-horizontal" enctype="multipart/form-data">
             
            <div class="form-wizard-header">
              <ul class="list-unstyled form-wizard-steps clearfix">
                <li class="active" ><span>1</span></li>
          <li><span>2</span></li>
                <li><span>3</span></li>
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
              <h5>PF01</h5>
            <?php

$id=$_GET['id'];
$strSQL = "SELECT advisergroup.*,  advisergroup.advisergroup_status,files.files_status,files.files_filename_proposal,files.by_officer,files.Owner,files.advisergroup_id,files.pf FROM advisergroup
LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
LEFT JOIN member ON advisergroup.member_id = member.member_id
WHERE advisergroup.advisergroup_id = '$id'  ";             


              
     if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){
            ?>

            <fieldset>
            </br>
              <h5>Proposal Project Approval Letter </h5>
           <h6><small class="text-muted">Approval Letter Agreed to Sign By Advisor</small>

              </h6>
                <div class="card">
                  <div class="card-block">
                    <table class="table">
                      <thead class="thead-default">
                        <tr>
                        <th>To do list</th>

                     
                          <th><font color='red'> Sign by advisor</font></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Proposal Topic Selection</td>
                          <td>
                            Status
                    <?php echo status_01($objResult->advisergroup_status); ?></span>
                  
                          </td>
                        </tr>
                        <tr>
                          <td>Select Advisor</td>
                          <td>
                            Status
                 <?php echo status_01($objResult->advisergroup_status); ?></span>
                  
                          </td>
                        </tr>

                        <tr>


                          <!--get Project Owner  -->

                          <td class="form-control" name="Owner" hidden="">
                            <?php echo get_member_list1($objResult->group_id); ?></td>


                          <!--get Topic   -->

                           <td class="hidden"> 3 chapter of Proposal

                            <input type="file" name="files_filename_proposal" id="files_filename_proposal"
                              required="required" />

                              <?php
                              $x=($objResult->files_filename_proposal);
                              if ($x>0) {
                                $class="btn btn-warning disabled";
                                $button="btn disabled";
                              }else{
                                $class="btn btn-info";
                                $button="btn btn-primary";
                              }
                              ?>

                          <button class="<?php echo $class; ?>"> Upload</button>

                



                          </td>
                          <td>
                            Staus
                            <?php echo status_01_file($objResult->files_status); ?>
                          </td>

  
                


                          <td>
<?php if( $objResult->files_filename_proposal != ""){ ?>
                      <a href="download.php?pdf=<?php echo $objResult->files_filename_proposal ;?>">
                        <span class='badge badge-primary'><i class="fa fa-download">Download 
                          <?php echo $objResult->files_filename_proposal ?> </i></a></span>
 <?php }else{?>
                    <a href="#"> <button class="btn btn-danger btn-xs">
                        <i class="glyphicon glyphicon-remove"> No file </i></button></a>
                    <?php } ?>
                              </td>
                        </tr>
                      </tbody>
                    </table>



                    <div class="progress">
                      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>

                  </div>
                </div>
              </fieldset>
            </fieldset>
          </form>

      
            <?php
                 } }
                   ?>

              <div class="form-group clearfix">

                <a href="../form02/pf02.php" class="form-wizard-next-btn float-right">Next</a>

              </div>
          
        </div>
      </div>
    </div>
  </section>

    <!-- /.content -->
 


   <link rel="stylesheet" href="../../../assets/comment/style.css">

   <div class="comments-app"  ng-controller="CommentsController as cmntCtrl">

  
  <!-- From -->
  <div class="comment-form">
    <!-- Comment Avatar -->
    <div class="comment-avatar">
         <img src="../../../dist/img/user1.png" >  
    </div>

    <form method="post" action="check_comment.php" class="form" name="form" ng-submit="form.$valid && cmntCtrl.addComment()" >

      <div class="form-row">
        <textarea
                  class="input"
                 name="com_content" id="com_content"
                  placeholder="Add comment..." class="form-control"
                  required></textarea>

             
      </div>

 <div class="col-md-9">
                <select class="form-control" name="member_id" hidden="">

                  <?php
                include '../menu/connect.php';
                $strSQL = "SELECT  member_fullname FROM member WHERE member_id ='".$_SESSION['id']."'";
                if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){
                    echo "<option value='".$objResult->member_fullname."'</option>";
                  }
                }else{
                }
                ?>
                </select>

              </div>

     
      <div class="form-row">
        <input type="submit" value="Add Comment">
      </div>
    </form>
  </div>



  <?php
            $g_id = get_group_id();
              $ag_id = get_ag_id($g_id);
              

    $strSQL = "SELECT advisergroup.*, partnergroup.group_number,partnergroup.group_id,advisergroup.member_id,advisergroup.group_id,comment.com_content,comment.com_date,comment.member_id,member.member_fullname FROM advisergroup
          LEFT JOIN comment ON advisergroup.advisergroup_id = comment.advisergroup_id

          LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id



        LEFT JOIN member ON advisergroup.member_id = member.member_id 
        WHERE advisergroup.advisergroup_id = '$ag_id'";                 
     if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){


   ?>



   <!-- Comment - Dummy -->
    <div class="comment">
      <!-- Comment Avatar -->
      <div class="comment-avatar">
         <img src="../../../dist/img/user1.png" >  
      </div>

      <!-- Comment Box -->
      <div class="comment-box">
                <div class="comment-text"><b><?php echo $objResult->member_id;?></b></div>

        <div class="comment-text"><?php echo $objResult->com_content;?></div>
        <div class="comment-footer">
          <div class="comment-info">
            <span class="comment-author">
                 Share by
            </span>
            <span class="comment-date"><?php echo $objResult->com_date;?></span>
          </div>

          <div class="comment-actions">
            <a href="#">Reply</a>
          </div>
     
        </div>
      </div>
    </div>      <?php
                 }
               }
                   ?>
  </div>
</div>

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