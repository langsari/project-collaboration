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
     <?php
  $con = mysqli_connect('localhost','root','','itpromo_track');
  $query="SELECT * FROM notify WHERE status=0";
  $query_num=mysqli_query($con,$query);
  $count=mysqli_num_rows($query_num);

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
              $con = mysqli_connect('localhost','root','','itpromo_track');
              $sq="SELECT * FROM notify WHERE status=0";
              $qu_num=mysqli_query($con,$query);
              if (mysqli_num_rows($qu_num)>0) 
              {
                while($result=mysqli_fetch_assoc($qu_num))
                {
                  echo '<a class="dropdown-item text-primary font-weight-light" href="read_noti.php?id='.$result['id'].'">'.$result['subject'].'</a>';
                  echo '<div class="dropdown-divider"></div>';

                }
              }
              else
              {
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

     
  <?php 
     $my_id = $_SESSION['id'];
  $con = mysqli_connect('localhost','root','','itpromo_track');


   $query="SELECT * FROM files WHERE by_officer = 'Waiting' or  by_officer05='Waiting' 
   or by_officer09='Waiting' or  by_officer13='Waiting' " ;

  $query_num=mysqli_query($con,$query);
  $count=mysqli_num_rows($query_num);
  ?>

         <li class="nav-item">
            <a href="officer_request.php" class="nav-link">
             <i class="nav-icon fa fa-paper-plane"></i>
              <p>
       Request 
               <span class="badge badge-danger right"><?php echo $count; ?></span>       
             </p>
            </a>
          </li>
    
    
 
  <li class="nav-item">
                  <a href="../officer/student_track.php" class="nav-link">
             <i class="nav-icon fa fa-paper-plane"></i>
              <p>
       Student Track              </p>
            </a>
          </li>
    

 
            <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Schedule
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="create_schedule_proposal.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Schedule Proposal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="create_schedule_project.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Schedule Project</p>
                </a>
              </li>
              
            </ul>
          </li>




    

            <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                News
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Annoucement.php" class="nav-link ">
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
                <a href="proposal_project.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Project Topics</p>
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

      


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
  
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
     
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Request
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
   <b>        
PROPOSAL PROJECT AND PF01 REQUEST (PF01)
</b>
                 
            </div>
            <!-- /.card-header -->
       <div class="card-body">
              <table  id="example1" class="table table-sm">
                <thead class="thead-light">
                <tr>
                     <th style="font-size: 15px;" width="5%" class="text-left">No</th>
                <th style="font-size: 15px;" width="20%" class="text-left"> Title project</th>
                  <th style="font-size: 15px;" width="20%" class="text-left">Student</th>
                 <th style="font-size: 15px;" width="10%" class="text-left">Advisor</th>
                 <th style="font-size: 15px;" width="10%" class="text-left">Files</th>          
                    <th style="font-size: 15px;" width="10%" class="text-left">View</th>
                <th style="font-size: 15px;" width="10%" class="text-left">Options</th>
                </tr>
                </thead>
                <tbody>
                       
 <?php

require '../menu/connect.php';
$my_id = $_SESSION['id'];

    $strSQL = "SELECT advisergroup.*,  files.files_status,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic ,files.by_officer,advisergroup.advisergroup_id FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id

        WHERE advisergroup.member_id   and files.files_status ='Approve'  ";
   $i = 1;
   $count = 1;

              if($rs = $db->query($strSQL)){
                while($objResult = $rs->fetch_object()){
              ?>

                
                    <tr>
                        
            <td class="text-left" style="font-size: 14px;" width="5%" >  <?php echo $count++; ?></td>
       <td class="text-left" style="font-size: 14px;" width="25%" ><?php echo get_topic($objResult->group_id); ?></td>
     <td class="text-left" style="font-size: 14px;" width="25%" ><?php echo get_member_list($objResult->group_id); ?></td>


        
              <td class="text-left" style="font-size: 14px;" width="15%" ><?php echo get_advisor($objResult->group_id); ?></td>

             <td class="text-left" style="font-size: 14px;" width="8%" >
<?php if( $objResult->files_filename_proposal != ""){ ?>
                      <a href="../advisor/download.php?pdf=<?php echo $objResult->files_filename_proposal ;?>">
                      <span class='badge badge-success btn-xs'>Download </a></span>
                       </a>
 <?php }else{?>
                    <a href="#"> <button class="btn btn-danger btn-xs">
                        <i class="glyphicon glyphicon-remove"> No file </i></button></a>
                    <?php } ?>
                              </td>

          <td class="text-left" style="font-size: 14px;" width="8%" >

  <a href="form02.php?id=<?php echo $objResult->group_id;?>"class="btn btn-primary btn-xs">  <i class="fa fa-eye" title="Detail"> View </i></a>

         

                </td>

  <td class="text-left" style="font-size: 14px;" width="2%" >



 <?php if ($objResult->by_officer != "Approve") {?>        
    <a href="check_approved.php?id=<?php echo $objResult->files_id; ?>"  >

            <button type="button" class="btn btn-success btn-xs  float-left" title="Approve" >
              <i class='fa fa-check'></i></button>
          <?php }else{?>

            <button class="btn btn-warning btn-xs disabled float-left" disabled="disabled" title="has been Approved">      <i class='fa fa-check'></i></button> 

          </a>
                       <?php }?>
              

<a href="reject_02.php?id=<?php echo $objResult->advisergroup_id; ?>"
                    class="btn btn-danger btn-xs float-right" title="Not Approve"><i
                      class='fa fa-times'></i> </a>

</td>
               
                    </tr>          


                                    <?php
                                                             $i++;

    }
               }
                   ?>


                </tbody>
               

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
     



<!-- Main content -->
   
        
          <div class="card">
            <div class="card-header">
           <b>
COMPLETE PROJECT PROPOSAL (PF05)</b>
                 
            </div>
            <!-- /.card-header -->
        

       <div class="card-body">
              <table  id="example2" class="table table-sm">
                <thead class="thead-light">
                <tr>
                     <th style="font-size: 15px;" width="5%" class="text-left">No</th>
                <th style="font-size: 15px;" width="20%" class="text-left"> Title project</th>
                  <th style="font-size: 15px;" width="20%" class="text-left">Student</th>
                 <th style="font-size: 15px;" width="10%" class="text-left">Advisor</th>
                 <th style="font-size: 15px;" width="10%" class="text-left">Files</th>          
                    <th style="font-size: 15px;" width="10%" class="text-left">View</th>
                <th style="font-size: 15px;" width="10%" class="text-left">Options</th>
                </tr>
                </thead>
                <tbody>

                       
       <?php




require '../menu/connect.php';
$my_id = $_SESSION['id'];

    $strSQL = "SELECT advisergroup.*,  files.files_status,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic ,files.status_advisor,files.by_officer05,advisergroup.advisergroup_id FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id

        WHERE advisergroup.member_id  AND files.by_advisor04 = 'Pass' 
        Order By files_id
               ";
  $i = 1;
   $count = 1;
       
              if($rs = $db->query($strSQL)){
                while($objResult = $rs->fetch_object()){
              ?>


                
                     <tr>
                        
            <td class="text-left" style="font-size: 14px;" width="5%" >  <?php echo $count++; ?></td>
       <td class="text-left" style="font-size: 14px;" width="25%" ><?php echo get_topic($objResult->group_id); ?></td>
     <td class="text-left" style="font-size: 14px;" width="25%" ><?php echo get_member_list($objResult->group_id); ?></td>


        
              <td class="text-left" style="font-size: 14px;" width="15%" ><?php echo get_advisor($objResult->group_id); ?></td>

             <td class="text-left" style="font-size: 14px;" width="8%" >
<?php if( $objResult->files_filename_proposal != ""){ ?>
                      <a href="../advisor/download.php?pdf=<?php echo $objResult->files_filename_proposal ;?>">
                      <span class='badge badge-primary'><i class="fa fa-download">Download 
                           </i></a></span>
                       </a>
 <?php }else{?>
                    <a href="#"> <button class="btn btn-danger btn-xs">
                        <i class="glyphicon glyphicon-remove"> No file </i></button></a>
                    <?php } ?>
                              </td>

          <td class="text-left" style="font-size: 14px;" width="8%" >

  <a href="form05.php?id=<?php echo $objResult->group_id;?>"class="btn btn-primary btn-sm">  <i class="fa fa-eye" title="Detail"></i></a>

         

                </td>

  <td class="text-left" style="font-size: 14px;" width="2%" >



 <?php if ($objResult->by_officer05 != "Pass") {?>        
    <a href="check_pf05.php?id=<?php echo $objResult->files_id; ?>"  >

            <button type="button" class="btn btn-success btn-xs  float-left" >
              <i class='fa fa-check'></i></button>
          <?php }else{?>

            <button class="btn btn-warning btn-xs disabled float-left" disabled="disabled">      <i class='fa fa-check'></i></button> 

          </a>
                       <?php }?>
              

<a href="reject05.php?id=<?php echo $objResult->advisergroup_id; ?>"
                    class="btn btn-danger btn-xs float-right" title="Comfirm"><i
                      class='fa fa-times'></i> </a>

</td>
               
                    </tr>          


                                    <?php
                                                             $i++;

    }
               }
                   ?>



                </tbody>
               

              </table>
            </div>
            <!-- /.card-body -->
          </div>



 <div class="card">
            <div class="card-header">
   <b>        
OFFICER RECEIVE COPY OF 5 CHAPTERS PROJECT (PF09)
</b>
                 
            </div>
            <!-- /.card-header -->
          
            
       <div class="card-body">
              <table  id="example3" class="table table-sm">
                <thead class="thead-light">
                <tr>
                     <th style="font-size: 15px;" width="5%" class="text-left">No</th>
                <th style="font-size: 15px;" width="20%" class="text-left"> Title project</th>
                  <th style="font-size: 15px;" width="20%" class="text-left">Student</th>
                 <th style="font-size: 15px;" width="10%" class="text-left">Advisor</th>
                 <th style="font-size: 15px;" width="10%" class="text-left">Files</th>          
                    <th style="font-size: 15px;" width="10%" class="text-left">View</th>
                <th style="font-size: 15px;" width="10%" class="text-left">Options</th>
                </tr>
                </thead>
                <tbody>


                      <?php




require '../menu/connect.php';
$my_id = $_SESSION['id'];

    $strSQL = "SELECT advisergroup.*,  files.files_status,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic ,files.by_advisor08,files.by_officer09,files.files_filename_project FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id

        WHERE advisergroup.member_id  AND  by_advisor08='Pass'
        Order By files_id
               ";
  $i = 1;
   $count = 1;
              if($rs = $db->query($strSQL)){
                while($objResult = $rs->fetch_object()){
              ?>

                
                    <tr>

                           <td class="text-left" style="font-size: 14px;" width="5%" >  <?php echo $count++; ?></td>
       <td class="text-left" style="font-size: 14px;" width="25%" ><?php echo get_topic($objResult->group_id); ?></td>
     <td class="text-left" style="font-size: 14px;" width="25%" ><?php echo get_member_list($objResult->group_id); ?></td>


        
              <td class="text-left" style="font-size: 14px;" width="15%" ><?php echo get_advisor($objResult->group_id); ?></td>

             <td class="text-left" style="font-size: 14px;" width="8%" >
<?php if( $objResult->files_filename_project != ""){ ?>
                      <a href="../advisor/download.php?pdf=<?php echo $objResult->files_filename_project ;?>">
                      <span class='badge badge-primary'><i class="fa fa-download">Download 
                           </i></a></span>
                       </a>
 <?php }else{?>
                    <a href="#"> <button class="btn btn-danger btn-xs">
                        <i class="glyphicon glyphicon-remove"> No file </i></button></a>
                    <?php } ?>
                              </td>

          <td class="text-left" style="font-size: 14px;" width="8%" >

  <a href="form09.php?id=<?php echo $objResult->group_id;?>"class="btn btn-primary btn-sm">  <i class="fa fa-eye" title="Detail"> View</i></a>

         

                </td>

  <td class="text-left" style="font-size: 14px;" width="2%" >



 <?php if ($objResult->by_officer09 != "Approve") {?>        
    <a href="check_pf09.php?id=<?php echo $objResult->files_id; ?>"  >

            <button type="button" class="btn btn-success btn-xs  float-left" >
              <i class='fa fa-check'></i></button>
          <?php }else{?>

            <button class="btn btn-warning btn-xs disabled float-left" disabled="disabled">      <i class='fa fa-check'></i></button> 

          </a>
                       <?php }?>
              

<a href="reject_09.php?id=<?php echo $objResult->advisergroup_id; ?>"
                    class="btn btn-danger btn-xs float-right" title="Comfirm"><i
                      class='fa fa-times'></i> </a>

</td>
               
                    </tr>          


                                    <?php 
                                       $i++;
    }
               }
                   ?>


                </tbody>
               

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
     




 <div class="card">
            <div class="card-header">
   <b>        
Officer Receive Project Booked  
 (PF13)
</b>
                 
            </div>
            <!-- /.card-header -->
          
            
       <div class="card-body">
              <table  id="example4" class="table table-sm">
                <thead class="thead-light">
                <tr>
                     <th style="font-size: 15px;" width="5%" class="text-left">No</th>
                <th style="font-size: 15px;" width="20%" class="text-left"> Title project</th>
                  <th style="font-size: 15px;" width="20%" class="text-left">Student</th>
                 <th style="font-size: 15px;" width="10%" class="text-left">Advisor</th>
                 <th style="font-size: 15px;" width="10%" class="text-left">Files</th>          
                    <th style="font-size: 15px;" width="10%" class="text-left">View</th>
                <th style="font-size: 15px;" width="10%" class="text-left">Options</th>
                </tr>
                </thead>
                <tbody>


                      <?php




require '../menu/connect.php';
$my_id = $_SESSION['id'];

    $strSQL = "SELECT advisergroup.*,  files.files_status,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic ,files.by_officer13,files.by_advisor12,files.complete_project FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id

        WHERE advisergroup.member_id  AND by_officer13='Waiting'
        Order By files_id
               ";
  $i = 1;
   $count = 1;
              if($rs = $db->query($strSQL)){
                while($objResult = $rs->fetch_object()){
              ?>

                
                    <tr>

                           <td class="text-left" style="font-size: 14px;" width="5%" >  <?php echo $count++; ?></td>
       <td class="text-left" style="font-size: 14px;" width="25%" ><?php echo get_topic($objResult->group_id); ?></td>
     <td class="text-left" style="font-size: 14px;" width="25%" ><?php echo get_member_list($objResult->group_id); ?></td>


        
              <td class="text-left" style="font-size: 14px;" width="15%" ><?php echo get_advisor($objResult->group_id); ?></td>

             <td class="text-left" style="font-size: 14px;" width="8%" >
<?php if( $objResult->complete_project != ""){ ?>
                      <a href="../advisor/download_pdf.php?pdf=<?php echo $objResult->complete_project ;?>">
                      <span class='badge badge-primary'><i class="fa fa-download">Download 
                           </i></a></span>
                       </a>
 <?php }else{?>
                    <a href="#"> <button class="btn btn-danger btn-xs">
                        <i class="glyphicon glyphicon-remove"> No file </i></button></a>
                    <?php } ?>
                              </td>


          <td class="text-left" style="font-size: 14px;" width="8%" >

  <a href="form13.php?id=<?php echo $objResult->group_id;?>"class="btn btn-primary btn-sm">  <i class="fa fa-eye" title="Detail"></i></a>

         

                </td>


  <td class="text-left" style="font-size: 14px;" width="10%" >



 <?php if ($objResult->by_officer13 != "Pass") {?>        
    <a href="check_pf13.php?id=<?php echo $objResult->files_id; ?>"  >

            <button type="button" class="btn btn-success btn-xs  float-left" >
              <i class='fa fa-check'></i></button>
          <?php }else{?>

            <button class="btn btn-warning btn-xs disabled float-left" disabled="disabled">      <i class='fa fa-check'></i></button> 

          </a>
                       <?php }?>
              

<a href="reject_13.php?id=<?php echo $objResult->advisergroup_id; ?>"
                    class="btn btn-danger btn-xs float-right" title="Comfirm"><i
                      class='fa fa-times'></i> </a>

</td>
               
                    </tr>          


                                    <?php 
                                       $i++;
    }
               }
                   ?>


                </tbody>
               

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
     </br>
 
      <!-- /.row -->
    </section>
    <!-- /.content -->



  </div>


  <!-- /.content-wrapper -->
<footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.3-pre
      </div>
      <class style="font-size: 14px;">  <strong>Copyright © 2019-2020 <a href="#">IT PROJECT</a>.</strong> All rights reserved.
    </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
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
    $("#example2").DataTable();
    $("#example3").DataTable();
    $("#example4").DataTable();

  });
</script>
</body>
</html>
