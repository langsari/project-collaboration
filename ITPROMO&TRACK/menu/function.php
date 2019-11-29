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



function fieldstudy($fieldstudy){
	if($fieldstudy == "1"){
		return "Software Engineering";
	}else if($fieldstudy == "2"){

	return "Computer Multimedia";
	}else if($fieldstudy == "3"){
		
			return "Computer Networking";

	}


}







//Function to get group member
function get_group_member($group_id){
	$rows = "";
require 'connect.php';
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
function get_adviser1(){

require 'connect.php';
	$member_id = $_SESSION['id'];

	$sql = "SELECT group_id FROM member WHERE member_id = '$member_id' AND member_pos = '1'";

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



//Get group ID from mb_id as Student
function get_group_id(){

require 'connect.php';
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



function get_ag_id($group_id){
require 'connect.php';
	$sql = "SELECT advisergroup_id FROM advisergroup WHERE group_id = '$group_id' ";
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




//Function to get adivisor
function get_advisor($group_id){
	
require 'connect.php';

$sql = "SELECT advisergroup.member_id, member.member_fullname FROM advisergroup
LEFT JOIN member ON advisergroup.member_id = member.member_id
					WHERE advisergroup.group_id = '$group_id' AND advisergroup.advisergroup_status = '1'";
	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			return $row->member_fullname;
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
require 'connect.php';
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


//Select topic name from TABLE_REQEUST_TOPIC
function get_files($files_id){
require 'connect.php';
	$sql = "SELECT files_filename FROM files WHERE files_id = '$files_id' AND status = '1'";
	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			return $row->files_filename;
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}



//Check student ever send request advisor or not
function never_request_advisor($group_id){
require 'connect.php';
	$sql = "SELECT advisergroup_id FROM advisergroup WHERE group_id = '$group_id' ";
	if($rs = $db->query($sql)){
		if($rs->num_rows > 0){
			return false;
		}else{
			return true;
		}
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


function status_to_text($status){
	if($status == 'w'){
		return "<span class='text-info'>Waiting</span>";
	}else if($status == '1'){
		return "<span class='text-success'>Approved</span>";
	}
}


function status_to_text1($status){
	
	if($status == ''){
		return "<span class='text-info'>Waiting</span>";
	}else if($status == '4'){
		return "<span class='text-success'>Approved</span>";
	}
}


?>