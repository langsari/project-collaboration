
<?php
 $con = mysqli_connect('localhost','root','','itpromo_track');
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>TechJunkGigs</title>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
 title: 'Owner Group Project',
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





 
</body>
</html>