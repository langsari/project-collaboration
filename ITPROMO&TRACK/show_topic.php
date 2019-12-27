 <!DOCTYPE html>
 <html>
 <head>
   <title></title>

 <script src='https://kit.fontawesome.com/a076d05399.js'></script>
 <style>

    ul.breadcrumb {
      background-color: #eee;
      text-align: right;
      padding: 10px 16px;
   }
    ul.breadcrumb li {
      display: inline;
   }
    ul.breadcrumb li+li:before {
      padding: 8px;
      content: ">>\00a0";
}
  </style>
 </head>
 <body>

<ul class="breadcrumb">
  <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
  <li class="active">Topic Require</li>
</ul>
 
    <!-- PAGE CONTENT -->
    <div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
 
                                   <h5 class="mt-3">All Topics require</h5>


     <?php

     $strSQL = "SELECT  news_topic.news_topic, news_topic.news_detail, news_topic.news_date,member.member_fullname
         FROM news_topic,member 
         WHERE news_topic.member_id=member.member_id
         ORDER BY news_topic.news_id";

         ?>

    <?php
  
        if($objQuery = $db->query($strSQL)){
           while($objResult = mysqli_fetch_array($objQuery)) {
            ?>
            <table class="display datatable table table-stripped" cellspacing="0" width="100%">

                  <tbody>
                  
                      <td> 
                     
         </br><b> <font color="blue" size="5"> <?php echo $objResult["news_topic"];?></font> </br></b>

                  

          </br> <i class='far fa-user-circle' style='font-size:20px'></i>​ 
                    &nbsp;&nbsp; <?php echo $objResult["member_fullname"];?></br>
                     
                   </br><i class='far fa-calendar-alt' style='font-size:20px'> </i>&nbsp;&nbsp;&nbsp;  <?php echo $objResult["news_date"];?></br>


                   &nbsp;&nbsp;&nbsp; <?php echo $objResult["news_detail"];?></br>



                    <!--   </br> <?php echo substr($objResult['news_detail'],0,50).'<span id="dots">...</span>';?></span><span id="more"><?php echo substr($objResult['news_detail'],51,1000);?></span></br> -->
                    

                        <div class="col-md-12" align="right">

                          <button onclick="myFunction()" id="myBtn"><i class="fa fa-eye" aria-hidden="true"></i>Read more</button>
                          
                        </div>

                        </td> 
             
                <?php
                 }
               }
                   ?>
</tbody>
             </table>
            
          </div>

          
        </div>
        
      </div>
    </div>
    
  </div>

  <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

</body>
</html>