 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ITPromo</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <style>
* {box-sizing: border-box}

.containers {
  width: 70%;
  background-color: #ddd;
}

.skills {
  text-align: right;
  padding: 10px;
  color: white;
}

.html {width: 100%; background-color: #4CAF50;}
.css {width: 80%; background-color: #2196F3;}
.js {width: 65%; background-color: #f44336;}
.php {width: 60%; background-color: #808080;}
</style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  
<?php
session_start();
if($_SESSION['mb_id']==""){

echo "Please Login!";
exit(); 
} 
/*if($_SESSION['status']!="Staff")
{
echo "Welcome staff!";
exit();
}*/

mysql_connect("localhost","root","");
  mysql_select_db("itpromo");
  $strSQL = "SELECT * FROM member WHERE mb_id = '".$_SESSION['mb_id']."' ";
  $objQuery = mysql_query($strSQL);
  $objResult = mysql_fetch_array($objQuery);

  
?>




  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">ITPromo</a>
   <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      

      
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="officer">
          <a class="nav-link" href="homeoffic.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Officer Dashboard</span>
          </a>
        </li>

  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="profile.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Profile</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="schedule.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Schedule</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">News</span>
          </a>
        </li>

     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="forms.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Forms</span>

          </a>
        </li>
    
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        </li>
      
          <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
               <label for="name"><?php echo $objResult["mb_username"]; ?></label>
      <label for="name">(<?php echo $objResult["mb_status"]; ?>)</label></b></font>



            <i class="fa fa-fw fa-sign-out"></i> Logout</a>
        </li>
      
      </ul>
    </div>
  </nav>



  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
 <div class="card mb-3 ">
        <div class="card-header bg-success">
          <i class="fa fa-table"></i>Dashboard</div>
        <div class="card-body">
        

<form id="add" name="add" method ="post" action ="" onsubmit="return checkForm()" >

<?php
    $_SESSION["mb_username"] = $objResult["mb_username"];
  $mb_username=$_SESSION["mb_username"];
  $objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
  $objDB = mysql_select_db("itpromo");
  $strSQL = "SELECT * FROM member ";
  $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>

<left></span></a></span><body>


  <center>
</p>
  <table class="table table-hover">  <thead>
    <tr>
      <th width="71">No</th>
      <th width="78">Username</th>
      <th width="53">Email</th>
      <th width="62">Status</th>
      <th width="62">Approve</th>
 
      <th width="83">Delete</th>
    </tr>
    <?php
  while($objResult = mysql_fetch_array($objQuery))
  {
?>
    <tr> </tr>
  </thead>
  <tbody>
    <tr>
      <td><div align="center"><?php echo $objResult["mb_id"];?></div></td>
      <td><?php echo $objResult["mb_username"];?></td>
      <td><?php echo $objResult["mb_email"];?></td>
      <td><?php echo $objResult["mb_status"];?></td>
      <td><input type="checkbox"><button class="Approve">Approve</button></td>

        <td align="center"><a href="delete.php?mb_id=<?php echo $objResult["mb_id"];?>">Delete</a></td>

      
    </tr>
    <?php
  }
?>
  </tbody>
</table>


       
        </div>
            </div>    
           </div>

   <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
