<?php

//All projects function is here and it is includeed in index.php

function gender($gender){
	if($gender == "m"){
		return "Male";
	}else{
		return "Female";
	}
}

function position($position){
	if($position == "1"){
		return "<font color='blue'><i>Advisor</i></font>";
	}else if($position == "2"){

	return "<font color='yellow'><i>Committee</i></font>";
	}else if($position == "3"){
		
			return "<font color='green'><i>Student</i></font>";

	}
else if($position == "4"){
		
			return "<font color='black'><i>Officer</i></font>";

	}

}

function status($status){
	if($status != "0"){
		return "<span class='text-success'><i>Approved</i></span>";
	}else{
		return "<span class='text-danger'><i>Not Approved</i></span>";
	}
}





//Function to get group member
function get_group_member($group_id){
	$rows = "";
require 'db/ConnectDB.php';
  $sql = "SELECT member_fullname, member_idcard FROM member WHERE group_id = '$group_id'";
	if($rs = $db->query($sql)){
		if($rs->num_rows > 0){
			while($row = $rs->fetch_object()){
        $rows .= "<p>".$row->member_idcard." ".$row->member_fullname."</p>";
			}
		}else{
			$rows = "<i class='text-danger'>- No students join this group yet -</i>";
		}
		echo $rows;
		$db->close();
	}else{
		return $db->error;
		$db->close();
	}
}




//Get group ID from mb_id as Student
function get_group_id(){

require 'db/ConnectDB.php';
	$member_id = $_SESSION['id'];

	$sql = "SELECT group_id FROM member WHERE member_id = '$member_id' AND member_pos = '3'";

	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			return $row->group_id;
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}




function get_advisergroup_id($group_id){
require 'db/ConnectDB.php';
	$sql = "SELECT  advisergroup_id FROM  advisergroup WHERE group_id = '$group_id' ";
	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			return $row->advisergroup_id;
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}



//Function to get member of the group
function get_member_list($group_id){
	$rows = "";
require 'db/ConnectDB.php';
  $sql = "SELECT member_fullname, member_idcard FROM member WHERE group_id = '$group_id'";
	if($rs = $db->query($sql)){
		if($rs->num_rows > 0){
			while($row = $rs->fetch_object()){
        $rows .= "<p>".$row->member_idcard." ".$row->member_fullname."</p>";
			}
		}else{
			$rows = "<i class='text-danger'>- No member in this group -</i>";
		}
		return $rows;
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}



//Function to get member of the group
function get_member_list1($group_id){
	$rows = "";
require 'db/ConnectDB.php';
  $sql = "SELECT member_fullname, member_idcard FROM member WHERE member_id = '$group_id'";
	if($rs = $db->query($sql)){
		if($rs->num_rows > 0){
			while($row = $rs->fetch_object()){
        $rows .= "<p>".$row->member_idcard." ".$row->member_fullname."</p>";
			}
		}else{
			$rows = "<i class='text-danger'>- No member in this group -</i>";
		}
		return $rows;
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}


//Function to get member of the group

function status_for_advisor($status){
	if($status == '0'){
		return "<span class='text-danger'>Rejected</span>";
	}else if($status == 'w'){
		return "<span class='text-info'>Waiting</span>";
	}else if($status == '1'){
		return "<span class='text-success'>Approved</span>";
	}
}


?>