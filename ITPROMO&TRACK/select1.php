<?php  
 if(isset($_POST["employee_ids"]))  
 {  


                     require 'menu/function.php';




 
      $output = '';  
      $connect = mysql_connect("localhost", "root", "", "itpromo&track"); 

          
$strSQL = "SELECT advisergroup.*,  topic_project.advisergroup_id, advisergroup.advisergroup_status,advisergroup.advisergroup_topic,advisergroup.group_id,topic_project.Student_name,topic_project.member_idcard,topic_project.topic_abstrack,topic_project.topic_keyword ,topic_project.topic_years,topic_project.topic_fieldstudy,topic_project.status FROM advisergroup

          LEFT JOIN topic_project ON advisergroup.advisergroup_id = topic_project.advisergroup_id

        LEFT JOIN member ON advisergroup.member_id = member.member_id

        
  WHERE advisergroup.advisergroup_id = '".$_POST["employee_ids"]."'"; 


      $result = mysql_query($connect, $strSQL);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysql_fetch_array($result))  

      {  
           $output .= '  
           
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["advisergroup_id"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row["member_idcard"].'</td>  
                </tr> 
                 <tr>  

                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["member_fullname"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row["advisergroup_topic"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["project_abstrack"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row["project_keyword"].'</td>  
                </tr>  
                   <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["project_fieldstudy"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row["project_status"].'</td>  
                </tr>  
          
          ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>
