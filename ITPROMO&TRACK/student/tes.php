<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>jQuery Multi Step Form Demo</title>
<style>
* {
margin: 0;
padding: 0;
}
html {
height: 8%;
background-color: #CACBCF;

text-align:center;
}
body {
font-family: arial, verdana;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
<script src="assets/jquery-multi-step-form.js" type="text/javascript"></script>
<link href="assets/jquery-multi-step-form.css" media="screen" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="multistepform-example-container">
<ul id="multistepform-progressbar">
<li class="active">Account Setup</li>
<li>Social Profiles</li>
<li>Personal Details</li>
</ul>
<div class="form">
<form action="">
<h2 class="fs-title">Create your account</h2>
<h3 class="fs-subtitle">This is step 1</h3>
<input type="text" name="email" placeholder="Email">
<input type="password" name="pass" placeholder="Password">
<input type="password" name="cpass" placeholder="Confirm Password">
<input type="button" name="next" class="next button" value="Next">
</form>
</div>
<div class="form">
<form action="">
<h2 class="fs-title">Social Profiles</h2>
<h3 class="fs-subtitle">Your presence on the social network</h3>
<input type="text" name="twitter" placeholder="Twitter">
<input type="text" name="facebook" placeholder="Facebook">
<input type="text" name="gplus" placeholder="Google Plus">
<input type="button" name="previous" class="previous button" value="Previous">
<input type="button" name="next" class="next button" value="Next">
</form>
</div>
<div class="form">
<form action="">
<h2 class="fs-title">Personal Details</h2>
<h3 class="fs-subtitle">We will never sell it</h3>
<input type="text" name="fname" placeholder="First Name">
<input type="text" name="lname" placeholder="Last Name">
<input type="text" name="phone" placeholder="Phone">
<textarea name="address" placeholder="Address"></textarea>
<input type="button" name="previous" class="previous button" value="Previous">
<input type="button" name="submit" class="next button" value="Finish">
</form>
</div>
</div>
<script>
$(document).ready(function(){
    $.multistepform({
        container:'multistepform-example-container',
        form_method:'GET',
    })
});
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
