         <!-- PAGE CONTENT -->


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

         <div class="content">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-block">
                             <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                 data-target="#addmember" style="margin-bottom: 10px;">

                                 <i class="glyphicon glyphicon-plus"></i> Create New member
                             </button>
                             <h6 class="card-title text-bold">Default Datatable</h6>
                             <?php
   // require 'menu/function.php';
  $strSQL = "SELECT * FROM member  WHERE member_pos  AND admin_id = '0' ORDER BY member_fullname";
        ?>
                             <table class="display datatable table table-stripped" cellspacing="0" width="100%">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>ID</th>
                                         <th>Name</th>
                                         <th>Gender</th>
                                         <th>Phone</th>
                                         <th>Email</th>
                                         <th>Position</th>
                                         <th>Status</th>
                                         <th>#</th>
                                     </tr>
                                 </thead>
                                 <?php
     if($result = $db->query($strSQL)){
                  while($objResult = $result->fetch_object()){
            ?>
                                 <tbody>
                                     <tr>
                                         <td class="text-left"><?php echo $objResult->member_id; ?></td>
                                         <td class="text-left"><?php echo $objResult->member_idcard; ?></td>
                                         <td class="text-left"><?php echo $objResult->member_fullname; ?></td>
                                         <td class="text-left"><?php echo $objResult->member_phone; ?></td>
                                         <td class="text-left"><?php echo $objResult->member_email; ?></td>
                                         <td class="text-left"><?php echo gender($objResult->member_gender); ?></td>
                                         <td class="text-left"><?php echo position($objResult->member_pos); ?></td>
                                         <td class="text-left"><?php echo status($objResult->admin_id); ?></td>
                                         <td><a href="?page=accept&id=<?php echo $objResult->member_id;?>"><i
                                                     class="fa fa-edit" title="View"></i></a></td>
                                     </tr>

                                     <?php
                 }
               }
                   ?>

                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- /PAGE CONTENT -->

         <div class="box-body">

             <!-- Modal -->
             <div class="modal fade" id="addmember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                 <div class="modal-dialog" role="document">
                     <div class="modal-content">
                         <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                     aria-hidden="true">&times;</span></button>
                             <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i> New
                                 Member</h4>
                         </div>
                         <div class="modal-body">
                             <form id="add" name="add" method="post" action="admin/check_accept_member.php"
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
                                             <input type="text" class="form-control" placeholder="Username"
                                                 id="member_username" name="member_username" autocomplete="off" required
                                                 aria-describedby="basic-addon1">
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
                                         <select class="form-control" name="member_pos" id="member_pos">
                                             <option value="#">Select Position</option>
                                             <option value="Lecturer">Lecturer</option>
                                             <option value="Student">Student</option>
                                             <option value="Officer">Officer</option>

                                         </select>
                                     </div>

                                                                     <div class="form-group">
                                         <div class="input-group">
                                                           <i class="fa fa-transgender "></i>

                                             Gender: &nbsp;&nbsp; &nbsp;&nbsp;<label class="radio-inline"> <input
                                                     type="radio" name="member_gender" value="Male" required
                                                     aria-describedby="basic-addon1"> &nbsp;&nbsp; Male</label>
                                             &nbsp;&nbsp; &nbsp;&nbsp; <label class="radio-inline"><input type="radio"
                                                     name="member_gender" value="Female"
                                                     aria-describedby="basic-addon1"> &nbsp;&nbsp; Female</label>
                                         </div>
                                     </div>

                                     <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>

                                 </div>
                         </div>
                     </div>
                 </div>
                 </form>

                 </body>

                 </html>