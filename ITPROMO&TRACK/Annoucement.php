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


 <ul class="breadcrumb">
 <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
  <li class="active">Announcement</li>
</ul>
    <!-- PAGE CONTENT -->

      <div class="content">
  
        <div class="row">
           <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                      <h6 class="card-title text-bold"><b>Announcements&nbsp;&nbsp;<i class='fas fa-bullhorn'></i></h6></b>
                       


     <?php

     $strSQL = "SELECT  announcement.announcement_topic, announcement.announcement_detail,announcement.announcement_date,admin.admin_fullname
                           FROM announcement,admin 
                           WHERE announcement.admin_id=admin.admin_id
                           ORDER BY announcement.announcement_id";

         ?>

    <?php
            if ($objQuery = $db->query($strSQL)) {
              while ($objResult = mysqli_fetch_array($objQuery)) {
            ?>
            <table class="display datatable table table-stripped" cellspacing="0" width="100%">

                  <tbody>
                  
                      <td> 

                      </br><b> <font color="blue" size="5"> <?php echo $objResult["announcement_topic"];?></font> </br></b>

                          <!--<div class="col-md-12" align="right">
                            Status: <button><?php echo $objResult["announcement_date"];?></button>
                            
                          </div>-->

                       </br> <i class='far fa-user-circle' style='font-size:20px'></i>​ 
                       &nbsp;&nbsp;
                       <?php echo $objResult["admin_fullname"];?></br>

                        </br><i class='far fa-calendar-alt' style='font-size:20px'> </i>&nbsp;&nbsp;&nbsp; <?php echo $objResult["announcement_date"];?></br>


                         &nbsp;&nbsp;&nbsp; <?php echo $objResult["announcement_detail"];?></br>



                    <!--   </br> <?php echo substr($objResult['announcement_detail'],0,50).'<span id="dots">...</span>';?></span><span id="more"><?php echo substr($objResult['announcement_detail'],51,1000);?></span></br> -->


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

</body>
</html>
