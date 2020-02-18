<!DOCTYPE html>
<html>

<head>
  <title></title>

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <style>
    h6 {
      font-family: initial;
      font-size: 25px;
      color: green;
    }

    #more {
      display: none;
    }

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
    <li class="active">My profile</li>
  </ul>

  <!-- PAGE CONTENT -->





  <?php
$id = $_GET['id'];


        $sql = "SELECT advisergroup.*, partnergroup.group_number,partnergroup.group_id,committeegroup.status_presentation,committeegroup.group_id,files.Owner,advisergroup.group_id,files.status_advisor FROM advisergroup
              LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id
          LEFT JOIN committeegroup ON advisergroup.group_id = committeegroup.group_id
          LEFT JOIN files ON advisergroup.group_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.group_id  ='".$_GET['id']."'";  



        ?>
  <?php
     if($result = $db->query($sql)){
                  while($objResult = $result->fetch_object()){
            ?>
  <div class="content">
    <div class="row">
      <div class="col-md-10 ">
        <div class="card">
          <div class="card-block">


            <form action="committee/check.php?id=<?php echo $_GET["id"];?>" name="fromEdit" method="post"
              onsubmit="return checkForm()">





              <div class="form-group row margin-top-30">

                <div class="col-md-3">
                  <label class="control-label col-form-label">ID card</label>
                </div>

                <div class="col-md-9">
                  <?php echo $objResult->group_number; ?>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-3">
                  <label class="control-label col-form-label">Advisor id</label>

                </div>
                <div class="col-md-9">

                  <td class="form-control">
                  <td class="text-left"><?php echo get_advisor($objResult->group_id); ?></td>
                  </td>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-3">
                  <label class="control-label col-form-label">Project Owner</label>

                </div>
                <div class="col-md-9">

                  <td class="form-control">
                  <td class="text-left"><?php echo get_member_list($objResult->group_id); ?></td>
                  </td>
                </div>
              </div>


              <div class="
                                        form-group row">
                <div class="col-md-3">
                  <label class="control-label col-form-label">Topic</label>
                </div>
                <div class="col-md-9">
                  <td class="text-left"><?php echo get_topic($objResult->group_id); ?></td>
                </div>
              </div>




              <div class="form-group row">
                <div class="col-md-3">
                  <label class="control-label col-form-label">status of presentation</label>
                </div>
                <div class="col-md-9">
                  <select name="status_presentation" id="status_presentation">
                    <option value="#">Select</option>
                    <option value="Pass">Pass</option>
                    <option value="No">No Pas</option>

                  </select>
                </div>
              </div>



              <div class="form-group row">
                <div class="col-md-3">
                  <label class="control-label col-form-label">Comment</label>
                </div>
                <div class="col-md-9">
                  <textarea rows="5" width="30" class="form-control" id="comment" name="comment"
                    placeholder="Comment"></textarea>
                </div>
              </div>









              <input type="hidden" name="files_id" value="<?php echo $objResult->files_id;?>" />



              <div class="pull-right">
                <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Save</button>

              </div>
            </form>
          </div>
        </div>
      </div>
      <?php
                 }
               }
                   ?>