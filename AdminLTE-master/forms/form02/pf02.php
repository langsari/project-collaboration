<?php
session_start();
require '../../menu/connect.php';
include('../../menu/function.php');

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
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
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
                  echo '<a class="dropdown-item text-primary font-weight-light" href="../../student/read_noti.php?id='.$result['id'].'">'.$result['subject'].'</a>';
                  echo '<div class="dropdown-divider"></div>';

                }
              }
              else
              {
                echo '<a href="#" class="dropdown-item text-danger font-weight-light"><i class="fas fa-frown"></i> Sorry! No Notification</a>';
              }
            ?>
            <div class="dropdown-divider"></div>
          <a href="../../student/read_noti.php" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>


      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user"></i>
          <?php echo $_SESSION['name']; ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="../../auth/logout.php" class="dropdown-item">
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
   <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../student/index.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ITPROMO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user1.png" class="img-circle elevation-2" alt="User Image">
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
            <a href="../../student/index.php" class="nav-link ">

             
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashbord
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

         <li class="nav-item">
            <a href="../../student/infor_group.php" class="nav-link">
<i class="nav-icon fa fa-users" aria-hidden="true"></i>
              <p>
       Group Information              </p>
            </a>
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
                <a href="../../student/create_proposal.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Proposal</p>
                </a>
              </li>
              <li class="nav-item">
       <a href="../../forms/check_pf.php" class="nav-link active" >
                   <i class="far fa-circle nav-icon"></i>
                  <p>Project Track</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../student/proposal_project.php" class="nav-link">
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
                Schedule
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../student/display_schedule_proposal.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proposal Schedule</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../student/display_schedule_project.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Schedule</p>
                </a>
              </li>
              
            </ul>
          </li>


            <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                News
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../student/annouce.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Annoucements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../student/show_topic.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Topic Require</p>
                </a>
              </li>
              
            </ul>
          </li>

  <li class="nav-item">
            <a href="../../student/my_profile.php" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Personal Information
              </p>
            </a>
          </li>
    



          <li class="nav-item">
            <a href="../../student/guide.php" class="nav-link">
        <i class="nav-icon fab fa-glide-g"></i>
              <p>
                Guide
              </p>
            </a>
          </li>

                    <li class="nav-item">
            <a href="../../student/course_syllabus.php" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                course syllabus
              </p>
            </a>
          </li>

                    <li class="nav-item">
            <a href="../../student/form.php" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Forms
              </p>
            </a>
          </li>


  <li class="nav-item">
            <a href="../../student/booked.php" class="nav-link">
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
          <form action="" method="post" role="form">
            <div class="form-wizard-header">
              <ul class="list-unstyled form-wizard-steps clearfix">
                <li class="active"><span>1</span></li>
                <li class="active"><span>2</span></li>
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
              <h5>PF02</h5>


    


          <?php

            $g_id = get_group_id();
              $ag_id = get_ag_id($g_id);
    $strSQL = "SELECT advisergroup.*,  advisergroup.advisergroup_status,files.files_status,files.files_filename_proposal,files.by_officer,files.Owner,files.advisergroup_id,files.pf FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.advisergroup_id = '$ag_id'  ";             


       
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
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Student, Submit copies of Proposal, PF01 and related documentit 
                          </br><u>Condition:</u>
                          </br>(1) 4 copies of proposal, 1 copy for advisor and 3 for committees
                          </br>(2) submit proposal one week before presentation day
                          </td>
                          <td>
                           <?php echo status_02($objResult->by_officer); ?> 
                            <p>
                              <font color='red'> *For Officer</font>
                          </td>
                        </tr>

                      </tbody>
                    </table>


          
              </fieldset>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                  </br>
                  <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-volumenow="66" aria-volumemin="0" aria-volumemax="100" style="width: 100%">
                              </div>
                          </div>
                          <small>
                              57% Complete
                          </small>
            </fieldset>
          </form>

      
        <div class="form-group clearfix">

                  <a href="../form01/pf01.php" class="btn btn-danger float-left">Previous</a>
          <?php if ($objResult->by_officer != "Approve") {?>
            <button class="btn btn-warning disabled float-right" disabled="disabled">Next</button> 
          <?php }else{?>
            <a href="../form03/pf03.php"  >
            <button type="button" class="btn btn-danger float-right" >Next</button></a>
                       <?php }?>



              </div>

              </div>



              </div>


            
            <?php
                 } }
                   ?>

        </div>
      </div>
    </div>
  </section>

  <!-- /.content -->

 <div class="container-fluid">
        <div class="row">
     <div class="col-md-12 ">



   <link rel="stylesheet" href="../../assets/comment/style.css">


  
  <!-- From -->
  <div class="comment-form">
    <!-- Comment Avatar -->
    <div class="comment-avatar">
         <img src="../../dist/img/user1.png" >  
    </div>

    <form method="post" action="check_comment.php" class="form" name="form" ng-submit="form.$valid && cmntCtrl.addComment()" >

      <div class="form-row">
        <textarea  class="input" name="comment_content" id="comment_content" 
         placeholder="Add comment..." class="form-control"   required></textarea>

             
      </div>



  <?php
                        $strSQL="SELECT * FROM member  WHERE member_id='".$_SESSION['id']."'";
                        ?>

                        <?php
                        if ($result = $db->query($strSQL)) {
                          while ($row = $result->fetch_object()) {
                        ?>

                                <input type="text" class="form-control" name="member_id" value="<?php echo $_SESSION['name']; ?>" hidden>
            
<?php
  }
  }
?>

                   <input type="hidden" name="group_id" id="group_id"  />

     <input type="hidden" name="advisergroup_id" id="advisergroup_id"  />
          <input type="hidden" name="form_pf" id="form_pf"  value="2" />


     
      <div class="form-row">
        <input type="submit" value="Add Comment">
      </div>
    </form>
  </div>


  <?php
            $g_id = get_group_id();
              $ag_id = get_ag_id($g_id);
              

    $strSQL = "SELECT advisergroup.*, partnergroup.group_number,partnergroup.group_id,advisergroup.member_id,advisergroup.group_id,advisergroup.advisergroup_id,comment.comment_content,comment.date,comment.member_id,member.member_fullname FROM advisergroup
          LEFT JOIN comment ON advisergroup.advisergroup_id = comment.advisergroup_id

          LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id



        LEFT JOIN member ON advisergroup.member_id = member.member_id 

        WHERE advisergroup.advisergroup_id = '$ag_id' and form_pf='2' ";                 
     if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){


   ?>
 


   <div class="callout callout-info">
                <img class="img-circle img-bordered-sm" src="../../dist/img/user.png" alt="user image"  width="30" height="30">
<class style="font-size: 15px;">   &nbsp;&nbsp;<?php echo $objResult->member_id;?>  




                   <span class="float-right">
                        <span class="description" style="font-size: 13px;">Shared publicly - <?php echo $objResult->date; ?></span>
                      </span> 
             <p>

           
            <class style="font-size: 15px;">    <?php echo $objResult->comment_content;?>
            </div>
      



          <?php
                 }
               }
                   ?>   
           

    <!-- /.content -->
  </br>


     
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
 
<!-- ./wrapper -->

<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script  src="script.js"></script>



<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<script src="../../dist/js/demo.js"></script>
<script src="../../dist/js/pages/dashboard3.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
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
