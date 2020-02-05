

      <div class="row">
<div class="card-block">

  <span style="padding-left:50px"> </span>

  <button type="button" style="height:110px; width:210px" class="btn btn-success">
    <h5><i class="fa fa-users position-left"></i>Total Group</h5>
      
         <?php
              $con = mysqli_connect('localhost','root','','itpromo_track');
              $my_id = $_SESSION['id'];

                $query="SELECT advisergroup_id FROM advisergroup 
                  WHERE member_id='$my_id'
                   ORDER BY advisergroup_id";

                $query_num=mysqli_query($con,$query);
                $row=mysqli_num_rows($query_num);

                  echo '<h1>'.$row.'</h1>';
                
                ?>

  </button>

  <span style="padding-left:50px"> </span>

  <button type="button" class="btn btn-warning" style="height:110px; width:210px" ><i
      class="fa fa-users position-left"></i>
      <h5>Users
    
</button>


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

 ['group_id','pf'],

 <?php 
    $my_id = $_SESSION['id'];
            
            
    $query = "SELECT advisergroup.*,  files.pf,files.Owner,advisergroup.advisergroup_id,
    partnergroup.group_id,partnergroup.group_number FROM advisergroup
         LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
       LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id
       LEFT JOIN member ON advisergroup.member_id = member.member_id
       WHERE advisergroup.member_id = '$my_id'  AND pf  
              ";
       $exec = mysqli_query($con,$query);
       while($row = mysqli_fetch_array($exec)){

       echo "['".$row['group_id']."',".$row['pf']."],";
       
    
       }
       ?> 
 
 ]);

 var options = {
 title: ' Group Track Project',
  pieHole: 0.3,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
    
 };
 var chart = new google.visualization.BarChart(document.getElementById("columnchart12"));
 chart.draw(data,options);
 }


 
  
    </script>

</head>
<body>
<br>

 <div class="container-fluid">

 <div id="columnchart12" style="height: 290px; width: 600px"></div>

 </div>






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
            
            
            $query = "SELECT advisergroup.*,  files.pf,files.Owner,advisergroup.advisergroup_id,
            partnergroup.group_id,partnergroup.group_number FROM advisergroup
                 LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
               LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id
               LEFT JOIN member ON advisergroup.member_id = member.member_id
               WHERE advisergroup.member_id = '$my_id'  AND pf  
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


