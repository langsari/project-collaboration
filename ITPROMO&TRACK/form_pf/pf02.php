      <link rel="stylesheet" href="asset/css/style.css">

              <div class="content">
               <form action="student/check_files.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">

        

                    <div class="col-sm-8 col-sm-offset-1 
                    col-md-11 col-md-offset-4 
                    col-lg-15 col-lg-offset-5 form-box">
                      <div  class="f1">
                        <div class="f1-steps">
                          <div class="f1-progress">
                              <div class="f1-progress-line" data-now-value="12.5" data-number-of-steps="4" style="width: 12.5%; " ></div>
                          </div>
                          <div class="f1-step ">
                            <div class="f1-step-icon">PF01</div>
                            <p>FormPF01</p>
                          </div>
                          <div class="f1-step active">
                        <div class="f1-step-icon">PF02</div>
                              <p>FormPF02</p>
                          </div>
                          <div class="f1-step">
                   <div class="f1-step-icon">PF03</div>
                             <p>FormPF03</p>
                          </div>
                            <div class="f1-step">
                 <div class="f1-step-icon">PF04</div>
                             <p>FormPF04</p>
                          </div>
                                  <div class="f1-step">
                 <div class="f1-step-icon">PF05</div>
                             <p>FormPF045</p>
                          </div>
                

                        </div>
 <?php



            $g_id = get_group_id();
              $ag_id = get_ag_id($g_id);
    $strSQL = "SELECT advisergroup.*,  files.by_officer,files.Owner,files.advisergroup_id,files.pf,advisergroup.advisergroup_id FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
          LEFT JOIN committeegroup ON advisergroup.group_id = committeegroup.group_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.advisergroup_id = '$ag_id' ";             


       
     if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){
            ?>  
                                     <fieldset>
                            <h4>This form is with officer 
</h4>
                           <table class="table">
                                        <thead class="thead-default">
                                            <tr>
                                                <th>To do list</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                       <tbody>
                                            <tr>
                                             <td>Officer receive copy of Project Proposal</td>
                          <td> 
                  <span class="badge badge-success"  required> <?php echo $objResult->by_officer; ?> </span> <p> <font color='red'> *For Officer</font>
                          </td>
                           </tr>
                                           
                         </tbody>
                        </table>

                            
                  <div class="button" align="right"> 

                               <button> <a href ="?page=pf01"  type="button"   class="btn previous" >Previous</button></a>
                                 <button> <a href ="?page=pf03"  type="button"   class="btn next" >Next</button></a>
                                </div>
                            </fieldset>


                 <?php
                 } }
                   ?>

   
     

                    </div>



                </div>
                   
              </form>
 
 <?php
include("student/chat.php");
 ?>


 <script src="asset/js/jquery-1.11.1.min.js"></script>
        <script src="asset/js/jquery.backstretch.min.js"></script>
        <script src="asset/js/retina-1.1.0.min.js"></script>
        <script src="asset/js/scripts.js"></script>
   




   
    </body>

</html>