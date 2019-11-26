 
 <!DOCTYPE html>
 <html>
 <head>
   <title></title>

 <script src='https://kit.fontawesome.com/a076d05399.js'></script>
 <style>
    h6{
      font-family:initial;
      font-size: 25px;
      color: green;
    }
    #more {display: none;}
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
  <li class="active">Create Proposal</li>
</ul>
   <!-- PAGE CONTENT -->

    <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-block">


 <form class="form" method="post" action="student/check_files.php">


                
                    <input class="form-control" type="file" name="files_filename" id="files_filename" placeholder="Group Number">
                
             


                  <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Save</button>
              
                

                 <table class="table">  
                                        <thead class="thead-default">
                                         
                                           <tr>
                  <th>Student ID</th>
                  <th>Full Name</th>
                  <th>Phone</th>
                </tr>
                                        </thead>
                                        <tbody>


                                          <?php
    
             $g_id = get_group_id();
              $ag_id = get_ag_id($g_id);

                $sql = "SELECT files_id, files_filename FROM files WHERE files_id = '$ag_id'";



              if($rs = $db->query($sql)){
                while($row = $rs->fetch_object()){
              ?>
                <tr>
                  <td><?php echo $row->files_id; ?></td>
                  <td><?php echo $row->files_filename; ?></td>
                  
                </tr>
              <?php
                }
              }else{
              }
              ?>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>