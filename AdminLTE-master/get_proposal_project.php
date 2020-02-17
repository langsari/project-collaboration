<?php  

require 'menu/function.php';

 if(isset($_POST["id"]))  
 {  
$rows = array();
  $id = $_POST['id'];
 
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "itpromo_track");     
       $query = "SELECT * FROM topic_project WHERE topic_id = '$id'";
      $objQuery = $connect->query($query);
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
                        while($row = $objQuery->fetch_object()){
     $output .= '  

                 <tr>  

                     <td width="30%"><label>Owner</label></td>  
                     <td width="70%">'.$row->Owner.'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Topic</label></td>  
                     <td width="70%">'.$row->topic_topic.'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Abstrack</label></td>  
                     <td width="300%">'.$row->topic_abstrack.'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>keyword</label></td>  
                     <td width="70%">'.$row->topic_keyword.'</td>  
                </tr>  
                   <tr>  
                     <td width="30%"><label>Field of Study</label></td>  
                     <td width="70%">'.fieldstudy($row->topic_fieldstudy).'</td>  

                </tr>  
                <tr>  
                     <td width="30%"><label>status</label></td>  
                     <td width="70%">'.get_status_project($row->status).'</td>  
                </tr>  
          
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>
