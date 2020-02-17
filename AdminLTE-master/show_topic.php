

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


   <!-- page content -->
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Wizards</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group row pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-secondary" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Wizards <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

              


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