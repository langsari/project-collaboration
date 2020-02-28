<?php

$error = 0;
if(isset($_GET['error'])){
  $error = $_GET['error'];
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
               <form id="add" name="add" method ="post" action ="../function/checkregis.php" onsubmit="return checkForm()" >
              <h1>Register Form</h1>
     
              <div>
                                        <input type="text" class="form-control" placeholder="User ID " aria-describedby="basic-addon1" id="member_idcard" name="member_idcard" autocomplete="off" required>
              </div>
              <div>
                                        <input type="text" class="form-control" placeholder="Username" id="member_username" name="member_username" autocomplete="off" required aria-describedby="basic-addon1">
              </div>

<div>
                                        <input type="text" class="form-control" id="member_fullname" name="member_fullname" placeholder="Fullname" autocomplete="off" required aria-describedby="basic-addon1">
              </div>

              <div>
                                        <input type="password" class="form-control" id="member_password" name="member_password" placeholder="Password" autocomplete="off" required aria-describedby="basic-addon1">
              </div>
              <div>
                       <input type="text" class="form-control" id="member_phone" name="member_phone" placeholder="Phone Number" autocomplete="off" required aria-describedby="basic-addon1">

              </div>
              <div>
                                        <input type="text" class="form-control" id="member_email" name="member_email" placeholder="Email" autocomplete="off" required aria-describedby="basic-addon1">
              </div>


<div><label class="radio-inline"> <input type="radio" name="member_gender" value="Male" required aria-describedby="basic-addon1">          &nbsp;&nbsp;  Male</label> 
                          &nbsp;&nbsp; &nbsp;&nbsp; <label class="radio-inline"><input type="radio" name="member_gender" value="Female" aria-describedby="basic-addon1">           &nbsp;&nbsp; Female</label></div>

       <input type="text" class="form-control" id="member_pos" name="member_pos" value="Student" hidden="" >


              <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
                  <a  href="login.php" > Login </a>
                </p>
                  <p class="change_link">
                  <a  href="../index.php"> Homepage </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                 
                </div>
              </div>
            </form>
          </section>
        </div>

   
        </div>
      </div>
    </div>
  </body>
</html>
