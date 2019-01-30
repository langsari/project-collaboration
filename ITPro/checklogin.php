<?php
session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("itpromo");
	
	$strSQL = "SELECT * FROM member WHERE mb_username = '".mysql_real_escape_string($_POST['mb_username'])."' 
	and mb_password = '".mysql_real_escape_string($_POST['mb_password'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	
	if(!$objResult)
	{
			header("location:login.php?Username_or_Password_not_match");
	}
	
	else
	{
		   
			$_SESSION["mb_id"] = $objResult["mb_id"];
			$_SESSION["mb_password"] = $objResult["mb_password"];
			$_SESSION["mb_status"] = $objResult["mb_status"];
			

		session_write_close();
	
			if($objResult["mb_status"] == "student")
			{
				
				header("location:homestudent.php");
				exit();
			}
			else if($objResult["mb_status"] == "Dean")
			{
				
				header("location:homedean.php");
				exit();
			}
			else if($objResult["mb_status"] == "Officer")
			{
				
				header("location:homeoffic.php");
				exit();
			}
			else if($objResult["mb_status"] == "Lecture")
			{
				
				header("location:homelect.php");
				exit();
			}
			else if($objResult["mb_status"] == "Admin")
			{
				
				header("location:homeadmin.php");
				exit();
			}
	}
	mysql_close();
	
?>
	




