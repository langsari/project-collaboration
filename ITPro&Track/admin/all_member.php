         <!-- PAGE CONTENT -->
          

                <div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
                                    <h6 class="card-title text-bold">Default Datatable</h6>                         
     <?php
  $objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
  $objDB = mysql_select_db("itpromo");
  $strSQL = "SELECT * FROM member  ";
  $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>

       <table class="display datatable table table-stripped" cellspacing="0" width="100%">
          <thead>
             <tr>
                      <th>#</th>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Gender</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Position</th>
                      <th>Status</th>
                      <th>#</th>
                 </tr>
               </thead>
     <?php
       while($objResult = mysql_fetch_array($objQuery)) {
            ?>
           <tbody>
            <tr>
                      <td><?php echo $objResult["member_id"];?></td>
                      <td><?php echo $objResult["member_idcard"];?></td>
                      <td><?php echo $objResult["member_fullname"];?></td>
                      <td><?php echo $objResult["member_gender"];?></td>
                      <td><?php echo $objResult["member_phone"];?></td>
                      <td><?php echo $objResult["member_email"];?></td>
               
                     <td align="center">
                    <font color="red">
                      <?php 
                     $position = $objResult["member_pos"];
                   include('admin/position.php');
                     ?>
                    </font>  </td>

                        <td align="center">
                    <font color="red">
                       <?php 
                     $status = $objResult["admin_id"];
                   include('admin/status.php');
                     ?>
          
                    <td>
                 <a href="?page=edit_member&id=<?php echo $objResult["member_id"];?>"><i class="fa fa-edit" title="Edit"></i>
 
                      </td>

                    </tr>
                <?php
                 }
                   ?>


       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
            <!-- /PAGE CONTENT -->
        

</body>

</html>