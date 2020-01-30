<?php

$error = 0;
if(isset($_GET['error'])){
  $error = $_GET['error'];
}

?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Login ITpromo</title>
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
                    <div class="login card auth-box mx-auto my-auto">
                        <div class="card-block text-center">
                            <div class="user-icon">
                                <i class="fa fa-user-circle"></i>
                            </div>

                            <h4 class="text-light">Login</h4>

                            <?php if($error == 1): ?>
                            <div class="alert alert-danger" role="alert">
                                <i class="glyphicon glyphicon-alert"></i> Invalid username or password, or you are not
                                activated by Administrator!
                            </div>
                            <?php endif; ?>


                            <form action="../function/checklogin.php" method="post">

                                <div class="user-details">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user-o"></i>
                                            </span>
                                            <input type="text" class="form-control" id="username" name="username"
                                                placeholder="Enter Username" autocomplete="off" required
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-key"></i>
                                            </span>
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Password" autocomplete="off" required
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>

                                <div class="user-links">
                                    <a href="../index.php" class="pull-left">Go to Homepage</a>

                                    <a href="register.php" class="pull-right">Register</a>
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