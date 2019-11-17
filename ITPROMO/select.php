<?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "itpromo");  
      $query = "SELECT * FROM topic_project WHERE topic_id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  

      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["topic_id"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row["member_idcard"].'</td>  
                </tr> 
                 <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["Student_name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row["topic_topic"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["topic_abstrack"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row["topic_keyword"].'</td>  
                </tr>  
                   <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["topic_fieldstudy"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row["status"].'</td>  
                </tr>  
          
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>
