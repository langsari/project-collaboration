<?php  
 if(isset($_POST["employee_ids"]))  
 {  


                     require 'menu/function.php';




 
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "itpromo");  
      $query= "SELECT advisergroup.*, partnergroup.group_number,member.member_fullname,member.member_idcard  FROM advisergroup
          LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id

        LEFT JOIN member ON advisergroup.group_id = member.member_id

         WHERE advisergroup.advisergroup_id = '".$_POST["employee_ids"]."'"; 

      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  

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
