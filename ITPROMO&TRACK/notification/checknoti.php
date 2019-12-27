<meta charset="utf-8">
<?php
require '../menu/connect.php';



	$msg_text = $_POST['msg_text'];
 $topic_text = $_POST['topic_text'];

	

	$sql = "INSERT INTO apps_notification (msg_text,topic_text) VALUES ('$msg_text','$topic_text')";


$result=mysqli_query($db, $sql)or die ("Error in query: $sql ".mysqli_error());


//line notify
define('LINE_API',"https://notify-api.line.me/api/notify");
 
$token = "hR2WScGm6aGHpepANtavvJHFw8yutb2rl9YMmVZmj1R"; //ใส่Token ที่copy เอาไว้
$str = 
'Topic:'.$topic_text. 
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
echo "alert('thanks')";
echo "window.location='../index.php?page=notification';";
echo "</script>";
}

?>

