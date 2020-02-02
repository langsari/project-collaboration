<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-block">
          <h4>
            <legend class="text-bold margin-top-2.5"> Advisor and Topic Request (PF01)</legend>
          </h4>

          <table class="table">
            <thead class="thead-default">
              <tr>
                <th>Title project</th>
                <th>Student</th>
                <th>Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
require 'menu/connect.php';
$my_id = $_SESSION['id'];
          $sql = "SELECT advisergroup.*, partnergroup.group_number FROM advisergroup
          LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id
         WHERE advisergroup.member_id = '$my_id' AND advisergroup_status = 'Waiting'
          ORDER BY advisergroup.advisergroup_id DESC";
              if($rs = $db->query($sql)){
                while($row = $rs->fetch_object()){
              ?>


              <tr>
                <td><?php echo $row->advisergroup_topic; ?></td>
                <td><?php echo get_member_list($row->group_id); ?></td>
                <td>
                  <h6> <span class="badge badge-danger"><?php echo $row->advisergroup_status; ?></span>
                </td>


                <td><a href="advisor/check_approve.php?id=<?php echo $row->advisergroup_id; ?>"
                    class="btn btn-success btn-xs" title="Comfirm"
                    onclick="return confirm_accept('<?php echo $row->group_number; ?>')"><i
                      class='glyphicon glyphicon-ok'></i> Approve</a>

                  <a href="advisor/check_approve.php?id=<?php echo $row->advisergroup_id; ?>"
                    class="btn btn-danger btn-xs" title="Comfirm"
                    onclick="return confirm_accept('<?php echo $row->group_number; ?>')"><i
                      class='glyphicon glyphicon-ok'></i> Reject</a>

                </td>



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








      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-block">
              <legend class="text-bold margin-top-2.5"> 3 chapter of Proposal Request (PF01)</legend>

              <table class="table">
                <thead class="thead-default">
                  <tr>
                    <th>Title project</th>
                    <th>Student</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  <?php
require 'menu/connect.php';
$my_id = $_SESSION['id'];
    $strSQL = "SELECT advisergroup.*,  files.files_status,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'  AND files_status = 'Waiting' 
               ";
       
              if($rs = $db->query($strSQL)){
                while($row = $rs->fetch_object()){
              ?>
                  <tr>
                    <td><?php echo $row->advisergroup_topic; ?></td>
                    <td><?php echo get_member_list($row->group_id); ?></td>
                    <td>
                      <h6> <span class="badge badge-danger"><?php echo $row->files_status; ?></span>
                    </td>
                    <td><a href="student/download.php?pdf=<?php echo $row->files_filename_proposal ;?>"><i
                          class="fa fa-download"></i></a></td>

                    <td><a href="advisor/check_topic.php?id=<?php echo $row->files_id; ?>"
                        class="btn btn-success btn-xs" title="Comfirm"
                        onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                          class='glyphicon glyphicon-ok'></i> Approve</a>

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






          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-block">
                  <legend class="text-bold margin-top-2.5"> Proposal Revision Request (PF03)</legend>

                  <table class="table">
                    <thead class="thead-default">
                      <tr>
                        <th>Title project</th>
                        <th>Student</th>
                        <th>Status</th>


                      </tr>
                    </thead>
                    <tbody>

                      <?php


require 'menu/connect.php';
$my_id = $_SESSION['id'];
    $strSQL = "SELECT advisergroup.*,  files.by_officer,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic,files.status_advisor FROM advisergroup

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'  AND pf='2' And status_advisor=''
               ";

       
              if($rs = $db->query($strSQL)){
                while($row = $rs->fetch_object()){
              ?>
                      <tr>
                        <td><?php echo $row->advisergroup_topic; ?></td>
                        <td><?php echo get_member_list($row->group_id); ?></td>

                        <td><a href="advisor/check_proposal_revision.php?id=<?php echo $row->files_id; ?>"
                            title="Comfirm" onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                              class="fa fa-check" aria-hidden="true"></i> </a>



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


 <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-block">
                  <legend class="text-bold margin-top-2.5">Project Proposal Approval Letter (PF04)</legend>

                  <table class="table">
                    <thead class="thead-default">
                      <tr>
                        <th>Title project</th>
                        <th>Student</th>
                        <th>Status</th>


                      </tr>
                    </thead>
                    <tbody>

                      <?php


require 'menu/connect.php';
$my_id = $_SESSION['id'];
    $strSQL = "SELECT advisergroup.*,  files.by_officer,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic,files.status_advisor FROM advisergroup

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'  AND pf='3' And status_advisor='Pass'               ";

       
              if($rs = $db->query($strSQL)){
                while($row = $rs->fetch_object()){
              ?>
                      <tr>
                        <td><?php echo $row->advisergroup_topic; ?></td>
                        <td><?php echo get_member_list($row->group_id); ?></td>

                        <td><a href="advisor/check_proposal_approve.php?id=<?php echo $row->files_id; ?>"
                            title="Comfirm" onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                              class="fa fa-check" aria-hidden="true"></i> </a>



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


              

              <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-block">
                  <legend class="text-bold margin-top-2.5">Consultation Log Book (PF06)</legend>

                  <table class="table">
                    <thead class="thead-default">
                      <tr>
                        <th>Title project</th>
                        <th>Student</th>
                        <th>Status</th>


                      </tr>
                    </thead>
                    <tbody>

                      <?php


require 'menu/connect.php';
$my_id = $_SESSION['id'];
    $strSQL = "SELECT advisergroup.*,  files.by_officer,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic,files.by_officer05 FROM advisergroup

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'  AND pf='5' And by_officer05 ='Pass'               ";

       
              if($rs = $db->query($strSQL)){
                while($row = $rs->fetch_object()){
              ?>
                      <tr>
                        <td><?php echo $row->advisergroup_topic; ?></td>
                        <td><?php echo get_member_list($row->group_id); ?></td>

                        <td><a href="advisor/check_06.php?id=<?php echo $row->files_id; ?>"
                            title="Comfirm" onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                              class="fa fa-check" aria-hidden="true"></i> </a>



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


              
              <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-block">
                  <legend class="text-bold margin-top-2.5">Project Seminar (PF07)</legend>

                  <table class="table">
                    <thead class="thead-default">
                      <tr>
                        <th>Title project</th>
                        <th>Student</th>
                        <th>Status</th>


                      </tr>
                    </thead>
                    <tbody>

                      <?php


require 'menu/connect.php';
$my_id = $_SESSION['id'];
    $strSQL = "SELECT advisergroup.*,  files.by_officer,files.pf,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic,files.by_officer05 FROM advisergroup

          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
        WHERE advisergroup.member_id = '$my_id'  AND pf='6' And by_advisor06 ='Pass'               ";

       
              if($rs = $db->query($strSQL)){
                while($row = $rs->fetch_object()){
              ?>
                      <tr>
                        <td><?php echo $row->advisergroup_topic; ?></td>
                        <td><?php echo get_member_list($row->group_id); ?></td>

                        <td><a href="advisor/check_07.php?id=<?php echo $row->files_id; ?>"
                            title="Comfirm" onclick="return confirm_accept('<?php echo $row->files_status; ?>')"><i
                              class="fa fa-check" aria-hidden="true"></i> </a>



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


              
