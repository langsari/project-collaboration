

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


            <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title></title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $.getJSON("advisor/get_data.php", function (result) {

          var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title:{
        text: "Project Owner"
    },
    axisY: {  
        title: "Forms",
        prefix: "PF",
        suffix:  ""
    },
    data: [{
        type: "bar",
        yValueFormatString: "PF#",
        indexLabel: "{y}",
        indexLabelPlacement: "inside",
        indexLabelFontWeight: "bolder",
        indexLabelFontColor: "white",
                            dataPoints: result
    }]
});
                chart.render();
            });
        });
    </script>
</head>
<body>

    <div id="chartContainer" style="height: 300px; width: 90%;"></div>


</body>
</html>










</body>
</html>


