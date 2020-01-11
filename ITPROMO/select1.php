<?php  

require 'menu/function.php';

 if(isset($_POST["id"]))  
 {  
$rows = array();
  $id = $_POST['id'];





 
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "itpromo");  
    

          $query = "SELECT * FROM topic_project WHERE advisergroup_id = '$id'";


      $objQuery = $connect->query($query);
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  

                        while($row = $objQuery->fetch_object()){

     $output .= '  

           
              
         
                 <tr>  

                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row->topic_topic.'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row->Owner.'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row->topic_abstrack.'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row->topic_keyword.'</td>  
                </tr>  
                   <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row->topic_fieldstudy.'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.status($row->status).'</td>  
                </tr>  
          
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>
