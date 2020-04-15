<?php
require 'menu/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>ITPROMO&TRACK |Topic Require
</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
        <a href="auth/login.php" class="nav-link">Login</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="auth/register.php" class="nav-link">Register</a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   <a href="index.php" class="brand-link">
        <img src="dist/img/n2.png" width="100%" >
        <span class="brand-text font-weight-light"></span>
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
            <a href="show_topic.php" class="nav-link active">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Topics
              </p>
            </a>
          </li>

    
          <li class="nav-item">
            <a href="proposal_project.php" class="nav-link ">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Proposal Project
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="guide.php" class="nav-link ">
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
              <li class="breadcrumb-item active">Topic Require</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <div class="content">
  
        <div class="row">
           <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                       


                     <?php

$id = $_GET['id'];


$strSQL = "SELECT  news_topic.news_id,news_topic.news_topic, news_topic.news_detail, news_topic.news_date,member.member_fullname FROM news_topic
          LEFT JOIN member ON news_topic.member_id = member.member_id
WHERE news_topic.news_id = '$id'";      
     if($objQuery = $db->query($strSQL)){
                  while($objResult = $objQuery->fetch_object()){

   ?>
   


  

   

            <table class="display datatable table table-stripped" cellspacing="0" width="100%">

                  <tbody>
                  
                      <td> 

                   
<img class="img-circle img-bordered-sm" src="dist/img/user.png" alt="user image"  width="30" height="30">
                        <span class="username" style="font-size: 15px;">
               &nbsp;&nbsp;<?php echo $objResult->member_fullname; ?> 
                         <span class="float-right">
                        <span class="description" style="font-size: 13px;">Shared publicly - <?php echo $objResult->news_date; ?></span>
                      </span>
                        <!-- /.user-block -->
              <p>   <class style="font-size: 16px;">     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b> <?php echo $objResult->news_topic; ?></b></p>
                      
                      <class style="font-size: 15px;">   <?php echo $objResult->news_detail; ?>
                     
  <p>

                 
                        </td> 

            <?php
                 }
               }
                   ?>
           
            
      </tbody>
      </table>
    </h6>
  </span>
</div>

</div>



   <?php

$id = $_GET['id'];


$strSQL = "SELECT  news_topic.news_id,news_topic.news_topic, news_topic.news_detail, news_topic.news_date,member.member_fullname,news_topic.parent_comment_id FROM news_topic
          LEFT JOIN member ON news_topic.member_id = member.member_id
WHERE news_topic.parent_comment_id = '$id'";      
     if($objQuery = $db->query($strSQL)){
                  while($objResult = $objQuery->fetch_object()){

   ?>
   


            <div class="callout callout-info">
                <img class="img-circle img-bordered-sm" src="dist/img/user.png" alt="user image"  width="30" height="30">
<class style="font-size: 15px;">   &nbsp;&nbsp;<?php echo $objResult->member_fullname;?>  
                   <span class="float-right">
                        <span class="description" style="font-size: 13px;">Shared publicly - <?php echo $objResult->news_date; ?></span>
                      </span> 
             <p>

             <class style="font-size: 16px;">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b> <?php echo $objResult->news_topic;?></b></br>
            <class style="font-size: 15px;">    <?php echo $objResult->news_detail;?>
            </div>
      

   


            <?php
                 }
               }
                   ?>
           


</div>







    <!-- /.content -->
 
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
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
