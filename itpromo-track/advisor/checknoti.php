<meta charset="utf-8">
<?php
include("../menu/function.php");
require '../menu/connect.php';



	$chat_massage = $_POST['chat_massage'];
	  	$advisergroup_id = get_ag_id1(get_group_id1());
     $chat_date_time = $_POST['chat_date_time'];
      $member_id = $_POST['member_id'];

	$sql = "INSERT INTO chat (chat_massage, advisergroup_id,chat_date_time,member_id) VALUES ('$chat_massage', '$advisergroup_id','$chat_date_time','$member_id')";


$result=mysqli_query($db, $sql)or die ("Error in query: $sql ".mysqli_error());


//line notify
define('LINE_API',"https://notify-api.line.me/api/notify");
 
$token = "Al72c1rAXA11dQRexdpDhY2fSRrPpeKiUrJvePX2HCy"; //ใส่Token ที่copy เอาไว้
$str = $chat_massage; //ข้อความที่ต้องการส่ง สูงสุด 1000 ตัวอักษร
 
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

