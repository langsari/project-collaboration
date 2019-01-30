<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">


   <form id="add" name="add" method ="post" action ="checkregis.php" onsubmit="return checkForm()" >

          <div class="form-group">
            <div class="form-row">


    <div class="col-md-6">
                <label for="id">ID Student</label>
                <input class="form-control" name="mb_id" id="mb_id" type="text" placeholder="Enter ID">
              </div>
                 

              <div class="col-md-6">
                <label for="username ">Username</label>
                <input class="form-control" name="mb_username" id="mb_username" type="text" placeholder="Enter username">
              </div>
                 
                   <div class="col-md-6">
                <label for="name ">Fullname</label>
                <input class="form-control" name="mb_name" id="mb_name" type="text" placeholder="Enter fullname">
              </div>

                  <div class="col-md-6">
                <label for="password"> Password</label>
                <input class="form-control" name="mb_password"  id="mb_password" type="password" placeholder="Enter password">
              </div>

                 <div class="col-md-6">
                <label for="phone">Phone</label>
                <input class="form-control" name="mb_phone" id="mb_phone" type="text" placeholder="Enter phone number">
              </div>
             

                <div class="form-group">
            <label for="email">Email address</label>
            <input class="form-control"  name="mb_email" id="mb_email" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
     </div>

         <span class="status">Status </span>
         <select name="mb_status" id="mb_status">
        <option value="select">Position</option>
        <option value="dean">Dean</option>
        <option value="officer">Officer</option>
        <option value="student">Student</option>
        <option value="lecture">Lecture</option>
   
         </select>
</p>
  <p>
       <span class="gender">Gender </span>
         <select name="mb_gender" id="mb_gender">
        <option value="select">Gender</option>
        <option value="male">Male</option>
          <option value="female">Female</option>
      </select>

            
             

            </div>
          </div>
          <button class="btn btn-primary btn-block">Register</button> 
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
