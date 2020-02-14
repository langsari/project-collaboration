

      <div class="row">
<div class="card-block">
<span style="padding-left:70px"> </span>


  <button type="button" style="height:110px; width:210px" class="btn btn-danger">
    <h5><i class="fa fa-users position-left"></i>Total Users</h5>
              <?php
              $con = mysqli_connect('localhost','root','','itpromo_track');

                $query="SELECT member_id FROM member ORDER BY  member_id";

                $query_num=mysqli_query($con,$query);
                $row=mysqli_num_rows($query_num);
                echo '<h1>'.$row.'</h1>';

                ?>
  
  </button>
  <span style="padding-left:50px"> </span>


  <button type="button" style="height:110px; width:210px" class="btn btn-info">
    <h2><i class="fa fa-users position-left"></i></h2><a href="?page=users">
      <h4>Users
  </button></a>


  <button type="button" style="height:110px; width:210px" class="btn btn-primary"><i
      class="fa fa-users position-left"></i><a href="?page=users">
      <h4>Users</button></a>



  <div class="content">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div id="header">

          </div>
          <center>

          

<?php
 $con = mysqli_connect('localhost','root','','itpromo_track');
?>

<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>TechJunkGigs</title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

    ['Owner','pf'],
 <?php 
      $my_id = $_SESSION['id'];
            
            
     


     $query = "SELECT advisergroup.*,  files.pf,files.files_id,files.Owner,advisergroup.advisergroup_id,partnergroup.group_id FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
         LEFT JOIN admin ON advisergroup.admin_id = admin.admin_id
        WHERE advisergroup.admin_id = '$my_id'  AND pf  
               ";

       $exec = mysqli_query($con,$query);
       while($row = mysqli_fetch_array($exec)){

       echo "['".$row['Owner']."',".$row['pf']."],";
       }
       ?> 
 
 ]);


 
 var options = {
          title: 'Number of Students Track Project',
          pieHole: 0.4,
        };
     
 var chart = new google.visualization.PieChart(document.getElementById("columnchart13"));
 chart.draw(data,options);
 }
  
    </script>

</head>
<body>
 <div class="container-fluid">
 <div id="columnchart13" style="height: 290px; width: 600px"></div>
 </div>







</body>
</html>


