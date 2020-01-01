 

<script type="text/javascript">
  function edit_ps(id){
    $.ajax({
      url: 'get_readmore.php',
      data: ({id: id}),
      type: 'POST',
      dataType: 'JSON',
      success: function(data){
        $.each(data, function(i, o){
          $('#announcement_topic').val(o.announcement_topic);
        $('#announcement_date').val(o.announcement_date);
       $('#announcement_detail').val(o.announcement_detail);
         $('#admin_fullname').val(o.admin_fullname);
          $('#announcement_id').val(o.announcement_id);
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
                      <h5 class="mt-3">Announcements&nbsp;&nbsp;<i class='fas fa-bullhorn'></i></h5>
                       


     <?php

     $strSQL = "SELECT  announcement.announcement_id,announcement.announcement_topic, announcement.announcement_detail,announcement.announcement_date,admin.admin_fullname
                           FROM announcement,admin 
                           WHERE announcement.admin_id=admin.admin_id
                           ORDER BY announcement.announcement_id";

         ?>

    <?php
            
                 if($objQuery = $db->query($strSQL)){
             while($objResult = $objQuery->fetch_object()){
            ?>
            <table class="display datatable table table-stripped" cellspacing="0" width="100%">

                  <tbody>
                  
                      <td> 

                      </br><b> <font color="blue" size="5"> <?php echo $objResult->announcement_topic; ?> </font> </br></b>

                          <!--<div class="col-md-12" align="right">
                            Status: <button> <?php echo $objResult->announcement_date; ?>  </button>
                            
                          </div>-->

                       </br> <i class='far fa-user-circle' style='font-size:20px'></i>​ 
                       &nbsp;&nbsp; <?php echo $objResult->admin_fullname; ?>
                       </br>

                        </br><i class='far fa-calendar-alt' style='font-size:20px'> </i>&nbsp;&nbsp;&nbsp; <?php echo $objResult->announcement_date; ?> </br>


                         &nbsp;&nbsp;&nbsp;<?php echo substr($objResult->announcement_detail, 0, 50); ?> </br>

                        <div class="col-md-12" align="right">
                          
                     <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editPS" onclick="edit_ps(<?php echo $objResult->announcement_id; ?>)"><i class="fa fa-eye"></i>Read more</button>




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
                                                    <input class="form-control" name="announcement_topic" id="announcement_topic"  >
                                                </div>
                                            </div>

                                          
                                            <div class="form-group row">
                      <div class="col-md-2">
                          <label class="control-label col-form-label">By</label></div>

                          <div class="col-md-10">
                              <input type="text" class="form-control" name="admin_fullname" id="admin_fullname">
                          </div>
                  </div>
                                 

                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label">Date</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="announcement_date" id="announcement_date">
                                                </div>
                                            </div>


  <div class="form-group row">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label">Detail</label>
                                                </div>
                                                <div class="col-md-10">

                            <textarea class="form-control" rows="10" name="announcement_detail" id="announcement_detail"  required></textarea>


                                                </div>
                                            </div>

                         <input type="hidden" name="announcement_id" id="announcement_id">
</form>
                
          


   

            <!-- /PAGE CONTENT -->