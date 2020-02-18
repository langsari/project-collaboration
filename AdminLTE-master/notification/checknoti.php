<meta charset="utf-8">
<?php
include("../menu/function.php");
require '../menu/connect.php';


  $msg_text = $_POST['msg_text'];
    $member_id = $_POST['member_id'];
  


  

  $sql = "INSERT INTO apps_notification (msg_text,member_id) VALUES ('$msg_text','$member_id')";


$result=mysqli_query($db, $sql)or die ("Error in query: $sql ".mysqli_error());


//line notify
define('LINE_API',"https://notify-api.line.me/api/notify");
 
$token = "qNr0NHmEzbKIqQp3NEi4J34mD9637oEdkFz42LL3fWq"; //ใส่Token ที่copy เอาไว้
$str = 
'Detail: '.$msg_text;


//ข้อความที่ต้องการส่ง สูงสุด 1000 ตัวอักษร


$res = notify_message($str,$token);
print_r($res);
function notify_message($message,$token){
 $queryData = array('message' => $message);
 $queryData = http_build_query($queryData,'','&');
 $headerOptions = array( 
         'http'=>array(
            'method'=>'POST',
            'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
                      ."Authorization: Bearer ".$token."\r\n"
                      ."Content-Length: ".strlen($queryData)."\r\n",
            'content' => $queryData
         ),
 );
 $context = stream_context_create($headerOptions);
 $result = file_get_contents(LINE_API,FALSE,$context);
 $res = json_decode($result);
 return $res;
}





mysqli_close($db);
if($result){
echo"<script type='text/javascript'>";
echo "alert('Already Send')";
echo "window.location='../admin/index.php';";
echo "</script>";
}

?>

