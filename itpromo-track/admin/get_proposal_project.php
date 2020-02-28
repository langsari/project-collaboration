<?php  

session_start();
require '../menu/connect.php';
include('../menu/function.php');


 if(isset($_POST["id"]))  
 {  
$rows = array();
  $id = $_POST['id'];
 
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "itpromo_track");     
      $query = "SELECT * FROM topic_project WHERE topic_id = '$id'";

      $objQuery = $connect->query($query);
      $output .= '';  
                        while($row = $objQuery->fetch_object()){
     $output .= '  

                  
                 <tr>  
                     <td width="30%"><label>Students</label></td>  
                     <td width="70%">'.$row->Owner.'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>ProjectID</label></td>  
                     <td width="70%">'.$row->group_number.'</td>  
                </tr

                <tr>  
                     <td width="30%"><label>Topic</label></td>  
                     <td width="70%">'.$row->topic_topic.'</td>  
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
                     <td width="30%"><label>Advisor</label></td>  
                     <td width="70%">'.get_advisor($row->advisergroup_id).'</td>  

                </tr>
                <tr>  
                     <td width="30%"><label>status</label></td>  
                     <td width="70%">'.get_status_project($row->status).'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Abstrack</label></td>  
                     <td width="300%">'.$row->topic_abstrack.'</td>  
                </tr>
          
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>