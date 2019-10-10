

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-12">
      <div class="box box-primary">
        <div class="box-header">
          <i class="fa fa-group"></i>
          <h3 class="box-title">My Group</h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Student ID</th>
                  <th>Full Name</th>
                  <th>Phone</th>
                </tr>
              </thead>
              <tbody>
              <?php
                require 'menu/function.php';

              $group_id = get_group_id($_SESSION['id']);
             
                $sql = "SELECT member_fullname, member_phone, member_idcard FROM member WHERE group_id = '$group_id'";

              if($rs = $db->query($sql)){
                while($row = $rs->fetch_object()){
              ?>
                <tr>
                  <td><?php echo $row->member_idcard; ?></td>
                  <td><?php echo $row->member_fullname; ?></td>
                  <td><?php echo $row->member_phone; ?></td>
                </tr>
              <?php
                }
                $db->close();
              }else{
                echo $db->error;
                $db->close();
              }
              ?>
              </tbody>
            </table>
          </div>
        </div>
      </div><!-- /.box (box) -->
    </section>
  </div>
</section><!-- /.content -->