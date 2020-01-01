<?php

//All projects function is here and it is includeed in index.php

function gender($gender){
	if($gender == "Male"){
		return "Male";
	}else{
		return "Female";
	}
}

function position($position){
	if($position == "Lecturer"){
		return "<font color='blue'><i>Lecturer</i></font>";

	}else if($position == "Student"){
		
			return "<font color='green'><i>Student</i></font>";

	}
else if($position == "Officer"){
		
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
	if($fieldstudy == "Software Engineering"){
		return "Software Engineering";
	}else if($fieldstudy == "Computer Multimedia"){

	return "Computer Multimedia";
	}else if($fieldstudy == "Computer Networking"){
		
			return "Computer Networking";

	}


}


function get_id_advisor($member_id){
require 'connect.php';
	$sql = "SELECT member_fullname FROM member WHERE member_id = '$member_id' AND member_pos = 'Advisor'";
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


//Get group code from mb_id as Student
function get_groupcode(){

require 'connect.php';
	$member_id = $_SESSION['id'];

	$sql = "SELECT group_number FROM partnergroup ";

	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			return $row->group_number;
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}




//Get group ID from mb_id as Student
function get_adviser1(){

require 'connect.php';
	$member_id = $_SESSION['id'];

	$sql = "SELECT group_id FROM member WHERE member_id = '$member_id' AND member_pos = 'Advisor'";

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

	$sql = "SELECT group_id FROM member WHERE member_id = '$member_id' AND member_pos = 'Student'";

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
function get_group_id1(){

require 'connect.php';
	$member_id = $_SESSION['id'];

	$sql = "SELECT advisergroup_id FROM advisergroup WHERE member_id = '$member_id' ";

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


function get_ag_id1(){

require 'connect.php';
	$member_id = $_SESSION['id'];

$sql = "SELECT advisergroup_id FROM advisergroup WHERE group_id = '$member_id' ";


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

$sql = "SELECT advisergroup.member_id, member.member_fullname,advisergroup.advisergroup_topic FROM advisergroup
LEFT JOIN member ON advisergroup.member_id = member.member_id
					WHERE advisergroup.group_id = '$group_id' AND advisergroup.advisergroup_status = '1'";
	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			return $row->member_fullname;
			       $row->advisergroup_topic;
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}

//Function to get topic project
function get_topic($group_id){
	
require 'connect.php';

$sql = "SELECT advisergroup.member_id,advisergroup.advisergroup_topic FROM advisergroup
LEFT JOIN member ON advisergroup.member_id = member.member_id
					WHERE advisergroup.group_id = '$group_id' AND advisergroup.advisergroup_status = '1'";
	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			return $row->advisergroup_topic;
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}


//Function to get Committee lsit
function get_committee($group_id){
require 'connect.php';
	$rows = "";
	$sql = "SELECT committeegroup.committeegroup_id, member.member_fullname FROM committeegroup
					LEFT JOIN member ON committeegroup.member_id = member.member_id
					WHERE committeegroup.group_id = '$group_id'";
	if($rs = $db->query($sql)){
		while($row = $rs->fetch_object()){
			$rows .= "<p>".$row->member_fullname." <a href='admin/sql_removecommittee.php?id=".$row->committeegroup_id."' title='Remove this committee' onclick='return confirm_removecommittee()' class='btn btn-link btn-xs'><i class='glyphicon glyphicon-remove'></i></a></p>";
		}
		return $rows;
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
        $rows .= "<p>".$row->member_idcard." &nbsp&nbsp&nbsp&nbsp ".$row->member_fullname."</p>";
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