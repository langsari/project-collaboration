<?php
session_start();
require 'db/ConnectDB.php';
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Index</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/core.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/icons/fontawesome/styles.min.css">
    <link rel="stylesheet" href="lib/css/chartist.min.css">

    <script type="text/javascript" src="lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="lib/js/tether.min.js"></script>
    <script type="text/javascript" src="lib/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="lib/js/chartist.min.js"></script>
    <script type="text/javascript" src="assets/js/app.min.js"></script>
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

    <!-- PAGE LEVEL STYLESHEETS -->
    <link rel="stylesheet" href="lib/css/jquery.dataTables.min.css">
    <!-- /PAGE LEVEL STYLESHEETS -->
     <!-- PAGE LEVEL SCRIPTS -->
    <script type="text/javascript" src="lib/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/js/pages_datatables.min.js"></script>
    <!-- /PAGE LEVEL SCRIPTS -->

        <link rel="stylesheet" href="asset/css/style.css">

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-toggleable-md">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav">
            <span>
                <i class="fa fa-code-fork"></i>
            </span>
        </button>

        <button class="navbar-toggler navbar-toggler-left" type="button" id="toggle-sidebar">
            <span>
               <i class="fa fa-align-justify"></i>
            </span>
        </button>

        <a class="navbar-brand logo" href="#">
            <img src="assets/img/lo.png" alt="ITPromo">
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <button class="sidebar-toggle btn btn-flat" id="toggle-sidebar-desktop">
                <span>
                    <i class="fa fa-align-justify"></i>
                </span>
            </button>


         <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">

         <?php if(isset($_SESSION['id'])): //Condition to check user is logined or not ?>
              <li class="dropdown messages-menu">
                    <?php if($_SESSION['rank'] == '1' || $_SESSION['rank'] == '2'){ //Condition for checking users Level
                    }else if($_SESSION['rank'] == '3'){
                    }
                    ?>
                  </li>
                  <!-- Notifications: style can be found in dropdown.less -->
                  <li class="dropdown notifications-menu">
                      <?php if($_SESSION['rank'] == 'admin'){ //Condition for checking users Level
                      }else if($_SESSION['rank'] == '1' || $_SESSION['rank'] == '2'){
                      }else if($_SESSION['rank'] == '3'){
                      }
                      ?>
                    </li>

                       <a class="nav-link dropdown-toggle dropdown-has-after" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                       
                         <i class="fa fa-user"></i>  <?php echo $_SESSION['name']; ?></span>

                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-user"></i> <span>Profile</span></a>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-comment"></i> <span>Messages</span></a>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-cog"></i> <span>Settings</span></a>
                        </a>
                        <a class="dropdown-item" href="pages/logout.php">
                            <i class="fa fa-sign-out"></i> <span>Logout</span></a>
                        </a>
                    </div>
                </li>

                  <?php else: ?>
                    <li>
                      <a href="pages/register.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fa fa-registered"> </i> <span>Register</span>
                      </a>
                    </li>


                    <li>
                      <a href="pages/login.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> 
                        <i class="fa fa-sign-in"></i> <span>Login</span>
                      </a>
                    </li>



                  <?php endif; ?>
                </li>
              </ul>
          </div>


    </nav>
    <!-- /NAVBAR -->

    <div class="page-container">
        <div class="page-content">
            <!-- inject:SIDEBAR -->

            <div id="sidebar-main" class="sidebar sidebar-default">
    <div class="sidebar-content">
        <ul class="navigation">



          <!-- sidebar: style can be found in sidebar.less -->
      
            <!-- sidebar menu: : style can be found in sidebar.less -->
           

             
              <?php if(isset($_SESSION['id'])): ?>
                <?php include('menu/menu.php'); ?>
              <?php else: ?>


<!-- Tylas ทำ-->
        <li><a class="app-menu__item active" href="?page=Annoucement"><i class="fa fa-bullhorn"></i><span class="app-menu__label">Announcements</span></a></li>

<!-- ยังไม่ทำน่ะ.....ทำแค่เปลี่ยน icon-->
        <li><a class="app-menu__item " href="?page=show_topic"><i class="fa fa-file"></i><span class="app-menu__label">Topics</span></a></li>

<!-- ยังไม่ทำน่ะ.....ทำแค่เปลี่ยน icon-->
        <li><a class="app-menu__item " href="?page=proposal_project"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">Proposal Project</span></a></li>

<!-- Nik ทำ-->
        <li><a class="app-menu__item " href="?page=guide"><i class="fa fa-glide-g"></i><span class="app-menu__label">Guide</span></a></li>
              <?php endif; ?>

            </ul>

          <!-- /.sidebar -->

         
            </div>
        </div>
       
       

            <!-- inject:/SIDEBAR -->





            <!-- PAGE CONTENT -->
            <div class="content-wrapper">
               
     <?php include('page_link.php'); ?>

     

                    



    
          </div>
            <!-- /PAGE CONTENT -->
      
        </div>

    
    <!-- /.content-wrapper 
        <footer class="main-footer">
          <div class="pull-right hidden-xs">
            <b>Version</b> 0.5 Alpha
          </div>
          <strong>Copyright &copy; 2019 <a href="index.php">ITPROMO</a>.</strong> All rights reserved.
        </footer>-->
    <!-- ./wrapper -->
       <script src="asset/js/jquery-1.11.1.min.js"></script>
        <script src="asset/js/jquery.backstretch.min.js"></script>
        <script src="asset/js/retina-1.1.0.min.js"></script>
        <script src="asset/js/scripts.js"></script>
</body>

</html>