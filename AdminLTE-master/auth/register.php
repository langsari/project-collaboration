
<?php

$success = 0;
if (isset($_GET['success'])) {
    $success = $_GET['success'];
}

?>

<script language="javascript">
  function passwordStrength(password) {
    var desc = new Array();
    desc[0] = "Weak";
    desc[1] = "Good";
    desc[2] = "Strong";


    var score = 0;

    //if password bigger than 6 give 1 point
    if (password.length > 6) score++;

    //if password has both lower and uppercase characters give 1 point
    if ((password.match(/[a-z]/)) && (password.match(/[A-Z]/))) score++;

    //if password has at least one number give 1 point
    if (password.match(/\d+/)) score++;

    //if password has at least one special caracther give 1 point
    if (password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) score++;

    //if password bigger than 12 give another 1 point
    if (password.length > 12) score++;

    document.getElementById("passwordDescription").innerHTML = desc[score];
    document.getElementById("passwordStrength").className = "strength" + score;
  }

  function validate(evt) {
    var theEvent = evt || window.event;

    // Handle paste
    if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
    } else {
      // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if (!regex.test(key)) {
      theEvent.returnValue = false;
      if (theEvent.preventDefault) theEvent.preventDefault();
    }
  }
</script>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>IT PROJECT | Registration Page</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition register-page ">
  <div class="register-box ">
    <div class="register-logo">
      <a href="../../index2.html"><b>IT PROJECT</b></a>
    </div>


      <div class="card card-primary card-outline">
      <div class="card-body register-card-body">
        <p class="login-box-msg ">Register a new membership</p>
      <?php if ($success == 1): ?>
        <div class="alert alert-success" role="alert">
          <i class="glyphicon glyphicon-ok"></i> Register Successful! Please wait confirmation by Administrator <a href="../index.php">Back to Homepage</a>
        </div>
        <?php endif;?>
        <form id="add" name="add" method="post" action="checkregis.php" enctype="multipart/form-data" onsubmit="return checkForm()"  >


          <div class="input-group mb-3 ">
               ID  Student: &nbsp;
            <input type="text" class="form-control" aria-describedby="basic-addon1" id="member_idcard"
              name="member_idcard" placeholder="572431003" autocomplete="off" required
              aria-describedby="basic-addon1" onkeypress='validate(event)' maxlength="9">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-id-card"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
                           Username: &nbsp;
            <input type="text" class="form-control" placeholder="Naemah " id="member_username"
              name="member_username" autocomplete="off" required aria-describedby="basic-addon1">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>


       <div class="input-group mb-3">
                           Fullname: &nbsp;&nbsp;&nbsp;
            <input type="text" class="form-control" placeholder="Nik-Naemah Uma" id="member_fullname"
              name="member_fullname" autocomplete="off" required aria-describedby="basic-addon1">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>


           <div class="input-group mb-3">
                                       Phone: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <input type="text" class="form-control" id="member_phone" name="member_phone"
                placeholder="Example: 083-185-1521" autocomplete="off" required aria-describedby="basic-addon1"
                onkeypress='validate(event)' maxlength="10">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-phone"></span>
                </div>
              </div>
            </div>

           <div class="input-group mb-3">
                                       Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <input type="text" class="form-control" id="member_email" name="member_email"
                placeholder="Naemah123@gmail.com" autocomplete="off" aria-describedby="basic-addon1"
                pattern="^[a-zA-Z0-9]+@gmail\.com$" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>

       <div class="input-group mb-3">
              Gender: &nbsp;&nbsp; &nbsp;&nbsp;<label class="radio-inline"> <input type="radio" name="member_gender"
                  value="Male" required aria-describedby="basic-addon1"> &nbsp;&nbsp; Male</label>
              &nbsp;&nbsp; &nbsp;&nbsp; <label class="radio-inline"><input type="radio" name="member_gender"
                  value="Female" aria-describedby="basic-addon1">
                &nbsp;&nbsp; Female</label>
              <div class="input-group-append">

</div>
</div>


          <div class="input-group mb-3">
                                                   Password: &nbsp;

            <input type="password" name="member_password" id="member_password" placeholder="********"
              onKeyUp="passwordStrength(this.value)" class="form-control" autocomplete="off" required
              aria-describedby="basic-addon1" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>


          <center>


            <div id="passwordDescription"></div>
            <div id="passwordStrength" class="strength0"></div>
            <br>
</center>





            <input type="text" class="form-control" id="member_pos" name="member_pos" value="Student" hidden="">



            <!-- /.col -->
            <center>

            <div class="col-6">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>

            <!-- /.col -->

        </form>


        <a href="login.php" class="text-center">I already have an account</a>
        <p class="mb-1">
          <a href="../index.php">Homepage</a>
        </p>
      </div>
      </center>

      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
</body>

</html>