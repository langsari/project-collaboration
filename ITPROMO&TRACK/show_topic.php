 

<script type="text/javascript">
  function edit_ps(id){
    $.ajax({
      url: 'get_readmore_news.php',
      data: ({id: id}),
      type: 'POST',
      dataType: 'JSON',
      success: function(data){
        $.each(data, function(i, o){
          $('#news_topic').val(o.news_topic);
        $('#news_date').val(o.news_date);
       $('#news_detail').val(o.news_detail);
      $('#member_fullname').val(o.member_fullname);

          $('#news_id').val(o.news_id);
        });
      },
      error: function (request, error) {
        console.log(error);
        console.log(arguments);
        alert("Network Error!");
      }
    });
  }
        



</script>


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
  <li class="active">Proposed topics</li>
</ul>
 
    <!-- PAGE CONTENT -->
    <div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
                                   <h5 class="mt-3">All Proposed topics</h5>
                                     <small class="text-muted">For student who's interenst</small>
                                   </h5>


     <?php

     $strSQL = "SELECT  news_topic.news_id,news_topic.news_topic, news_topic.news_detail, news_topic.news_date,member.member_fullname
         FROM news_topic,member 
         WHERE news_topic.member_id=member.member_id
         ORDER BY news_topic.news_id";

         ?>

    <?php
                 if($objQuery = $db->query($strSQL)){
             while($objResult = $objQuery->fetch_object()){
            ?>
            <table class="display datatable table table-stripped" cellspacing="0" width="100%">

                  <tbody>
                  
                      <td> 
                     
         </br><b> <font color="blue" size="5">  <?php echo $objResult->news_topic; ?> </font> </br></b>
          </br> <i class='far fa-user-circle' style='font-size:20px'></i>​ 
                    &nbsp;&nbsp;<?php echo $objResult->member_fullname; ?>   </br>
                   </br><i class='far fa-calendar-alt' style='font-size:20px'> </i>&nbsp;&nbsp;&nbsp; <?php echo $objResult->news_date; ?>   </br>
                     &nbsp;&nbsp;&nbsp;<?php echo substr($objResult->news_detail, 0, 50); ?> </br>
                       
                        <div class="col-md-12" align="right">
                     <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editPS" onclick="edit_ps(<?php echo $objResult->news_id; ?>)"><i class="fa fa-eye"></i>Read more</button>
                          
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




<!-- Modal -->
      
<div id="editPS" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg"> 
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" >&times;</span></button>
      </div>

      <div class="modal-body">
        <form class="form-horizontal" method="post" >

                      <legend class="text-bold">Read More</legend>
                                    <fieldset class="content-group">
                                         <form action="#">
                                            <div class="form-group row margin-top-10">
                                                <div class="col-md-2">
                                       <label class="control-label col-form-label">Topic</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" name="news_topic" id="news_topic"  >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label">Date</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="news_date" id="news_date">
                                                </div>
                                            </div>
                           <div class="form-group row">
                      <div class="col-md-2">
                          <label class="control-label col-form-label">By</label></div>

                          <div class="col-md-10">
                              <input type="text" class="form-control" name="member_fullname" id="member_fullname">
                          </div>
                  </div>
                         

  <div class="form-group row">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label">Detail</label>
                                                </div>
                                                <div class="col-md-10">

                            <textarea class="form-control" rows="10" name="news_detail" id="news_detail"  required></textarea>


                                                </div>
                                            </div>

                         <input type="hidden" name="news_id" id="news_id">
</form>
                
          







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