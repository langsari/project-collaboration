<?php
$servername = "localhost";
$username = "root" ;
$password = "";
$dbname = "itpromo";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("Connetion failed:".mysqli_connect_error('Could not connected to the DB'));
}


$mb_id=$_POST['mb_id'];
$mb_username=$_POST['mb_username'];
$mb_password=$_POST['mb_password'];
$mb_name=$_POST['mb_name'];
$mb_phone=$_POST['mb_phone'];
$mb_email=$_POST['mb_email'];
$mb_status=$_POST['mb_status'];
$mb_gender=$_POST['mb_gender'];



$query="INSERT INTO member(mb_id,mb_username,mb_password,mb_name,mb_phone,mb_email,mb_status,mb_gender)values('$mb_id','$mb_username','$mb_password','$mb_name','$mb_phone','$mb_email','$mb_status','$mb_gender')";

if(mysqli_query($conn,$query)){
	
		 echo "<script>alert('Congratulation! You are member Now!' )</script>";
		  	  echo "<script>window.open('login.php','_self')</script>";

	}

	else{
	 echo "<script>alert('MAY YOUR Email Or ID are USED! Please! Try Again')</script>";
	  echo "<script>window.open('register.php','_self')</script>";
	 
	}
	
	
	?>
