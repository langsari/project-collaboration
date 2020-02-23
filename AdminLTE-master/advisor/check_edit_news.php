<?php


if(empty($submit))
{


include("../menu/function.php");
require '../menu/connect.php';


	
 $news_id=$_POST['news_id'];
$news_topic=$_POST['news_topic'];
$news_detail=$_POST['news_detail'];
$news_date=$_POST['news_date'];


$sql = "UPDATE  news_topic SET news_id = '$news_id', news_topic = '$news_topic', 
news_detail = '$news_detail' ,news_date  = '$news_date'

WHERE news_id = '$news_id'";


if($db->query($sql)){
		$db->close();

			echo "<script>alert('Edit Success');window.location = \"add_general_topic.php\";</script>";


	}else{
		echo $db->error;
		$db->close();
	}
}else{
	echo "Function is not executed!";
}



	




?>