<div class="content">
  <div class="row">
    <div class="col-md-11">
      <div class="card">
        <div class="card-block">


          <legend class="text-bold margin-top-2.5">Comment</legend>




          <form method="post" action="student/check_chat.php">


            <div class="form-group">
              <textarea name="chat_massage" id="chat_massage" class="form-control" placeholder="Enter Comment"
                rows="5"></textarea>
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
              <input type="hidden" name="chat_id" id="chat_id" value="0" />
              <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
            </div>





            <div class="content">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-block">

                      <h6 class="card-title text-bold">Comments</h6></b>
  

  <?php
            $g_id = get_group_id();
              $ag_id = get_ag_id($g_id);
              

    $strSQL = "SELECT advisergroup.*, partnergroup.group_number,partnergroup.group_id,advisergroup.member_id,advisergroup.group_id,comment.com_content,comment.com_date,comment.member_id,member.member_fullname FROM advisergroup
          LEFT JOIN comment ON advisergroup.advisergroup_id = comment.advisergroup_id

          LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id



        LEFT JOIN member ON advisergroup.member_id = member.member_id 
        WHERE advisergroup.advisergroup_id = '$ag_id'";                 
     if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){


   ?>





                      <table class="display datatable table table-stripped" cellspacing="0" width="100%">

                        <tbody>

                          <td>

                            </br><b>
                              <font color="blue" size="3">
                                <?php echo $objResult->member_fullname; ?>
                              </font> </br>
                            </b>



                            &nbsp;&nbsp; <?php echo $objResult->com_content;?></br>



                            &nbsp;&nbsp;&nbsp; <?php echo $objResult->com_date;?></br>



                            <div class="col-md-12" align="right">

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
        </div>
        </form>