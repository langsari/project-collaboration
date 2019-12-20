
<?php
$user_rank = '';
if(isset($_SESSION['rank'])){
  $user_rank = $_SESSION['rank'];
}

if($user_rank == "admin"):
?>
<!-- menu สถานะ แอดมิน -->

<li class="active treeview">
  <a href="#">
    <i class="fa fa-users"></i> <span>Manage Member</span> 
  </a>
  <ul class="treeview-menu">
    <li>
      <a href="?page=accept_member">
        <i class="fa fa-circle-o"></i> <span>Accept Member</span>
      </a>
    </li>
    <li>
      <a href="?page=choose_committee">
        <i class="fa fa-circle-o"></i> <span>Choose Committee</span>
      </a>
    </li>
    <li>
      <a href="?page=all_member">
        <i class="fa fa-circle-o"></i> <span>View All Member</span>
      </a>
    </li>
  </ul>
</li>

<li class="active treeview">
  <a href="#">
    <i class="fa fa-calendar"></i> <span>Manage Schedule</span> 
  </a>
  <ul class="treeview-menu">
    <li>
      <a href="?page=add_schedule_proposal">
        <i class="fa fa-circle-o"></i> <span>Create Proposal Schedule</span>
      </a>
    </li>
    <li>
      <a href="?page=add_schedule_project">
        <i class="fa fa-circle-o"></i> <span>Create Project Schedule</span>
      </a>
    </li>
  </ul>
</li>
<li class="active treeview">
  <a href="#">
    <i class="fa fa-book"></i> <span>Projects</span>
  </a>
  <ul class="treeview-menu">
    <li>
      <a href="?page=student_track">
        <i class="fa fa-circle-o"></i> Project Track
      </a>
    </li>
    <li>
      <a href="?page=add_proposal">
        <i class="fa fa-circle-o"></i>  Student project proposal
      </a>
    </li>
    <li>
      <a href="?page=proposal_project">
        <i class="fa fa-circle-o"></i>  All project</a>
    </li>
  </ul>
</li>
<li class="active treeview">
  <a href="#">
    <i class="fa fa-bullhorn"></i> <span>Manage Annoucements</span> 
  </a>
  <ul class="treeview-menu">
    <li>
      <a href="?page=add_announcement">
        <i class="fa fa-circle-o"></i> <span>Add Annoucements</span></a>
    </li>
  </ul>
</li> 
<!-- end Menu ของ admin -->


<!-- start Menu ของ Advisor -->

<?php elseif($user_rank == "Advisor" AND "Officer"): ?>
<li class="treeview">
  <a href="?page=advisor_request">
    <i class="fa fa-paper-plane"></i> <span>Request</span>
  </a>
</li>



<li class="active treeview">
  <a href="#">
    <i class="fa fa-book"></i> <span>Projects</span> 
  </a>
  <ul class="treeview-menu">
    <li>
      <a href="?page=student_track_ptoject">
        <i class="fa fa-circle-o"></i> Project Track
      </a>
    </li>
    <li>

       

      <a href="pages_register.html">
        <i class="fa fa-circle-o"></i>  Project Mark
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-circle-o"></i> <span>All Project</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-circle-o"></i> <span>Give Mark as a Committee</span>
      </a>
    </li>
  </ul>
</li>
<li class="active treeview">
  <a href="#">
    <i class="fa fa-calendar"></i> <span>Schedule</span> 
  </a>
  <ul class="treeview-menu">
    <li>
      <a href="?page=display_schedule_proposal">
        <i class="fa fa-circle-o"></i> <span>Proposal Schedule</span>
      </a>
    </li>
    <li>
      <a href="?page=display_schedule_project">
        <i class="fa fa-circle-o"></i> <span>Project Schedule</span>
      </a>
    </li>
  </ul>
</li>
<li class="treeview">
  <a href="?page=my_profile">
    <i class="fa fa-user"></i> <span>Personal Information</span>
  </a>
</li>
 <!-- end Menu ของ advisor -->



  <!-- start Menu ของ Student -->

<?php elseif($user_rank == "Student"): ?>
<li class="active treeview">
  <a href="?page=infor_group">
    <i class="fa fa-group"></i> <span>Group Information</span> 
  </a>
  

</li>


<li class="active treeview">
  <a href="#">
    <i class="fa fa-book"></i> <span>Projects</span> 
  </a>
  <ul class="treeview-menu">

    <li>
      <a href="?page=create_proposal">
        <i class="fa fa-circle-o"></i> Add Proposal 
      </a>
    </li>

        <li>
      <a href="?page=track_project">
        <i class="fa fa-circle-o"></i> Project Track
      </a>
    </li>

  



  

     

    <li>
      <a href="?page=proposal_project">
        <i class="fa fa-circle-o"></i> <span>All Project Topics</span>
      </a>
    </li>
  </ul>
</li>


<li class="active treeview">
    <a href="#"> <i class="fa fa-calendar"></i>  
     <span>Schedule</span></a>
  </a>
  <ul class="treeview-menu">
    <li>
      <a href="?page=display_schedule_proposal">
        <i class="fa fa-circle-o"></i> <span>Proposal Schedule</span>
      </a>
    </li>
    <li>
      <a href="?page=display_schedule_project">
        <i class="fa fa-circle-o"></i> <span>Project Schedule</span>
      </a>
    </li>
  </ul>
</li>

<li class="active treeview">
  <a href="#">
    <i class="fa fa-newspaper-o"></i>  <span>News</span>
  </a>
  <ul class="treeview-menu">
         <li><a href="?page=Annoucement"><i class="fa fa-circle-o"></i> Annoucements </a></li>
         <li><a href="?page=show_topic"><i class="fa fa-circle-o"></i> Topic Require </a></li>
         </ul>
</li>
<li class="treeview">
  <a href="?page=my_profile">
    <i class="fa fa-user"></i> <span>Personal Information</span>
  </a>
</li>


<!-- end menu of student -->


<!-- start Menu ของ officer -->

<?php elseif($user_rank == "Officer"): ?>

<li class="active treeview">
  <a href="?page=officer_request">   
    <i class="fa fa-paper-plane-o"></i><span>Project Track</span>
  </a>
</li>

<li class="active treeview">
    <a href="#"> <i class="fa fa-calendar"></i>  
     <span>Schedule</span></a>
  </a>
  <ul class="treeview-menu">
    <li>
      <a href="?page=create_schedule_proposal">
        <i class="fa fa-circle-o"></i> Create Schedule Proposal
      </a>
    </li>
    <li>
      <a href="?page=create_schedule_project">
        <i class="fa fa-circle-o"></i> Create Schedule Project
      </a>
    </li>
  </ul>
</li>
<li class="active treeview">
  <a href="#">
    <i class="fa fa-newspaper-o"></i>  <span>News</span>
  </a>
  <ul class="treeview-menu">
         <li><a href="?page=Annoucement"><i class="fa fa-circle-o"></i> Annoucements </a></li>
         <li><a href="?page=show_topic"><i class="fa fa-circle-o"></i> Topic Require </a></li>
         </ul>
</li>
<li class="treeview">
  <a href="?page=proposal_project">
    <i class="fa fa-book"></i> <span>All project topics</span>
  </a>
</li>
<li class="treeview">
  <a href="?page=my_profile">
    <i class="fa fa-user"></i> <span>Personal Information</span>
  </a>
</li>

<!-- end menu of officer -->

<?php endif; ?>
