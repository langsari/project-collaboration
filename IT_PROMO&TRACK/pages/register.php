<!DOCTYPE HTML>
<html>




<style>



h1
{
    text-align:center;
}

#passwordStrength
{
    height:10px;
    border : solid 0px ;
    float:left;
}

.strength0
{
    width:20px;
    background:#F00;
}

.strength1
{
    width:150px;
    background:#FC0;
}

.strength2
{
    width:350px;    
    background:#0F0;
}
.form #confirmMessage {font-size: 0.9em; margin:5px; padding:10px 10px;}


</style>
</style>
<title>Sign Up</title>
<script language="javascript">


function passwordStrength(password)
{
    var desc = new Array();
    desc[0] = "Weak";
    desc[1] = "Good";
    desc[2] = "Strong";
    

    var score   = 0;

    //if password bigger than 6 give 1 point
    if (password.length > 6) score++;

    //if password has both lower and uppercase characters give 1 point  
    if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;

    //if password has at least one number give 1 point
    if (password.match(/\d+/)) score++;

    //if password has at least one special caracther give 1 point
    if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;

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
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}

</script>


<head>
    <title>Register ITpromo</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/core.css">
    <link rel="stylesheet" href="../assets/css/components.css">
    <link rel="stylesheet" href="../assets/icons/fontawesome/styles.min.css">

    <script type="text/javascript" src="../lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="../lib/js/tether.min.js"></script>
    <script type="text/javascript" src="../lib/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../assets/js/app.min.js"></script>
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
                            </div>

                            <h4 class="text-light"> <b>Register</h4>
                            <form id="add" name="add" method="post" action="../function/checkregis.php"
                                onsubmit="return checkForm()">


                                <div class="user-details">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-id-card"></i>
                                            </span>
                                            <input type="text" class="form-control"
                                                aria-describedby="basic-addon1" id="member_idcard" name="member_idcard"
                                               placeholder="Example: 572431003"   autocomplete="off" required aria-describedby="basic-addon1" onkeypress='validate(event)'  maxlength="9" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Example: Naemah "  
                                                id="member_username" name="member_username"  autocomplete="off" required aria-describedby="basic-addon1">
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <input type="text" class="form-control" id="member_fullname"
                                                name="member_fullname" placeholder="Example: Naemah Nik-Abdullah "   autocomplete="off" required aria-describedby="basic-addon1">
                                        </div>
                                    </div>



    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-lock"></i>
                                            </span>
          <input type="password" name="member_password" id="member_password" placeholder="Example: ********" onKeyUp="passwordStrength(this.value)"  class="form-control"  autocomplete="off" required aria-describedby="basic-addon1" />
          
       </div>
                                    </div>
                                    <center>
  

<div id="passwordDescription"></div>
<div id="passwordStrength" class="strength0"></div>
<br>


                                

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                            <input type="text" class="form-control" id="member_phone"
                                                name="member_phone" placeholder="Example: 0831851521"  autocomplete="off" required aria-describedby="basic-addon1" onkeypress='validate(event)'  maxlength="10" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-envelope-square"></i>
                                            </span>
                                            <input type="text" class="form-control" id="member_email"
                                                name="member_email" placeholder="Example: Naemah123@gmail.com"  autocomplete="off"  aria-describedby="basic-addon1" 
pattern="^[a-zA-Z0-9]+@gmail\.com$" required

                                                 >
                                        </div>
                                    </div>



                                                                     <div class="form-group">

                                        <div class="input-group"> 



                                                <i class="fa fa-transgender "></i>
                                          
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