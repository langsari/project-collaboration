
<html>
<head>
<title>Multi step registration form PHP, JQuery, MySQLi</title>
<style>
body{font-family:tahoma;font-size:12px;}
#signup-step{margin:auto;padding:0;width:53%}
#signup-step li{list-style:none; float:left;padding:5px 10px;border-top:#004C9C 1px solid;border-left:#004C9C 1px solid;border-right:#004C9C 1px solid;border-radius:5px 5px 0 0;}
.active{color:#FFF;}
#signup-step li.active{background-color:#004C9C;}
#signup-form{clear:both;border:1px #004C9C solid;padding:20px;width:50%;margin:auto;}
.demoInputBox{padding: 10px;border: #CDCDCD 1px solid;border-radius: 4px;background-color: #FFF;width: 50%;}
.signup-error{color:#FF0000; padding-left:15px;}
.message { 
	color: #fb4314;
	font-size: 19px;
	font-weight: bold;
	padding: 10px;
	text-align: center;
	width: 100%;
}
.btnAction{padding: 5px 10px;background-color: #F00;border: 0;color: #FFF;cursor: pointer; margin-top:15px;}
label{line-height:35px;}
h1{
	margin:3px 0;
	font-size:13px;
	text-decoration:underline;
	text-align:center;
}
.tLink{
	font-family:tahoma;
	size:12px;
	padding-left:10px;
	text-align:center;
}
</style>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script>
function validate() {
var output = true;
$(".signup-error").html('');
if($("#personal-field").css('display') != 'none') {
	if(!($("#name").val())) {
		output = false;
		$("#name-error").html("Name required!");
	}
	if(!($("#email").val())) {
		output = false;
		$("#email-error").html("Email required!");
	}	
	if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#email-error").html("Invalid Email!");
		output = false;
	}
}

if($("#password-field").css('display') != 'none') {
	if(!($("#user-password").val())) {
		output = false;
		$("#password-error").html("Password required!");
	}	
	if(!($("#confirm-password").val())) {
		output = false;
		$("#confirm-password-error").html("Confirm password required!");
	}	
	if($("#user-password").val() != $("#confirm-password").val()) {
		output = false;
		$("#confirm-password-error").html("Password not matched!");
	}	
}
return output;
}
$(document).ready(function() {
	$("#next").click(function(){
		var output = validate();
		if(output) {
			var current = $(".active");
			var next = $(".active").next("li");
			if(next.length>0) {
				$("#"+current.attr("id")+"-field").hide();
				$("#"+next.attr("id")+"-field").show();
				$("#back").show();
				$("#finish").hide();
				$(".active").removeClass("active");
				next.addClass("active");
				if($(".active").attr("id") == $("li").last().attr("id")) {
					$("#next").hide();
					$("#finish").show();				
				}
			}
		}
	});
	$("#back").click(function(){ 
		var current = $(".active");
		var prev = $(".active").prev("li");
		if(prev.length>0) {
			$("#"+current.attr("id")+"-field").hide();
			$("#"+prev.attr("id")+"-field").show();
			$("#next").show();
			$("#finish").hide();
			$(".active").removeClass("active");
			prev.addClass("active");
			if($(".active").attr("id") == $("li").first().attr("id")) {
				$("#back").hide();			
			}
		}
	});
});
</script>
</head>
<body>
<div class='tLink'><strong>Tutorial Link:</strong></div><br/>
<h1>Multi step registration form PHP, JQuery, MySQLi</h1>
<div class="message"><?php if(isset($message)) echo $message; ?></div>
<ul id="signup-step">
	
	<li id="personal" class="active">PF01</li>
	<li id="password">PF02</li>
	<li id="general">PF03</li>
		<li id="general">PF04</li>
	<li id="general">PF05</li>
	<li id="general">PF06</li>
	<li id="general">PF07</li>
	<li id="general">PF08</li>
	<li id="general">PF09</li>
	<li id="general">PF10</li>
		<li id="general">PF11</li>
	<li id="general">PF12</li>
	<li id="general">PF13</li>
</ul>
<form name="frmRegistration" id="signup-form" method="post">
	<div id="personal-field">
		<label>Name</label><span id="name-error" class="signup-error"></span>
		<div><input type="text" name="name" id="name" class="demoInputBox"/></div>

				<label>Name</label><span id="file-error" class="signup-error"></span>
		<div><input type="file" name="file" id="file" class="demoInputBox"/></div> 
		<input class="btnAction" type="button"  value="Next" >


		<label>Email</label><span id="email-error" class="signup-error"></span>
		<div><input type="text" name="email" id="email" class="demoInputBox" /></div>
	</div>
	<div id="password-field" style="display:none;">
		<label>Enter Password</label><span id="password-error" class="signup-error"></span>
		<div><input type="password" name="password" id="user-password" class="demoInputBox" /></div>
		<label>Re-enter Password</label><span id="confirm-password-error" class="signup-error"></span>
		<div><input type="password" name="confirm-password" id="confirm-password" class="demoInputBox" /></div>
	</div>
	<div id="general-field" style="display:none;">
		
		<label>Gender</label>
		<div>
		<select name="gender" id="gender" class="demoInputBox">
		<option value="male">Male</option>
		<option value="female">Female</option>
		</select></div>
	</div>
	<div>
		<input class="btnAction" type="button" name="back" id="back" value="Back" style="display:none;">
		<input class="btnAction" type="button" name="next" id="next" value="Next" >
		<input class="btnAction" type="submit" name="finish" id="finish" value="Finish" style="display:none;">
	</div>
</form>
</body>
</html>