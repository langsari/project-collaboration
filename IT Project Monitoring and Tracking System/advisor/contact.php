<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <p>



                <div class="register card auth-box mx-auto my-auto">
                    <div class="card-block text-center">

                        <?php
require 'menu/connect.php';

$my_id = $_SESSION['id'];

$strSQL = "SELECT advisergroup.*,  files.files_status,files.files_id,files.files_filename_proposal,advisergroup.advisergroup_topic ,member.member_email FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id

        WHERE advisergroup.member_id = '$my_id'
               ";

if ($rs = $db->query($strSQL)) {
    while ($row = $rs->fetch_object()) {
        ?>


                        <h4 class="text-light">Notification</h4>


                        <form action="phpmailer/sentmail.php" method="post">

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <i class="fa fa-user-md"></i>
                                    </span>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="<?php echo get_member_list($row->group_id); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <i class="fa fa-envelope-square"></i>
                                    </span>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                                        autocomplete="off" required aria-describedby="basic-addon1"
                                        value="<?php echo $row->member_email; ?>">
                                </div>
                            </div>

                            <div class="user-details">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                            <i class="fa fa-comments"></i>
                                        </span>

                                        <textarea name="con" id="con" class="form-control" placeholder="Enter Comment"
                                            rows="5"></textarea>

                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>

                            </div>

                            <?php
}
} else {
}
?>

                    </div>
                </div>
        </div>
    </div>

    <!-- /PAGE CONTENT -->
</div>
</body>

</html>