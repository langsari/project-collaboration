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
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
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
            <a href="index.php" class="nav-link">
             
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashbord
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

         <li class="nav-item">
            <a href="infor_group.php" class="nav-link">
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
                <a href="create_proposal.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Proposal</p>
                </a>
              </li>
              
              <li class="nav-item">
       <a href="../forms/check_pf.php" class="nav-link" >
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
                <a href="annouce.php" class="nav-link">
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
        <i class="nav-icon fab fa-glide-g"></i>
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
  

  <!-- PAGE CONTENT -->
  <?php
  // require 'menu/function.php';
  $my_id = $_SESSION['id'];
  $my_group_id = get_group_id($my_id);
  //Initialise Value to variable
      $strSQL="SELECT advisergroup.*,advisergroup.advisergroup_id, advisergroup.advisergroup_status,advisergroup.advisergroup_topic,advisergroup.group_id, member.member_id,member.member_fullname,member.member_idcard ,topic_project.topic_id,topic_project.topic_abstrack,topic_project.topic_keyword ,topic_project.topic_years,topic_project.topic_fieldstudy,partnergroup.group_id,partnergroup.group_number,topic_project.status
        FROM advisergroup
        LEFT JOIN topic_project ON advisergroup.advisergroup_id = topic_project.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id
        WHERE advisergroup.group_id = '$my_group_id' AND partnergroup.group_id= '$my_group_id'";
      if ($result = $db->query($strSQL)) {
          while ($objResult = $result->fetch_object()) {
        ?>

        <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add proposal</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body ">
          <div class="row d-flex align-items-stretch">
            <div class="col-15 col-sm-8 col-md-12 d-flex align-items-stretch">
              

                    <form id="add" name="add" method ="post" action ="check_proposal.php" onsubmit="return checkForm()">
                      <legend class="text-bold margin-top-40">Add proposal</legend>


                        <?php
                        $strSQL="SELECT * FROM member  WHERE member_id='".$_SESSION['id']."'";
                        ?>

                        <?php
                        if ($result = $db->query($strSQL)) {
                          while ($row = $result->fetch_object()) {
                        ?>

                        <?php
                        $sql ="SELECT * FROM member WHERE group_id = '$my_group_id'";
                        if ($rs = $db->query($sql)) {
                          if ($rs->num_rows > 0) {
                            while ($ro = $rs->fetch_object()) {
                              
                            }
                          }
                        }
                        ?>

                        

                        <div class="row">

                          <div class="col-md-10">

<!--get ID Project  -->
                            <div class="form-group row">
                              <div class="col-md-3">
                                <label class="control-label ">ID Project</label>
                                
                              </div>
                              <div class="col-md-9">
                                <td class="form-control" name="group_number" > <?php echo $objResult->group_number; ?>
                                
                              </div>
                            </div>



<!--get Project Owner  -->
                            <div class="form-group row">
                              <div class="col-md-3">
                                <label class="control-label ">Project Owner</label>
                                
                              </div>
                              <div class="col-md-9">
                                
                                <td class="form-control" name="Owner"><?php echo get_member_list($row->group_id); ?></td>
                                
                              </div>
                            </div>
<!--get Topic   -->

                            <div class="form-group row">
                              <div class="col-md-3">
                                <label class="control-label col-form-label">Topic</label>
                                
                              </div>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="topic_topic" value="<?php echo $objResult->advisergroup_topic; ?>">
                                
                              </div>
                          
                            </div>
<!--get project Abstarck   -->

                     

<!--get project Keyword  -->      

                             <div class="form-group row">
                              <div class="col-md-3">
                                <label class="control-label col-form-label">Keyword </label>
                                
                              </div>
                              <div class="col-md-9">
                                <input type="text" class="form-control" id="topic_keyword" name="topic_keyword" value="<?php echo $objResult->topic_keyword; ?>" required >
                                
                              </div>
                               
                             </div>

<!--get project Filed of Study -->

                                            <div class="form-group row">           
                                                 <div class="col-md-3">
                                          <label class="control-label col-form-label">Filed of Study</label>
                                             </div>
                                         <div class="col-md-9">
                                <select class="form-control" name="topic_fieldstudy" id="topic_fieldstudy" onChange="getTeam(this.value);"  >
<option  value="<?php echo $objResult->topic_id;?>"><?php echo $objResult->topic_fieldstudy;?> </option>
                                  <option value="Software Engineering">Software Engineering</option>
                                  <option value="Computer Multimedia">Computer Multimedia</option>
                                  <option value="Computer Networking">Computer Networking</option>

                                        </select>
                                          </div>
                                              </div>


<!--get project Years -->

                                            <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="control-label col-form-label">Years</label>
                                                    </div>
                                                    <div class="col-md-9">
                                <input type="DATE" class="form-control" id="topic_years" name="topic_years" value="<?php echo $objResult->topic_years; ?>"   autocomplete="off" required aria-describedby="basic-addon1" >
                                                    </div>
                                                </div>
   
<!--get project Advisors -->

                             <div class="form-group row">
                              <div class="col-md-3">
                                <label class="control-label col-form-label">Advisor </label>
                                
                              </div>
                              <div class="col-md-9">
                                <input type="text"    class="form-control"  name="adviser" 
                                         value="<?php echo get_advisor($objResult->group_id); ?>">
                                
                              </div>
                               
                             </div>
<!--get project Proposal status -->
                      
                             <div class="form-group row">
                              <div class="col-md-3">
                                <label class="control-label ">Proposal status</label>
                                
                              </div>
                              <div class="col-md-9">
  <td class="form-control" name="status"><?php echo get_status_project($objResult->status); ?></td>

                              </div>
                               
                             </div>

                                    <div class="form-group row">
                              <div class="col-md-3">
                                <label class="control-label col-form-label">Abstarck</label>
                                
                              </div>
                              <div class="col-md-9">



  <textarea type="text" style="width: 600px; height: 200px"  class="form-control" id="topic_abstrack"
   name="topic_abstrack"> <?php echo $objResult->topic_abstrack; ?> </textarea>

                              </div>
                              
                            </div>
                            
                          </div>

                          <input type="text" class="form-control" id="position" name="position" value="2" hidden="">



<td>
  <div align="center"> <input type="hidden" name="topic_id" value="<?php echo $objResult->topic_id; ?>" /></div>
</td>
<input type="hidden" name="group_number" value="<?php echo $objResult->group_number; ?>" />
</td>
</div>
</div>
</div>

<center>
                          <button ype="submit" class="btn btn-primary ">Create</button>
</center>
                      
                          
                 </main>
              </td></tr>
           
      
            
<?php
  }
  }
?>

<?php
    }
    }
?>



        <!-- /.col -->
      </div>
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
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>


    <!-- /.content -->
 
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

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
