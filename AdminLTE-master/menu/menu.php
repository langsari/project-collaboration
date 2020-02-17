
<?php
$user_rank = '';
if(isset($_SESSION['rank'])){
  $user_rank = $_SESSION['rank'];
}

if($user_rank == "admin"):
?>
<!-- menu สถานะ แอดมิน -->

    <li> <a href="?page=dashboard">  <i class="fa fa-dashboard"></i> Dashboard
    </a>
      </li>

   

<li><a><i class="fa fa-user"></i> Manage Member <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
 <li>
      <a href="?page=accept_member">
  Accept Member
      </a>
    </li>        
  <li>
      <a href="?page=choose_committee">
       Choose Committee
      </a>
    </li>

 <li>
      <a href="?page=all_member">
View All Member
      </a>
    </li>        
  <li>
    
  </ul>
</li>


<li><a><i class="fa fa-calendar"></i> Manage Schedule <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
 <li>
      <a href="?page=add_schedule_proposal">
Create Proposal Schedule
      </a>
    </li>        
  <li>
      <a href="?page=add_schedule_project">
Create Project Schedule      </a>
    </li>

  </ul>
</li>



<li><a><i class="fa fa-book"></i> Projects <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
 <li>
      <a href="?page=student_track">
Project Track
      </a>
    </li>        
  <li>
      <a href="?page=add_proposal">
Student project proposal      </a>
    </li>

<li>
      <a href="?page=proposal_project">
All project     </a>
    </li>

  </ul>
</li>


<li><a><i class="fa fa-book"></i>Manage Annoucements <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
 <li>
      <a href="?page=add_announcement">
Add Annoucements
      </a>
    </li>        


  </ul>
</li>





   <?php
        
include 'notification/notification.php';
?>

<!-- end Menu ของ admin -->



<!-- start Menu ของ Advisor -->


<?php elseif($user_rank == "Lecturer"):
  
 ?>



    <li> <a href="?page=dashboard1">  <i class="fa fa-dashboard"></i> Dashboard
    </a>
      </li>



    <li> <a href="?page=advisor_request">  <i class="fa fa-paper-plane"></i> Request
    </a>
      </li>





<li><a><i class="fa fa-book"></i>Projects<span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
 <li>
      <a href="?page=proposal_status">
Proposal Status      </a>
    </li>        

 <li>
      <a href="?page=project_mark">
 Project Mark      </a>
    </li>     

 <li>
      <a href="?page=proposal_project">
All Project     </a>
    </li>     

     <li>
      <a href="?page=#">
Give Mark as a Committee     </a>
    </li>     


  </ul>
</li>



<li><a><i class="fa fa-calendar"></i>Schedule<span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
 <li>
      <a href="?page=display_schedule_proposal">
Proposal Schedule     </a>
    </li>        

 <li>
      <a href="?page=display_schedule_project">
Project Schedule     </a>
    </li>     



  </ul>
</li>


    <li> <a href="?page=committee_request">  <i class="fa fa-tasks"></i>For Committee
    </a>
      </li>



<li><a><i class="fa fa-newspaper-o"></i>News<span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
 <li>
      <a href="?page=Annoucement">
Annoucements    </a>
    </li>        

 <li>
      <a href="?page=add_general_topic">
Topic Require    </a>
    </li>     



  </ul>
</li>



    <li> <a href="?page=my_profile">  <i class="fa fa-user"></i>Personal Information
    </a>
      </li>

 



      
        <?php

include 'phpmailer/message.php';
?>

 <!-- end Menu ของ advisor -->



  <!-- start Menu ของ Student -->

<?php elseif($user_rank == "Student"): ?>

    <li> <a href="?page=infor_group">  <i class="fa fa-group"></i> Group Information
    </a>
                  </li>


<li><a><i class="fa fa-book"></i> Projects <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
 <li>
      <a href="?page=create_proposal">
     Add Proposal 
      </a>
    </li>        
  <li>
      <a href="?page=pf01">
        Project Track
      </a>
    </li>

  <li>
      <a href="?page=proposal_project">
      <span>All Project Topics</span>
      </a>
    </li>
  </ul>
</li>

<li><a><i class="fa fa-calendar"></i> Schedule <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
  <li>
      <a href="?page=display_schedule_proposal">
       <span>Proposal Schedule</span>
      </a>
    </li>

   <li>
      <a href="?page=display_schedule_project">
      <span>Project Schedule</span>
      </a>
    </li>

  </ul>
</li>

<li><a><i class="fa fa-newspaper-o"></i> News <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
  <li>
      <a href="?page=Annoucement">
       <span>Annoucements</span>
      </a>
    </li>

   <li>
      <a href="?page=show_topic">
      <span>Topic Require</span>
      </a>
    </li>

  </ul>
</li>


    <li> <a href="?page=my_profile">  <i class="fa fa-user"></i>Personal Information
    </a>
     </li>

    <li> <a href="?page=guide">  <i class="fa fa-glide-g"></i>Guide
    </a>
                  </li>

    <li> <a href="?page=schedule">  <i class="fa fa-calendar"></i>course syllabus
    </a>
                  </li>


    <li> <a href="?page=form">  <i class="fa fa-edit"></i>Forms
    </a>
                  </li>
  
    <li> <a href="?page=booked">  <i class="fa fa-book"></i>Booked
    </a>
                  </li>
     

  


<!-- end menu of student -->


<!-- start Menu ของ officer -->

<?php elseif($user_rank == "Officer"): ?>



    <li> <a href="?page=officer_request">  <i class="fa fa-paper-plane"></i>Request
    </a>
     </li>


    <li> <a href="?page=view_track">  <i class="fa fa-book"></i>Student Track
    </a>
     </li>


<li><a><i class="fa fa-calendar"></i>Schedule <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
  <li>
      <a href="?page=create_schedule_proposal">
       <span>Create Schedule Proposal</span>
      </a>
    </li>

   <li>
      <a href="?page=create_schedule_project">
      <span>Create Schedule Project</span>
      </a>
    </li>

  </ul>
</li>


<li><a><i class="fa fa-newspaper-o"></i>News <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
  <li>
      <a href="?page=Annoucement">
       <span>Annoucements</span>
      </a>
    </li>

   <li>
      <a href="?page=show_topic">
      <span>Topic Require</span>
      </a>
    </li>

  </ul>
</li>


    <li> <a href="?page=proposal_project">  <i class="fa fa-book"></i>All project topics
    </a>
     </li>

    <li> <a href="?page=my_profile">  <i class="fa fa-user"></i>Personal Information
    </a>
     </li>



<!-- end menu of officer -->

<?php endif; ?>
