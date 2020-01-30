<!DOCTYPE HTML>
<html>

<head>
    <title>Register ITpromo</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../dist/assets/css/bootstrap.css">
    <link rel="stylesheet" href="../dist/assets/css/core.css">
    <link rel="stylesheet" href="../dist/assets/css/components.css">
    <link rel="stylesheet" href="../dist/assets/icons/fontawesome/styles.min.css">

    <script type="text/javascript" src="../dist/lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="../dist/lib/js/tether.min.js"></script>
    <script type="text/javascript" src="../dist/lib/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../dist/assets/js/app.min.js"></script>
</head>

<body>
    <div class="page-container">
        <!-- PAGE CONTENT -->
        <div class="content h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="register card auth-box mx-auto my-auto">
                        <div class="card-block text-center">
                            <div class="user-icon">
                                <i class="fa fa-user-circle-o"></i>
                            </div>

                            <h4 class="text-light">Register</h4>
                            <form id="add" name="add" method="post" action="../function/checkregis.php"
                                onsubmit="return checkForm()">


                                <div class="user-details">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user-o"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="User ID "
                                                aria-describedby="basic-addon1" id="member_idcard" name="member_idcard"
                                                autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user-o"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Username"
                                                id="member_username" name="member_username" autocomplete="off" required
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user-md"></i>
                                            </span>
                                            <input type="text" class="form-control" id="member_fullname"
                                                name="member_fullname" placeholder="Fullname" autocomplete="off"
                                                required aria-describedby="basic-addon1">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user-md"></i>
                                            </span>
                                            <input type="password" class="form-control" id="member_password"
                                                name="member_password" placeholder="Password" autocomplete="off"
                                                required aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user-md"></i>
                                            </span>
                                            <input type="text" class="form-control" id="member_phone"
                                                name="member_phone" placeholder="Phone Number" autocomplete="off"
                                                required aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user-md"></i>
                                            </span>
                                            <input type="text" class="form-control" id="member_email"
                                                name="member_email" placeholder="Email" autocomplete="off" required
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>


                                    <div class="col-md-5">
                                        <div class="input-group">
                                            Gender: &nbsp;&nbsp; &nbsp;&nbsp;<label class="radio-inline"> <input
                                                    type="radio" name="member_gender" value="Male" required
                                                    aria-describedby="basic-addon1"> &nbsp;&nbsp; Male</label>
                                            &nbsp;&nbsp; &nbsp;&nbsp; <label class="radio-inline"><input type="radio"
                                                    name="member_gender" value="Female" aria-describedby="basic-addon1">
                                                &nbsp;&nbsp; Female</label>
                                        </div>
                                    </div>


                                    <input type="text" class="form-control" id="member_pos" name="member_pos"
                                        value="Student" hidden="">


                                    <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>

                                    <div class="user-links">
                                        <a href="login.php" class="pull-left">Back To Login</a>
                                    </div>
                                    <a href="../index.php" class="pull-left">Go to Homepage</a>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /PAGE CONTENT -->
    </div>
</body>

</html>