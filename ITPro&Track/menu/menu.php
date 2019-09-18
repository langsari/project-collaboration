 <!-- Menu ของ admin -->
<?php
$user_rank = '';
if(isset($_SESSION['rank'])){
  $user_rank = $_SESSION['rank'];
}

if($user_rank == "admin"):
?>
<!-- menu สถานะ แอดมิน -->


    <li class="navigation-header">
                <span>Menu</span>
                <i class="icon-menu"></i>
            </li>
      <li>
      <a href="#"><i class="fa fa-users"></i> <span>Manage Member</span></a>
      <ul>
      <li>  <a href="?page=accept_member"><i class="fa fa-circle-o"></i>  Accept Member</a></li>
       <li><a href="?page=choose_committee"><i class="fa fa-circle-o"></i>  Choose committee</a></li>
       <li><a href="?page=all_member"><i class="fa fa-circle-o"></i>  All Member</a></li>
      </ul>
       </li>


         <li>
        <a href="#"> <i class="fa fa-calendar"></i><span>Manage Schedule</span></a>
         <ul>
        <li><a href="pages_login.html"><i class="fa fa-circle-o"></i> Create Schedule Proposal</a></li>
         <li><a href="pages_login.html"><i class="fa fa-circle-o"></i> Create Schedule Project</a></li>
        </ul>
        </li>

       <li>
         <a href="#"> <i class="fa fa-book"></i> <span>Projects</span></a>  
         <ul>
         <li><a href="?page=view_studentstatus"><i class="fa fa-circle-o"></i> Project Track</a></li>
         <li><a href="pages_register.html"><i class="fa fa-circle-o"></i>  Student project proposal</a></li>
         <li><a href="pages_register.html"><i class="fa fa-circle-o"></i>  All project</a></li>
         </ul>
         </li>

         <li>
          <a href="index.html"><i class="fa fa-bullhorn"></i> <span>Manage Annoucements</span></a></li>
         <li>
          <a href="index.html">    <i class="fa fa-circle-o"></i> <span>Manage Mark</span></a>
         </li>


 <!-- /Menu ของ admin -->




 <!-- Menu ของ Advisor -->

<?php elseif($user_rank == "1"): ?>

      <li class="navigation-header">
                <span>Menu</span>
                <i class="icon-menu"></i>
            </li>
    
        <li>
          <a href="?page=view_studentstatus">  <i class="fa fa-paper-plane"></i><span>Request</span></a></li>
         <li>

         <li>
         <a href="#"> <i class="fa fa-book"></i> <span>Projects</span></a>  
         <ul>
         <li><a href="?page=view_studentstatus"><i class="fa fa-circle-o"></i> Project Track</a></li>
         <li><a href="pages_register.html"><i class="fa fa-circle-o"></i>  Project Mark</a></li>
         </ul>
         </li>

         <li>
         <a href="#"> <i class="fa fa-calendar"></i>  <span>Schedule</span></a>  
         <ul>
         <li><a href="pages_login.html"><i class="fa fa-circle-o"></i> Create Schedule Proposal</a></li>
         <li><a href="pages_login.html"><i class="fa fa-circle-o"></i> Create Schedule Project</a></li>
         </ul>
         </li>

         <li>
         <a href="#"> <i class="fa fa-newspaper-o"></i>  <span>News</span></a>  
         <ul>
         <li><a href="pages_login.html"><i class="fa fa-circle-o"></i> Annoucements </a></li>
         <li><a href="pages_login.html"><i class="fa fa-circle-o"></i> Topic </a></li>
         </ul>
         </li>

          <li>
          <a href="index.html"><i class="fa fa-circle-o"></i> <span>All Project</span></a></li>
         <li>




 <!-- /Menu ของ advisor -->




  <!-- Menu ของ Student -->

<?php elseif($user_rank == "3"): ?>


 <li class="navigation-header">
                <span>Menu</span>
                <i class="icon-menu"></i>
            </li>
    
        <li>
          <a href="?page=view_studentstatus">  <i class="fa fa-group"></i><span>Group Information</span></a></li>
         <li>

         <li>
         <a href="#"> <i class="fa fa-calendar"></i>   <span>Schedule</span></a>  
       <ul>
         <li><a href="pages_login.html"><i class="fa fa-circle-o"></i>  Schedule Proposal</a></li>
         <li><a href="pages_login.html"><i class="fa fa-circle-o"></i>  Schedule Project</a></li>
         </ul>
         </li>

        <li>
         <a href="#"> <i class="fa fa-book"></i> <span>Projects</span></a>  
         <ul>
         <li><a href="?page=view_studentstatus"><i class="fa fa-circle-o"></i> Project Track</a></li>
         <li><a href="pages_register.html"><i class="fa fa-circle-o"></i> Add Student Proposal </a></li>
         </ul>
         </li>

        <li>
         <a href="#"> <i class="fa fa-newspaper-o"></i>  <span>News</span></a>  
         <ul>
         <li><a href="pages_login.html"><i class="fa fa-circle-o"></i> Annoucements </a></li>
         <li><a href="pages_login.html"><i class="fa fa-circle-o"></i> Topic </a></li>
         </ul>
         </li>

         <li>
          <a href="index.html"><i class="fa fa-circle-o"></i> <span>All Project</span></a></li>
         <li>


         <li>
          <a href="index.html"><i class="fa fa-glide-g"></i> <span>Guide</span></a></li>
         <li>



  <!-- /Menu ของ Student -->





  <!-- Menu ของ Officer -->


<?php elseif($user_rank == "4"): ?>

 <li class="navigation-header">
                <span>Menu</span>
                <i class="icon-menu"></i>
            </li>
    
        <li>
          <a href="?page=view_studentstatus">   <i class="fa fa-paper-plane-o"></i><span>Project Track</span></a></li>
         <li>

         <li>
         <a href="#"> <i class="fa fa-calendar"></i>   <span>Schedule</span></a>  
       <ul>
         <li><a href="pages_login.html"><i class="fa fa-circle-o"></i> Create Schedule Proposal</a></li>
         <li><a href="pages_login.html"><i class="fa fa-circle-o"></i> Create Schedule Project</a></li>
         </ul>
         </li>


        <li>
         <a href="#"> <i class="fa fa-newspaper-o"></i>  <span>News</span></a>  
         <ul>
         <li><a href="pages_login.html"><i class="fa fa-circle-o"></i> Annoucements </a></li>
         <li><a href="pages_login.html"><i class="fa fa-circle-o"></i> Topic </a></li>
         </ul>
         </li>

         <li>
          <a href="index.html"><i class="fa fa-circle-o"></i> <span>All Project</span></a></li>
         <li>

<?php endif; ?>
  <!-- /Menu ของ Officer -->
