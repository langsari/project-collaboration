<!DOCTYPE html>
<html>
<head>
  <title>Add Announcement</title>

  <style>
    
    #header{
      background-color:#e7e7e7;
      color: black;​
      padding: 4px;
    }
   

  </style>

</head>
<body>

      <div class="content">
            <div class="row">
                 <div class="col-lg-12">
                       <div class="card">
                             <div id="header">
                                  <h5>Project Proposed Topic</h5>

                              </div>
                            <div class="card-block">

          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addtopic" style="margin-bottom: 20px; border-radius: 12px; font-size: 14px;">
            <i class="fa fa-plus-square"></i>&nbsp; Create New Topic
          </button>


<!-- Data display  -->
                                                             
         


  <?php

     $strSQL = "SELECT  news_topic.news_id,news_topic.news_topic, news_topic.news_detail, news_topic.news_date,member.member_fullname
         FROM news_topic,member 
         WHERE news_topic.member_id=member.member_id
         ORDER BY news_topic.news_id='".$_SESSION['id']."'";

         ?>

     <table class="display datatable table table-stripped" cellspacing="0" width="100%">
          <thead>
             <tr>
                     <th>No</th>                     
                      <th>Topic</th>
                      <th>Detail</th>
                      <th>Date</th>
                      <th>By</th>
                      <th>Option</th>

                 </tr>
               </thead>
              

 <?php
     if($result = $db->query($strSQL)){
             while($objResult = $result->fetch_object()){
            ?>
           <tbody>
            <tr>
        <td class="text-center"><?php echo $objResult->news_id; ?></td>
             <td class="text-center"><?php echo substr($objResult->news_topic, 0, 30); ?></td>
                 <td class="text-center"><?php echo substr($objResult->news_detail, 0, 30); ?></td>

                    <td class="text-center"><?php echo $objResult->news_date; ?></td>
                        <td class="text-center"><?php echo $objResult->member_fullname; ?></td>

               

                      <td>

          <button type="button" data-toggle="modal" data-target="#showtopic">
           <i class="fa fa-eye" aria-hidden="true"></i>
          </button>
           
          <button type="button" data-toggle="modal" data-target="#addtopic">
           <i class="fa fa-edit" aria-hidden="true"></i>
          </button>

          <button type="button" data-toggle="modal" data-target="#addtopic">
           <i class="fa fa-trash" aria-hidden="true"></i>
          </button>
                        
                      </td>
   
                    </tr>

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



<!--  <div class="box-body">
          <?php if($success == 1): ?>
          <div class="alert alert-success" role="alert">
            <i class="glyphicon glyphicon-ok"></i> Your topic already send to your Advisor. Please wait till He/She accept it!
          </div>
          <?php endif; ?>-->


    <!--form alert add topic-->

     <div class="modal fade" id="addtopic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i>                                     <h4 class="card-title text-bold">Add Topic</h4>                         

      </div>
      <div class="modal-body">
            <form id="add" name="add" method ="post" action ="advisor/check_newstopic.php" onsubmit="return checkForm()" >
                            <div class="user-details">
                           
                                      <div class="form-group">
            <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Topic" aria-describedby="basic-addon1" id="news_topic" name="news_topic" autocomplete="off" required>
        </div>    

                                
                                                     <div class="form-group">
            <div class="col-sm-5">
           Begin Date:   <input type="date" name="news_date" id="news_date" class="form-control" required>
        </div>    



 <div class="form-group row">           
       <div class="col-md-3">
           
           </div>
             <div class="col-md-9">
             <select class="form-control" name="member_id" hidden="">

                <?php
                include '../menu/connect.php';
                $strSQL = "SELECT member_id, member_fullname FROM member WHERE member_id ='".$_SESSION['id']."'";
                if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){
                    echo "<option value='".$objResult->member_id."'>".$objResult->member_fullname."</option>";
                  }
                }else{
                }
                ?>
              </select>
      
            </div>
          </div>

 <div class="form-group">
              <label class="col-md-3 control-label">Project Detail</label>
  <div class="col-md-13">          
    <textarea rows="10" width="40" class="form-control" id="news_detail" name="news_detail" placeholder="Project Description"></textarea>
                <script>
                  CKEDITOR.replace( 'news_detail' );
                </script>
              </div>
            </div>
             

               <button type="submit" class="btn btn-primary btn-lg btn-block">Create</button>
                            
                            

      </div>
    </div>
  </div>               
      </div>
    </div>
  </div>



          </form>
        </div>
      </div><!-- /.box (box) -->




      <div class="modal fade" id="showtopic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i>                                     <h4 class="card-title text-bold">Add Topic</h4>                         

      </div>
                    
      </div>
    </div>
  </div>



          </form>
        </div>
      </div><!-- /.box (box) -->
    </section>

   