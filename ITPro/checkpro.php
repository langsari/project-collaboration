<?php
$servername = "localhost";
$username = "root" ;
$password = "";
$dbname = "itpromo";

//Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
//echo"Welcome to University's database";
//Check connection
if(!$conn){
	die("Connection failed: ". mysqli_connect_error('Could not connect to the database'));
}


$pr_id=$_POST['pr_id'];
$pr_name=$_POST['pr_name'];
$pr_abstract=$_POST['pr_abstract'];
$pr_dateyear=$_POST['pr_dateyear'];
$pr_status=$_POST['pr_status'];
$pr_proposal=$_POST['pr_proposal'];


$query="INSERT INTO project(pr_id,pr_name,pr_abstract,pr_dateyear,pr_status,pr_proposal)
values('$pr_id','$pr_name','$pr_abstract','$pr_dateyear','$pr_status','$pr_proposal')";




if(mysqli_query($conn,$query)){
		 echo "<script>alert('Congratulation! Already add product Now!' )</script>";
		  	  echo "<script>window.open('homestudent.php','_self')</script>";
}
else{
	echo "Could not insert into database";
}

?>

</body>
</html>