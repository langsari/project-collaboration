<?php
$page = null;
if(isset($_GET['page'])){
	$page = $_GET['page'];
}

switch ($page) {
	case 'all_member':
		include('admin/all_member.php');
		break;


case 'accept':
		include('admin/accept.php');
		break;

	case 'accept_member':
		include('admin/accept_member.php');
		break;

	case 'edit_member':
		include('admin/edit_member.php');
		break;

	case 'manage_mark':
		include('admin/manage_mark.php');
		break;

case 'add_proposal':
		include('admin/add_proposal.php');
		break;

case 'choose_committee':
		include('admin/choose_committee.php');
		break;

case 'student_track':
		include('admin/student_track.php');
		break;

case 'notification':
		include('notification/notification.php');
	break;

case 'dashboard':
		include('admin/dashboard.php');
	break;




	case 'view1':
		include('admin/view1.php');
		break;



	case 'edit_marktype':
		include('admin/edit_marktype.php');
		break;

	case 'view_result':
		include('admin/view_result.php');
		break;

	case 'project_group':
		include('admin/project_group.php');
		break;

	case 'choose_advisor':
		include('admin/choose_advisor.php');
		break;

	case 'create_projectschedule':
		include('admin/create_projectschedule.php');
		break;

	case 'create_presentschedule':
		include('admin/create_presentschedule.php');
		break;

	case 'advisor_request':
		include('advisor/advisor_request.php');
		break;
		
	case 'view':
		include('advisor/view.php');
		break;


 case 'notification':
		include('advisor/notification.php');
	break;

 case 'status_presentation':
		include('committee/status_presentation.php');
	break;




	case 'dashboard1':
			include('advisor/dashboard1.php');
	break;



case 'committee_request':
		include('committee/committee_request.php');
		break;

	case 'proposal_status':
			include('advisor/proposal_status.php');
	break;



	case 'users':
			include('advisor/users.php');
	break;


	case 'topic_request':
		include('student/topic_request.php');
		break;

	case 'my_group':
		include('student/my_group.php');
		break;

	case 'join_group':
		include('student/join_group.php');
		break;

		case 'presentation_request':
		include('student/presentation_request.php');
		break;

	case 'history':
		include('student/history.php');
		break;

	case 'request_advisor':
		include('student/request_advisor.php');
		break;


	

	

		case 'add_announcement':
		include('admin/add_announcement.php');
		break;

	    case 'add_schedule_proposal':
		include('admin/add_schedule_proposal.php');
		break;
		case 'add_schedule_project':
		include('admin/add_schedule_project.php');
		break;

#Lecturer

		case 'student_track_ptoject':
		include('advisor/student_track_ptoject.php');
		break;

		case 'add_general_topic':
		include('advisor/add_general_topic.php');
		break;





#officer

        case 'create_schedule_proposal':
		include('officer/create_schedule_proposal.php');
		break;

		case 'create_schedule_project':
		include('officer/create_schedule_project.php');
		break;

case 'officer_request':
		include('officer/officer_request.php');
		break;

case 'view2':
		include('officer/view2.php');
		break;



case 'view_track':
		include('officer/view_track.php');
		break;

#studet 		
case 'create_proposal':
		include('student/create_proposal.php');
		break;
		
case 'track_project':
		include('student/track_project.php');
		break;
		

		case 'pf01':
		include('form_pf/pf01.php');
		break;
		
	case 'pf02':
		include('form_pf/pf02.php');
		break;
		
			case 'pf03':
		include('form_pf/pf03.php');
		break;
		

case 'infor_group':
		include('student/infor_group.php');
		break;

case 'my_profile':
		include('student/my_profile.php');
		break;

case 'display_schedule_project':
		include('student/display_schedule_project.php');
		break;

case 'display_schedule_proposal':
		include('student/display_schedule_proposal.php');
	break;




case 'contact':
		include('advisor/contact.php');
	break;





#menu homepage

case 'show_topic':
	    include('show_topic.php');
		break;

case 'Annoucement':
	    include('Annoucement.php');
		break;

case 'proposal_project':
     	include('proposal_project.php');
		break;



case 'guide':
		include('guide.php');
	    break;

case 'schedule':
		include('schedule.php');
	    break;

case 'form':
		include('form.php');
	    break;

case 'booked':
		include('booked.php');
	    break;



case 'views':
		include('views.php');
	    break;




	default:
		include('homepage.php');
		break;
}

?>