<?php

//All projects function is here and it is includeed in index.php

function gender($gender){
	if($gender == "m"){
		return "Male";
	}else{
		return "Female";
	}
}

function position($po){
	if($po == "1"){
		return "Advisor";
	}else if($po == "2"){
		return "Committee";
	}else if($po == "3"){
		return "Student";
	}
}

function member_status($stat){
	if($stat != "0"){
		return "<span class='text-success'><i>Confirmed</i></span>";
	}else{
		return "<span class='text-danger'><i>Not Confirmed</i></span>";
	}
}

function list_of_description($mt_id){
	$rows = "";
	require 'connection.php';
	$sql = "SELECT md_des FROM tb_markdescription WHERE mt_id = '$mt_id'";
	if($rs = $db->query($sql)){
		while($row = $rs->fetch_object()){
			$rows = $rows."<p>".$row->md_des."</p>";
		}
		return $rows;
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}

function list_of_subscore($mt_id){
	$rows = "";
	require 'connection.php';
	$sql = "SELECT md_subscore FROM tb_markdescription WHERE mt_id = '$mt_id'";
	if($rs = $db->query($sql)){
		while($row = $rs->fetch_object()){
			$rows = $rows."<p>".$row->md_subscore."</p>";
		}
		return $rows;
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}

//Function to get group member
function get_group_member($group_id){
	$rows = "";
	require 'connection.php';
	$sql = "SELECT mb_name, mb_stid FROM tb_member WHERE g_id = '$group_id'";
	if($rs = $db->query($sql)){
		if($rs->num_rows > 0){
			while($row = $rs->fetch_object()){
				$rows .= "<p>".$row->mb_stid." ".$row->mb_name."</p>";
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

//Function to get project topic of the group
function get_project_topic($group_id){
	$rows = "";
	require 'connection.php';
	$sql = "SELECT tp_name FROM tb_topic WHERE g_id = '$group_id'";
	if($rs = $db->query($sql)){
		if($rs->num_rows > 0){
			if($row = $rs->fetch_object()){
				$rows .= $row->tp_name;
			}
		}else{
			$rows = "<i class='text-danger'>- No Project Topic assign to this group yet -</i>";
		}
		echo $rows;
		$db->close();
	}else{
		return $db->error;
		$db->close();
	}
}

//Check project assignment
function if_no_topic_assign($group_id){
	$rows = "";
	require 'connection.php';
	$sql = "SELECT tp_name FROM tb_topic WHERE g_id = '$group_id'";
	if($rs = $db->query($sql)){
		if($rs->num_rows > 0){
			$rows = "<button class='btn btn-info btn-xs' onclick='edit_assignment(".$group_id.")' data-toggle='modal' data-target='#edit_topic_form'><i class='glyphicon glyphicon-edit'></i> Edit Assignment</button>";
		}else{
			$rows = "<button class='btn btn-success btn-xs' onclick='assign_topic(".$group_id.")' data-toggle='modal' data-target='#assign_topic_form'><i class='glyphicon glyphicon-plus'></i> Assign Topic</button>";
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

	require 'connection.php';
	$mb_id = $_SESSION['id'];
	$sql = "SELECT g_id FROM tb_member WHERE mb_id = '$mb_id' AND mb_pos = '3'";
	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			return $row->g_id;
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}

function get_ag_id($g_id){
	require 'connection.php';
	$sql = "SELECT ag_id FROM tb_advisegroup WHERE g_id = '$g_id' AND å = '1'";
	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			return $row->ag_id;
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}


//Function to get member of the group
function get_member_list($g_id){
	$rows = "";
	require 'connection.php';
 	if($rs = $db->query($sql)){
		if($rs->num_rows > 0){
			while($row = $rs->fetch_object()){
				$rows = "<p>".$row->mb_stid." ".$row->mb_name."</p>";
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


//function to check member is in group or not
function if_in_group(){
	$mb_id = $_SESSION['id'];
	require 'connection.php';
	$sql = "SELECT g_id FROM tb_member WHERE mb_id = '$mb_id'";
	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			if($row->g_id == null){
				return false;
			}else{
				return true;
			}
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}

//Function to get adivisor
function get_advisor($g_id){
	require 'connection.php';

	$sql = "SELECT tb_advisegroup.mb_id, tb_member.mb_name FROM tb_advisegroup
					LEFT JOIN tb_member ON tb_advisegroup.mb_id = tb_member.mb_id
					WHERE tb_advisegroup.g_id = '$g_id' AND tb_advisegroup.ag_accept = '1'";
	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			return $row->mb_name;
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}

//Function to get Committee lsit
function get_committee($g_id){
	require 'connection.php';
	$rows = "";
	$sql = "SELECT tb_commitgroup.cg_id, tb_member.mb_name FROM tb_commitgroup
					LEFT JOIN tb_member ON tb_commitgroup.mb_id = tb_member.mb_id
					WHERE tb_commitgroup.g_id = '$g_id'";
	if($rs = $db->query($sql)){
		while($row = $rs->fetch_object()){
			$rows .= "<p>".$row->mb_name." <a href='admin/sql_removecommittee.php?id=".$row->cg_id."' title='Remove this committee' onclick='return confirm_removecommittee()' class='btn btn-link btn-xs'><i class='glyphicon glyphicon-remove'></i></a></p>";
		}
		return $rows;
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}

//Function to check the users has advisor or not
function if_has_advisor($g_id){
	require 'connection.php';
	$sql = "SELECT mb_id FROM tb_advisegroup WHERE g_id = '$g_id' AND ag_accept = '1'";
	if($rs = $db->query($sql)){
		if($rs->num_rows > 0){
			return true;
		}else{
			return false;
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}

//Get lestest topic request
function last_topic_request(){
	require 'connection.php';
	$ag_id = get_ag_id(get_group_id());
	$sql = "SELECT tr_time FROM tb_topicrequest WHERE ag_id = '$ag_id' ORDER BY tr_id DESC LIMIT 1";
	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			return $row->tr_time;
		}else{
			return "You have not begin any request.";
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}

//Get Lasted exam type request
function get_request_examtype(){
	require 'connection.php';
	$ag_id = get_ag_id(get_group_id());

	$sql = "SELECT tb_marktype.mt_type FROM tb_examrequest
					LEFT JOIN tb_marktype ON tb_examrequest.mt_id = tb_marktype.mt_id
					WHERE tb_examrequest.ag_id = '$ag_id'";
	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			return $row->mt_type;
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}

//Check for already request for exam or not
function if_has_exam_request(){
	require 'connection.php';
	$ag_id = get_ag_id(get_group_id());

	$sql = "SELECT er_id FROM tb_examrequest WHERE ag_id = '$ag_id'";
	if($rs = $db->query($sql)){
		if($rs->num_rows > 0){
			return true;
		}else{
			return false;
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}

//Get lastest er_id
function get_latest_er_id(){
	require 'connection.php';
	$ag_id = get_ag_id(get_group_id());

	$sql = "SELECT er_id FROM tb_examrequest WHERE ag_id = '$ag_id' ORDER BY er_id DESC LIMIT 1";
	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			return $row->er_id;
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}

//Get File location for powerpoint
function powerpoint_path($er_id){
	require 'connection.php';
	$sql = "SELECT er_powerpoint FROM tb_examrequest WHERE er_id = '$er_id'";
	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			if($row->er_powerpoint != null){
				return "<a href='files/".$row->er_powerpoint."' target='_blank' class='btn btn-link'>View/Download</a>";
			}else{
				echo "<i class='text-danger'>No file was uploaded</i>";
			}
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}

//Get File location for report
function report_path($er_id){
	require 'connection.php';
	$sql = "SELECT er_report FROM tb_examrequest WHERE er_id = '$er_id'";
	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			if($row->er_report != null){
				return "<a href='files/".$row->er_report."' target='_blank' class='btn btn-link'>View/Download</a>";
			}else{
				echo "<i class='text-danger'>No file was uploaded</i>";
			}
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}

//Get File location for other
function other_path($er_id){
	require 'connection.php';
	$sql = "SELECT er_other FROM tb_examrequest WHERE er_id = '$er_id'";
	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			if($row->er_other != null){
				return "<a href='files/".$row->er_other."' target='_blank' class='btn btn-link'>View/Download</a>";
			}else{
				echo "<i class='text-danger'>No file was uploaded</i>";
			}
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}

//Chage status velue to use friendly readable text
function status_to_text($status){
	if($status == '0'){
		return "<span class='text-danger'>Rejected</span>";
	}else if($status == 'w'){
		return "<span class='text-info'>Waiting</span>";
	}else if($status == '1'){
		return "<span class='text-success'>Approved</span>";
	}
}

//Get files list acording to er_id
function get_file_list($id){
	$rows = "";
	require 'connection.php';
	$sql = "SELECT er_report, er_powerpoint, er_other FROM tb_examrequest WHERE er_id = '$id'";
	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			if($row->er_report != null){
				$rows .= "<p><a href='files/".$row->er_report."' target='_blank' title='Click to View or Download'>Report</a></p>";
			}else{
				$rows .= "<p class='text-danger'>Reporty</p>";
			}
			///////// End of report
			if($row->er_powerpoint != null){
				$rows .= "<p><a href='files/".$row->er_powerpoint."' target='_blank' title='Click to View or Download'>Power Point</a></p>";
			}else{
				$rows .= "<p class='text-danger'>Power Point</p>";
			}
			///////// End of Power Point
			if($row->er_other != null){
				$rows .= "<p><a href='files/".$row->er_other."' target='_blank' title='Click to View or Download'>Power Point</a></p>";
			}else{
				$rows .= "<p class='text-danger'>Other</p>";
			}
			///////// End of Other
			return $rows;
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}

//Initialise that advisor is already check the request or not
function if_advisor_check_request($checked, $id){
	if($checked == 'w'){
		return "<a href='advisor/sql_approvepresentationrequest.php?id=".$id."' class='btn btn-success btn-xs' onclick='return confirm_approve()'><i class='glyphicon glyphicon-ok'></i> Approve</a><a href='advisor/sql_rejectpresentationrequest.php?id=".$id."' class='btn btn-danger btn-xs' onclick='return confirm_reject()'><i class='glyphicon glyphicon-remove' style='margin-left: 5px; margin-right: 5px;'></i> Reject</a>";
	}else{
		return null;
	}
}

function if_advisor_check_request_topic($checked, $id){
	if($checked == 'w'){
		return "<a href='advisor/sql_approvetopicrequest.php?id=".$id."' class='btn btn-success btn-xs' onclick='return confirm_approve()'><i class='glyphicon glyphicon-ok'></i> Approve</a><a href='advisor/sql_rejecttopicrequest.php?id=".$id."' class='btn btn-danger btn-xs' onclick='return confirm_reject()'><i class='glyphicon glyphicon-remove' style='margin-left: 5px; margin-right: 5px;'></i> Reject</a>";
	}else{
		return null;
	}
}

function if_advisor_check_request_advisor($checked, $id){
	if($checked == 'w'){
		return "<a href='advisor/approve_advisor.php?id=".$id."' class='btn btn-success btn-xs' onclick='return confirm_approve()'><i class='glyphicon glyphicon-ok'></i> Approve</a><a href='advisor/reject_advisor.php?id=".$id."' class='btn btn-danger btn-xs' onclick='return confirm_reject()'><i class='glyphicon glyphicon-remove' style='margin-left: 5px; margin-right: 5px;'></i> Reject</a>";
	}else{
		return null;
	}
}
//Get froup id from ag_id
function g_id_in_ag($ag_id){
	require 'connection.php';
	$sql = "SELECT g_id FROM tb_advisegroup WHERE ag_id = '$ag_id' AND ag_accept = '1'";
	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			return $row->g_id;
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}

//Select topic name from TABLE_REQEUST_TOPIC
function get_topic_name($tr_id){
	require 'connection.php';
	$sql = "SELECT tr_topic FROM tb_topicrequest WHERE tr_id = '$tr_id' AND tr_pass = '1'";
	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			return $row->tr_topic;
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}

//Set semester from month number
function semester(){
	$now = new DateTime('now');
	$month = $now->format('m');

	if($month >= 7 && $month <= 10){
		return '1';
	}else{
		return '2';
	}
}

//Get ag_id with advisor mb_id
function get_ag_of_advisor(){
	$mb_id = $_SESSION['id'];
	require 'connection.php';
	$sql = "SELECT ag_id FROM tb_advisegroup WHERE mb_id = '$mb_id' AND ag_accept = '1'";
	if($rs = $db->query($sql)){
		if($row = $rs->fetch_object()){
			return $row->ag_id;
		}
		$db->close();
	}else{
		echo $db->error;
		$db->close();
	}
}

//Check student ever send request advisor or not
function never_request_advisor($g_id){
	require 'connection.php';
	$sql = "SELECT ag_id FROM tb_advisegroup WHERE g_id = '$g_id'";
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
?>